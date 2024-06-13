<?php

namespace App\Services;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CustomerModel;
use App\Models\DataMasterModel\productModel;
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
            $array_favorite_product = array();
            $arrayCus = array();
            $data = CustomerModel::fetch($user->company_id);
            $arraysArray = array_map('get_object_vars', $data); //! แปลง object ใน array ให้เป็น array อีกที
            foreach ($arraysArray as $key_customer => $customer) {
                $arrayCus[$key_customer]['customer_id'] = $customer['customer_id'];
                $arrayCus[$key_customer]['customer_img'] = $customer['customer_img'];
                $arrayCus[$key_customer]['customer_name'] = $customer['customer_name'];
                $arrayCus[$key_customer]['customer_tel'] = GlobalFunc::formatPhoneNum($customer['customer_tel']);
                $created_at = Carbon::parse($customer['created_at']);
                $arrayCus[$key_customer]['created_at'] = $created_at->format('d/m/Y');
                $arrayCus[$key_customer]['contact_date'] = "ไม่พบการติดต่อล่าสุด";

                $araray_products = FavoriteProductModel::fetchById($customer['customer_id']);
                $araray_product = array_map('get_object_vars', $araray_products);

                $arrayCus[$key_customer]['products'] = [];
                foreach ($araray_product as $key_product => $product) {
                    $rsProduct = productModel::fetchById($product['id']);
                    // dd($rsProduct);
                    if ($product['customer_id'] == $customer['customer_id']) {
                        $arrayCus[$key_customer]['products'][$key_product]['product_id'] = $product['product_id'];
                        $arrayCus[$key_customer]['products'][$key_product]['product_name'] = $rsProduct->product_name_th;
                        $arrayCus[$key_customer]['products'][$key_product]['product_short_name'] = $rsProduct->product_short_name_th;
                    }
                }
            }
            return $arrayCus;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchStatus($status)
    {
        try {
            $user = Auth::user();
            $array_favorite_product = array();
            $arrayCus = array();
            $filters = [
                'status' => $status,
                'company_id' => $user->company_id
            ];
            $data = CustomerModel::fetchStatus($filters);
            $arraysArray = array_map('get_object_vars', $data); //! แปลง object ใน array ให้เป็น array อีกที
            foreach ($arraysArray as $key_customer => $customer) {
                $arrayCus[$key_customer]['customer_id'] = $customer['customer_id'];
                $arrayCus[$key_customer]['customer_img'] = $customer['customer_img'];
                $arrayCus[$key_customer]['customer_name'] = $customer['customer_name'];
                $arrayCus[$key_customer]['customer_tel'] = GlobalFunc::formatPhoneNum($customer['customer_tel']);
                $created_at = Carbon::parse($customer['created_at']);
                $arrayCus[$key_customer]['created_at'] = $created_at->format('d/m/Y');
                $arrayCus[$key_customer]['contact_date'] = "ไม่พบการติดต่อล่าสุด";

                $araray_products = FavoriteProductModel::fetchById($customer['customer_id']);
                $araray_product = array_map('get_object_vars', $araray_products);

                $arrayCus[$key_customer]['products'] = [];
                foreach ($araray_product as $key_product => $product) {
                    $rsProduct = productModel::fetchById($product['id']);
                    // dd($rsProduct);
                    if ($product['customer_id'] == $customer['customer_id']) {
                        $arrayCus[$key_customer]['products'][$key_product]['product_id'] = $product['product_id'];
                        $arrayCus[$key_customer]['products'][$key_product]['product_name'] = $rsProduct->product_name_th;
                        $arrayCus[$key_customer]['products'][$key_product]['product_short_name'] = $rsProduct->product_short_name_th;
                    }
                }
            }
            return $arrayCus;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
