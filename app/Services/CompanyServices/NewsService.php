<?php

namespace App\Models\CompanyModels;

use App\Helpers\GlobalFunc;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsService
{
    public static function create($body)
    {
        try {
            $user = Auth::user();
            $body = [
                'news_id' => GlobalFunc::getNewId(),
                'is_delete' => false,
                'created_at' => Carbon::now(),
                'created_by' => $user->id
            ];
            $rsCreate = TargetSalesModel::create($body);
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
            $user = Auth::user();
            $fliters = [
                'company_id' => $user->company_id,
                'title' => $body['title'],
                'date_start' => $body['date_start'],
                'date_end' => $body['date_end'],
            ];
            $data = NewsModel::fetch($fliters);
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchById($news_id) //!
    {
        try {
            return NewsModel::fetchById($news_id);
            // $rsWork = NewsModel::getDetailJobById($news_id);
            // return $rsWork;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
