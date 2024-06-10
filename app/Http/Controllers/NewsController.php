<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CompanyModels\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        $user = Auth::user();
        $news_id = GlobalFunc::getNewId();
        $body['news_id'] = $news_id;
        $rules = array(
            'title' => 'required',
            'image' => 'nullable|mimes:jpeg,png|max:2048', //!ไฟล์ไม่เกิน 2MB
        );
        $messages = array(
            'title.required' => 'กรุณากรอกข้อมูล!',
            'image.mimes' => 'ประเภทไฟล์รูปไม่ถูกต้อง!',
            'image.max' => 'ขนาดของไฟล์รูปใหญ่เกินไป!',
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image) {
                // $emp_id = $empProfile->employee_profile_id;
                $imagePath = GlobalFunc::path_image_news($user->sys_customer_code);
                // Delete existing image
                File::delete($imagePath . $news_id);
                // Move the new image and update emp_img field
                $new_img_name = $news_id . '.' . $image->getClientOriginalExtension();
                $image->move($imagePath, $new_img_name);
                $body['image'] = $imagePath . $new_img_name;
            }
        } else {
            $body['image'] = NULL;
        }
        $result = NewsService::create($body);
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
            'title' => 'required',
            'image' => 'nullable|mimes:jpeg,png|max:2048', //!ไฟล์ไม่เกิน 2MB
        );
        $messages = array(
            'title.required' => 'กรุณากรอกข้อมูล!',
            'image.mimes' => 'ประเภทไฟล์รูปไม่ถูกต้อง!',
            'image.max' => 'ขนาดของไฟล์รูปใหญ่เกินไป!',
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image) {
                // $emp_id = $empProfile->employee_profile_id;
                $imagePath = GlobalFunc::path_image_news($user->sys_customer_code);
                $imgaePateDB =
                    // Delete existing image
                    File::delete($imagePath . $body['news_id']);
                // Move the new image and update emp_img field
                $new_img_name = $body['news_id'] . '.' . $image->getClientOriginalExtension();
                $image->move($imagePath, $new_img_name);
                $body['image'] = $imagePath . $new_img_name;
            }
        } else {
            $body['image'] = NULL;
        }
        $result = NewsService::update($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public function delete($news_id)
    {
        $result = NewsService::delete($news_id);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
    public static function fetch(Request $request)
    {
        try {
            $body = $request->all();
            $result = NewsService::fetch($body);
            if (!$result) {
                return JsonResult::errors(null, 'ไม่พบข้อมูล');
            }
            return JsonResult::success($result);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchById($news_id)
    {
        try {
            $result = NewsService::fetchById($news_id);
            if (is_null($result)) {
                return JsonResult::errors(null, 'ไม่พบข้อมูล');
            }
            return JsonResult::success($result);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
