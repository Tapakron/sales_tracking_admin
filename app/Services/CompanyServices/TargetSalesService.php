<?php

namespace App\Services\CompanyServices;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\SalesModels\CommissionModel;
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
            if (!array_key_exists("targetsales_id", $body)) {
                $targetsale_id = GlobalFunc::getNewId();
                $tarGetSales = [
                    'targetsales_id' => $targetsale_id,
                    'company_id' => $user->company_id,
                    'sales_target' => $body['targetValue'],
                    'is_delete' => false,
                    'created_at' => Carbon::now(),
                    'created_by' => $user->id
                ];
                TargetSalesModel::create($tarGetSales);
            } else {
                $targetsale_id = $body['targetsales_id'];
                $tarGetSales = [
                    'sales_target' => $body['targetValue'],
                    'updated_at' => Carbon::now(),
                    'updated_by' => $user->id
                ];
                TargetSalesModel::update($targetsale_id, $tarGetSales);
                CommissionModel::delete($targetsale_id);
            }

            foreach ($body['commissionItems'] as $key => $value) {
                $commissionSales[$key]['targetsales_id'] = $targetsale_id;
                $commissionSales[$key]['commission'] = $value['percent'];
                $commissionSales[$key]['first_sales'] = $value['start_sales'];
                $commissionSales[$key]['top_sales'] = $value['max_sales'];
                $commissionSales[$key]['created_at'] =  Carbon::now();
                $commissionSales[$key]['created_by'] = $user->id;
            }
            $rsCreate = CommissionModel::create($commissionSales);
            if ($rsCreate == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                DB::commit();
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
    public static function fetch()
    {
        try {
            $user = Auth::user();
            $arrayData = array();
            $fliters = [
                'company_id' => $user->company_id,
            ];
            $data = TargetSalesModel::fetch($fliters);
            if (!empty($data)) {
                $arrayData = [
                    'targetsales_id' => $data->targetsales_id,
                    'targetValue' => $data->sales_target,
                ];
                $detail = CommissionModel::fetchById($data->targetsales_id);
                foreach ($detail as $key => $value) {
                    $arrayData['commissionItems'][$key]['percent'] = intval($value->commission);
                    $arrayData['commissionItems'][$key]['start_sales'] = intval($value->first_sales);
                    $arrayData['commissionItems'][$key]['max_sales'] = intval($value->top_sales);
                }
            }

            return $arrayData;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
