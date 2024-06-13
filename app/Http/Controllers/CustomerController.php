<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        dd($body);
        $user = Auth::user();
        $cus_id = GlobalFunc::getNewId();
        $body['customer_id'] = $cus_id;
        $rules = array(
            'customer_name' => 'required',
            'customer_tel' => 'required',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
            'sales_in_charge' => 'required',
            'favorite_product' => 'required',
        );
        $messages = array(
            'customer_name.required' => 'กรุณากรอกข้อมูล!',
            'customer_tel.required' => 'กรุณากรอกข้อมูล!',
            'tel.required' => 'กรอกเบอร์ไม่ครบถ้วน!',
            'tel.numeric' => 'กรอกเบอร์เฉพาะตัวเลข!',
            'tel.regex' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'tel.digits' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'sales_in_charge.required' => 'กรุณากรอกข้อมูล!',
            'favorite_product.required' => 'กรุณากรอกข้อมูล!',
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
        $uploadImg = GlobalFunc::uploadImg($request, $user, $cus_id, "customer_img", "customer"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg != null) {
            $body['customer_img'] = array_key_exists('customer_img', $uploadImg) ? $uploadImg["customer_img"] : NULL;
        } else {
            unset($body["customer_img"]);
        }
        $result = CustomerService::create($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public function delete($customer_id)
    {
        $result = CustomerService::delete($customer_id);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public static function fetch()
    {
        $result = CustomerService::fetch();
        if (!$result) {
            return JsonResult::errors(null, 'ไม่พบข้อมูล');
        }
        return JsonResult::success($result);
    }
}
