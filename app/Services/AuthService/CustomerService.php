<?php

namespace App\Services;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CustomerModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CustomerService
{
    public static function create($body)
    {
        try {
            $user = Auth::user();
            $body += [
                'company_id' => $user->company_id,
                'sys_customer_code' => $user->sys_customer_code,
                'is_payment' => false,
                'is_lost' => false,
                'is_delete' => false,
                'created_by' => $user->id,
                'created_at' => Carbon::now(),
            ];
            $rsCreate = CustomerModel::create($body);
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
    public static function delete($customer_id)
    {
        try {
            $user = Auth::user();
            $body = [
                'is_delete' => true,
                'deleted_at' => Carbon::now(),
                'deleted_by' => $user->id
            ];
            $rsDelete = CustomerModel::update($customer_id, $body);
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
            $data = CustomerModel::fetch($user->company_id);
            foreach ($data as $key => $value) {
                $value->tel = GlobalFunc::formatPhoneNum($value->tel);
            }
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
