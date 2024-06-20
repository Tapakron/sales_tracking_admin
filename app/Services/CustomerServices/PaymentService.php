<?php

namespace App\Services\CustomerServices;

use App\Helpers\JsonResult;
use App\Models\PaymentDetailsModel;
use App\Models\PaymentModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    public static function create($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $body += [
                'company_id' => $user->company_id,
                'is_delete' => false,
                'created_at' => Carbon::now(),
                'created_by' => $user->id
            ];
            PaymentModel::create($body);
            $rsCreate = PaymentDetailsModel::create($body);
            if ($rsCreate == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                return $rs;
            }
            $rs['message'] = "บันทึกข้อมูลสำเร็จ";
            $rs['success'] = $rsCreate;

            DB::commit();
            return $rs;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
