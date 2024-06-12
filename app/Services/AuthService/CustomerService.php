<?php

namespace App\Services;

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
}
