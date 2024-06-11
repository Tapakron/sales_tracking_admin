<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Services\CompanyServices\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function updateProfile(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $rules = array(
            'company_name' => 'required',
            'company_email' => 'required',
        );
        $messages = array(
            'company_name.required' => 'กรุณากรอกข้อมูล!',
            'company_email.required' => 'กรุณากรอกข้อมูล!',
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
                    $str =   ($key + 1) . "." . explode(".", $item)[1];
                    $str .=   "\n ";
                } else {
                    $str .=   ($key + 1) . "." . explode(".", $item)[1];
                    $str .=   "\n";
                }
            }
            $result['data'] = null;
            $result['success'] = false;
            $result['message'] = $str;
            return JsonResult::errors($result['data'], $result['message']);
        }
        //!------------------------------อัพโหลดรูปภาพ----------------------------------------------
        $uploadImg = GlobalFunc::uploadImg($request, $user, $user->company_id, "company_img", "company"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg != null) {
            $body['company_img'] = array_key_exists('company_img', $uploadImg) ? $uploadImg["company_img"] : NULL;
        } else {
            unset($body["company_img"]);
        }
        $result = CompanyService::update($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public function updateAddress(Request $request)
    {
        $body = $request->all();
        $result = CompanyService::update($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
}
