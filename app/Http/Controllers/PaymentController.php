<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Services\CustomerServices\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $payment_id = GlobalFunc::getNewId();
        $body['payment_id'] = $payment_id;
        $rules = array(
            // 'img_slip' => 'required|mimes:jpeg,png|max:5120', //!ไฟล์ไม่เกิน 2MB
            'img_receipt' => 'nullable|mimes:pdf|max:5120', //!ไฟล์ไม่เกิน 2MB
        );
        $messages = array(
            // 'img_slip.required' => 'อัพโหลดไฟล์สลิปเงินด้วย!',
            // 'img_slip.max' => 'ขนาดของไฟล์รูปใหญ่เกินไป!',
            // 'img_slip.mimes' => 'ประเภทไฟล์รูปไม่ถูกต้อง!',
            // 'receipt_img.required' => 'อัพโหลดไฟล์ใบเสร็จด้วย!',
            'img_receipt.max' => 'ขนาดของไฟล์รูปใหญ่เกินไป!',
            'img_receipt.mimes' => 'ประเภทไฟล์รูปไม่ถูกต้อง!'
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $message = array();
            $str = "";
            foreach ($errors as $key => $items) {
                foreach ($items as $key => $item) {
                    $str = $key + 1;
                    $str .= ".";
                    $str .= $item;
                    array_push($message, $str);
                }
            }
            $str = "";
            foreach ($message as $key => $item) {
                if ($key == 0) {
                    $str = ($key + 1) . "." . explode(".", $item)[1];
                    $str .= "\n ";
                } else {
                    $str .= ($key + 1) . "." . explode(".", $item)[1];
                    $str .= "\n";
                }
            }
            $result['data'] = null;
            $result['success'] = false;
            $result['message'] = $str;
            return JsonResult::errors($result['data'], $result['message']);
        }
        //!------------------------------อัพโหลดรูปภาพ----------------------------------------------
        // foreach ($request->file('img_slip') as $file) {
        // $image = $request->file($type);
        // if ($image) {
        //     // $id = $user->id;
        //     list($imagePathStorage, $imagePathDB) = self::path_image($user->sys_customer_code, $location);
        //     // Delete existing image
        //     File::delete($imagePathStorage . $id);

        //     // Move the new image and update profile_img field
        //     $new_img_name = $id . '.' . $image->getClientOriginalExtension();
        //     $image->move($imagePathStorage, $new_img_name);
        //     $body[$type] = $imagePathDB . $new_img_name;
        //
        // }
        // }
        // dd($body);
        if ($request->hasFile('img_slip')) {
            $num = 1;
            foreach ($body['img_slip'] as $key => $value) {
                $image = $request->file('img_slip');
                if ($image) {

                    $imagePathStorage = public_path("assets/images/" . $user->sys_customer_code . "/silp/" . $payment_id);
                    $imagePathDB = "/assets/images/" . $user->sys_customer_code . "/silp/" . $payment_id;
                    // Delete existing image
                    File::delete($imagePathStorage . $num);

                    // Move the new image and update profile_img field
                    $new_img_name = $key + 1 . '.' . $value->getClientOriginalExtension();
                    $value->move($imagePathStorage, $new_img_name);
                    $body['img_slip'][$key] = $imagePathDB . "/" . $new_img_name;
                    // dd($imagePathStorage, $body[$type], '77788');
                }
            }
        }
        $receipt = GlobalFunc::uploadImg($request, $user, $payment_id, 'img_receipt', "receipt"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($receipt == null) {
            $body['img_receipt'] = null;
        } else {
            if ($receipt != null) {
                $body['img_receipt'] = array_key_exists('img_receipt', $receipt) ? $receipt['img_receipt'] : NULL;
            } else {
                unset($body["img_receipt"]);
            }
        }
        $result = PaymentService::create($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public static function fetchById($payment_id)
    {
        $result = PaymentService::fetchById($payment_id);
        if (is_null($result)) {
            return JsonResult::errors(null, 'ไม่พบข้อมูล');
        }
        return JsonResult::success($result);
    }
}
