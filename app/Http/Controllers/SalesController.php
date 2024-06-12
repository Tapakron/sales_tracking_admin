<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Http\Controllers\Controller;
use App\Services\AuthService\SalesService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $user_id = GlobalFunc::getNewId();
        $body['id'] = $user_id;
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
            'sales_level' => 'required',
        );
        $messages = array(
            'name.required' => 'กรุณากรอกข้อมูล!',
            'username.required' => 'กรุณากรอกข้อมูล!',
            'tel.required' => 'กรอกเบอร์ไม่ครบถ้วน!',
            'tel.numeric' => 'กรอกเบอร์เฉพาะตัวเลข!',
            'tel.regex' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'tel.digits' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'sales_level.required' => 'กรุณากรอกข้อมูล!',
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
        $uploadImg = GlobalFunc::uploadImg($request, $user, $user_id, 'user_img', "user"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg == null) {
            $body['user_img'] = null;
        } else {
            if ($uploadImg != null) {
                $body['user_img'] = array_key_exists('user_img', $uploadImg) ? $uploadImg["user_img"] : NULL;
            } else {
                unset($body["user_img"]);
            }
        }
        $result = SalesService::create($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public function update(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
            'sales_level' => 'required',
        );
        $messages = array(
            'name.required' => 'กรุณากรอกข้อมูล!',
            'username.required' => 'กรุณากรอกข้อมูล!',
            'tel.required' => 'กรอกเบอร์ไม่ครบถ้วน!',
            'tel.numeric' => 'กรอกเบอร์เฉพาะตัวเลข!',
            'tel.regex' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'tel.digits' => 'กรอกเบอร์ไม่ครบ 10 ตัว!',
            'sales_level.required' => 'กรุณากรอกข้อมูล!',
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
        $uploadImg = GlobalFunc::uploadImg($request, $user, $body['id'], 'user_img', 'user'); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg != null) {
            $body['user_img'] = array_key_exists('user_img', $uploadImg) ? $uploadImg["user_img"] : NULL;
        } else {
            unset($body["user_img"]);
        }
        // if ($uploadImg == null) {
        //     $body['user_img'] = null;
        // } else {
        //     if ($uploadImg != null) {
        //         $body['user_img'] = array_key_exists('user_img', $uploadImg) ? $uploadImg["user_img"] : NULL;
        //     } else {
        //         unset($body["user_img"]);
        //     }
        // }
        $result = SalesService::update($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public function delete($user_id)
    {
        $result = SalesService::delete($user_id);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public static function deleteSelect(Request $request)
    {
        $body = $request->all();
        $result = SalesService::deleteSelect($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public static function fetch()
    {
        $result = SalesService::fetch();
        if (!$result) {
            return JsonResult::errors(null, 'ไม่พบข้อมูล');
        }
        return JsonResult::success($result);
    }
    public static function fetchById($user_id)
    {
        $result = SalesService::fetchById($user_id);
        if (!$result) {
            return JsonResult::errors(null, 'ไม่พบข้อมูล');
        }
        return JsonResult::success($result);
    }
}
