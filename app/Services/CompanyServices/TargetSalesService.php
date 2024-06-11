<?php

namespace App\Services\CompanyServices;

use App\Helpers\JsonResult;
use App\Models\CompanyModels\TargetSalesDetailsModel;
use App\Models\CompanyModels\TargetSalesModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TargetSalesService
{
    public static function create($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $commission_id = $body['commission_id'];
            // if(is_null($commission_id)){

            // }
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
    public static function delete($id)
    {
        try {
            $user = Auth::user();
            $body = [
                'is_delete' => true,
                'deleted_at' => Carbon::now(),
                'deleted_by' => $user->id
            ];
            $rsDelete = TargetSalesDetailsModel::update($id, $body);
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
    public static function fetch()
    {
        try {
            $user = Auth::user();
            $fliters = [
                'company_id' => $user->company_id,
            ];
            $data = TargetSalesDetailsModel::fetch($fliters);
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
