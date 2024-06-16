<?php

namespace App\Services\CompanyServices;

use App\Helpers\GlobalFunc;
use App\Models\CompanyModels\NewsModel;
use App\Models\SysUsers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsService
{
    public static function create($body)
    {
        try {
            $user = Auth::user();
            $body += [
                'company_id' => $user->company_id,
                'is_delete' => false,
                'created_at' => Carbon::now(),
                'created_by' => $user->id
            ];
            $rsCreate = NewsModel::create($body);
            if ($rsCreate == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                return $rs;
            }

            $rs['message'] = "บันทึกข้อมูลสำเร็จ";
            $rs['success'] = $rsCreate;
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function update($body)
    {
        try {
            $user = Auth::user();
            $news_id = $body['news_id'];
            unset($body['new_id']);
            $body = [
                'updated_at' => Carbon::now(),
                'updated_by' => $user->id
            ];
            $rsUpdate = NewsModel::update($news_id, $body);
            if ($rsUpdate == false) {
                $rs['message'] = "แก้ไขข้อมูลผิดพลาด";
                $rs['success'] = $rsUpdate;
                return $rs;
            }
            $rs['message'] = "แก้ไขข้อมูลสำเร็จ";
            $rs['success'] = $rsUpdate;
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function delete($news_id)
    {
        try {
            $user = Auth::user();
            $body = [
                'is_delete' => true,
                'deleted_at' => Carbon::now(),
                'deleted_by' => $user->id
            ];
            $rsDelete = NewsModel::update($news_id, $body);
            if ($rsDelete == false) {
                $rs['message'] = "แก้ไขข้อมูลผิดพลาด";
                $rs['success'] = $rsDelete;
                return $rs;
            }

            $rs['message'] = "แก้ไขข้อมูลสำเร็จ";
            $rs['success'] = $rsDelete;
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetch($body)
    {
        try {
            // dd($body,'yyy');
            $user = Auth::user();
            $newsArray = array();
            if (!empty($body['search_date'])) {
                $arrayDate = explode('/', $body['search_date']);
                $date_start = $arrayDate[0];
                $date_end = $arrayDate[1];
                // $date_end = $date_end->addDay();
                // dd($search_date);
            } else {
                $date_start = '';
                $date_end = '';
            }
            $fliters = [
                'company_id' => $user->company_id,
                'search_title' => $body['search_title'],
                'date_start' => $date_start,
                'date_end' => $date_end,
                //! ----------------------------------------
                'size' => $body['size'],
                'page' => $body['page']
            ];
            $data = NewsModel::fetch($fliters);
            // list($total, $data) = NewsModel::fetchByPaginate($fliters);

            if (count($data) > 0) {
                foreach ($data as $key => $value) {
                    $newsArray[$key] = (array) $value;
                    $newsArray[$key]['created_at'] = GlobalFunc::formatDateTime($value->created_at);
                }
            }
            // dd($newsArray);
            return $newsArray;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchById($news_id) //!
    {
        try {
            // return NewsModel::fetchById($news_id);
            $rsWorkObject = NewsModel::fetchById($news_id);
            $rsWorkArray = (array)$rsWorkObject;
            $rsUser = SysUsers::fetchById($rsWorkArray['created_by']);
            $rsWorkArray['author_name'] = $rsUser->name;
            return $rsWorkArray;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
