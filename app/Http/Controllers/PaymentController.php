<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Services\CustomerServices\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $payment_id = GlobalFunc::getNewId();
        $body['payment_id'] = $payment_id;
        // $rules = array(
        //     'name' => 'required',
        //     'username' => 'required',
        //     'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
        //     'sales_level' => 'required',
        // );
        // $messages = array(
        //     'name.required' => 'กรุณากรอกข้อมูล!',
        //     'username.required' => 'กรุณากรอกข้อมูล!',
        //     'tel.required' => 'กรอกเบอร์ไม่ครบถ้วน!',
        //     'tel.numeric' => 'กรอกเบอร์เฉพาะตัวเลข!',
        //     'tel.regex' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
        //     'tel.digits' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
        //     'sales_level.required' => 'กรุณากรอกข้อมูล!',
        // );
        // $validator = Validator::make($request->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     $errors = $validator->errors()->toArray();
        //     $message = array();
        //     $str = "";
        //     foreach ($errors as $key => $items) {
        //         foreach ($items as $key => $item) {
        //             $str = $key + 1;
        //             $str .= ".";
        //             $str .= $item;
        //             array_push($message, $str);
        //         }
        //     }
        //     $str = "";
        //     foreach ($message as $key => $item) {
        //         if ($key == 0) {
        //             $str = ($key + 1) . "." . explode(".", $item)[1];
        //             $str .= "\n ";
        //         } else {
        //             $str .= ($key + 1) . "." . explode(".", $item)[1];
        //             $str .= "\n";
        //         }
        //     }
        //     $result['data'] = null;
        //     $result['success'] = false;
        //     $result['message'] = $str;
        //     return JsonResult::errors($result['data'], $result['message']);
        // }
        //!------------------------------อัพโหลดรูปภาพ----------------------------------------------
        $pay_slip = GlobalFunc::uploadImg($request, $user, $payment_id, 'slip_img', "silp"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($pay_slip == null) {
            $body['slip_img'] = null;
        } else {
            if ($pay_slip != null) {
                $body['slip_img'] = array_key_exists('slip_img', $pay_slip) ? $pay_slip['slip_img'] : NULL;
            } else {
                unset($body["slip_img"]);
            }
        }
        $receipt = GlobalFunc::uploadImg($request, $user, $payment_id, 'receipt', "receipt"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($receipt == null) {
            $body['receipt_img'] = null;
        } else {
            if ($receipt != null) {
                $body['receipt_img'] = array_key_exists('receipt_img', $receipt) ? $receipt['receipt_img'] : NULL;
            } else {
                unset($body["receipt_img"]);
            }
        }
        $result = PaymentService::create($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
}
