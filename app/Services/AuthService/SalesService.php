<?php

namespace App\Services\AuthService;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\SysUsers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SalesService
{
    public static function create($body)
    {
        try {
            $user = Auth::user();
            unset($body['company_id']);
            unset($body['remove_img']);
            unset($body['cancel_img']);
            $body += [
                'sme_id' => $user->sme_id,
                'company_id' => $user->company_id,
                'sys_customer_code' => $user->sys_customer_code,
                'password' => Hash::make(trim($body['username'])),
                'user_level' => 3,
                'is_active' => true,
                'is_delete' => false,
                'created_by' => $user->id,
                'created_at' => Carbon::now(),
            ];
            $rsCreate = SysUsers::create($body);
            if ($rsCreate == false) {;
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
            $user_id = $body['user_id'];
            unset($body['new_id']);
            unset($body['company_id']);
            unset($body['remove_img']);
            unset($body['cancel_img']);
            $body += [
                'updated_at' => Carbon::now(),
                'updated_by' => $user->id
            ];
            $rsUpdate = SysUsers::update($user_id, $body);
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
    public static function delete($user_id)
    {
        try {
            $user = Auth::user();
            $body = [
                'is_active' => false,
                'is_delete' => true,
                'deleted_at' => Carbon::now(),
                'deleted_by' => $user->id
            ];
            $rsDelete = SysUsers::update($user_id, $body);
            if ($rsDelete == false) {
                $rs['message'] = "การลบข้อมูลผิดพลาด";
                $rs['success'] = $rsDelete;
                return $rs;
            }

            $rs['message'] = "ลบข้อมูลสำเร็จ";
            $rs['success'] = $rsDelete;
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetch()
    {
        try {
            $user = Auth::user();
            $data = SysUsers::fetch($user->company_id);
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
