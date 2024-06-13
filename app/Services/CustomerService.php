<?php

namespace App\Services;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CustomerModel;
use App\Models\FavoriteProductModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerService
{
    public static function create($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $data_product = array();
            $array_favorite_product = explode(',', $body['favorite_product']);
            unset($body['favorite_product']);
            $body += [
                'company_id' => $user->company_id,
                'is_payment' => false,
                'is_lost' => false,
                'is_delete' => false,
                'created_by' => $user->id,
                'created_at' => Carbon::now(),
            ];
            foreach ($array_favorite_product as $key => $value) {
                $data_produc[$key] = [
                    'customer_id' => $body['customer_id'],
                    'product_id' => $value,
                    'is_delete' => false,
                    'deleted_at' => null,
                    'deleted_by' => null,
                ];
            }

            $rsCreate = CustomerModel::create($body);
            if ($rsCreate == false) {;
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                DB::commit();
                return $rs;
            }
            $rsCreateProduct = FavoriteProductModel::create($data_produc);
            if ($rsCreateProduct == false) {;
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
