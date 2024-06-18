<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Services\CompanyServices\NewsService;
use Carbon\Carbon;
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
            'image' => 'nullable|mimes:jpeg,png|max:5120', //!ไฟล์ไม่เกิน 2MB
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
        $uploadImg = GlobalFunc::uploadImg($request, $user, $news_id, "image", "news"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg != null) {
            $body['image'] = array_key_exists('image', $uploadImg) ? $uploadImg["image"] : NULL;
        } else {
            unset($body["image"]);
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
        $uploadImg = GlobalFunc::uploadImg($request, $user, $body['news_id'], "image", "news"); //! request จากหน้าบ้าน,ข้อมูล user, id ไปใส่ชื่อไฟล์ , ตัวแปร , ชื่อไฟล์จะเก็บรูป
        if ($uploadImg != null) {
            $body['image'] = array_key_exists('image', $uploadImg) ? $uploadImg["image"] : NULL;
        } else {
            unset($body["image"]);
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
            $arrayDate = explode('-', $body['search_date']);
            $date_start = $arrayDate[0];
            $date_end = $arrayDate[1];

            $date_start = Carbon::createFromFormat('d/m/Y', trim($date_start));
            $formattedStartDate = $date_start->format('Y-m-d');

            $date_end = Carbon::createFromFormat('d/m/Y', trim($date_end));
            $formattedEndDate = $date_end->format('Y-m-d');

            $body['search_date'] = $formattedStartDate . "/" . $formattedEndDate;

            $result = NewsService::fetch2($body);
            // dd($result);
            $data['pageDetails'] = [
                'list_news2' => $result
            ];
            // dd($data);
            if (!$result) {
                redirect()->route('search.news')->with('ไม่พบข้อมูล');
                // return JsonResult::errors(null, 'ไม่พบข้อมูล');
            }
            // return JsonResult::success($result);
            return redirect()->route('search.news')->with($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function search(Request $request)
    {
        try {
            $body = $request->all();
            $arrayDate = explode('-', $body['search_date']);
            $date_start = $arrayDate[0];
            $date_end = $arrayDate[1];

            $date_start = Carbon::createFromFormat('d/m/Y', trim($date_start));
            $formattedStartDate = $date_start->format('Y-m-d');

            $date_end = Carbon::createFromFormat('d/m/Y', trim($date_end));
            $formattedEndDate = $date_end->format('Y-m-d');

            $body['search_date'] = $formattedStartDate . "/" . $formattedEndDate;

            $arraySearch = [
                'search_title' => $body['search_title'],
                'startDate' => $formattedStartDate,
                'endDate' => $formattedEndDate
            ];
            $result = NewsService::fetch2($body);
            $data['pageDetails'] = [
                'list_news2' => $result,
                'search' => $arraySearch
            ];
            if (!$result) {
                redirect()->route('list.news')->with('ไม่พบข้อมูล');
                // return JsonResult::errors(null, 'ไม่พบข้อมูล');
            }
            // return JsonResult::success($result);
            // dd($data);
            return redirect()->route('list.news')->with($data);
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
