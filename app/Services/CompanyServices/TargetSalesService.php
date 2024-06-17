<?php

namespace App\Services\CompanyServices;

use App\Helpers\JsonResult;
use App\Models\SalesModels\TargetSalesDetailsModel;
use App\Models\SalesModels\TargetSalesModel;
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
            $tarGetSales = array();
            $commissionSales = array();
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
            $data = TargetSalesModel::fetch($fliters);
            // if (!is_null($data)) {
            //     dd('1111');
            // }
            $data['targetValue'] = '50000';
            $data['commissionItems'][0] = [
                'percent' => '10',
                'start_sales' => '0',
                'max_sales' => '10000'
            ];
            $data['commissionItems'][1] = [
                'percent' => '15',
                'start_sales' => '10001',
                'max_sales' => '20000'
            ];
            $data['commissionItems'][2] = [
                'percent' => '20',
                'start_sales' => '20001',
                'max_sales' => '40000'
            ];
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
