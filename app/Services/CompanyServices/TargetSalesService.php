<?php

namespace App\Services\CompanyServices;

use App\Helpers\JsonResult;
use App\Models\CompanyModels\TargetSalesDetailsModel;
use App\Models\CompanyModels\TargetSalesModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TargetSalesService
{
    public static function create($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $rsCreate = TargetSalesModel::create($body);
            if ($rsCreate == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                DB::commit();
                return $rs;
            }
            $rsCreateDetail = TargetSalesDetailsModel::create($body);
            if ($rsCreateDetail == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreateDetail;
                DB::commit();
                return $rs;
            }
            $rs['message'] = "บันทึกข้อมูลสำเร็จ";
            $rs['success'] = $rsCreateDetail;

            DB::commit();
            return $rs;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
