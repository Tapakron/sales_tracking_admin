<?php

namespace App\Services;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CompanyModels\PaymentDetailsModel;
use App\Models\CompanyModels\PaymentModel;
use App\Models\CustomerModel;
use App\Models\CustomerModels\RecordCustomerSaleModel;
use App\Models\DataMasterModel\AmphureModel;
use App\Models\DataMasterModel\productModel;
use App\Models\DataMasterModel\ProvinceModel;
use App\Models\DataMasterModel\TambolModel;
use App\Models\FavoriteProductModel;
use App\Models\SysUsers;
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
            $record = [
                'customer_id' => $body['customer_id'],
                'sale_id' => $body['sales_in_charge'],
                'created_at' => Carbon::now(),
                'created_by' => $user->id,
            ];
            if (count($array_favorite_product) > 0) {
                foreach ($array_favorite_product as $key => $value) {
                    $data_product[$key] = [
                        'customer_id' => $body['customer_id'],
                        'product_id' => $value,
                        'is_delete' => false,
                        'deleted_at' => null,
                        'deleted_by' => null,
                    ];
                }
                FavoriteProductModel::create($data_product);
            }
            RecordCustomerSaleModel::create($record);
            $rsCreate = CustomerModel::create($body);
            if ($rsCreate == false) {;
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
    public static function update($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $customer_id = $body['customer_id'];
            $array_favorite_product = explode(',', $body['favorite_product']);
            $body += [
                'updated_at' => Carbon::now(),
                'updated_by' => $user->id
            ];
            $rsRecord = CustomerModel::fetchById($customer_id);
            if ($body['sales_in_charge'] != $rsRecord->sales_in_charge) {
                $record = [
                    'customer_id' => $customer_id,
                    'sale_id' => $body['sales_in_charge'],
                    'created_at' => Carbon::now(),
                    'created_by' => $user->id,
                ];
                RecordCustomerSaleModel::create($record);
            }
            if (count($array_favorite_product) > 0) {
                foreach ($array_favorite_product as $key => $value) {
                    $data_product[$key] = [
                        'customer_id' => $customer_id,
                        'product_id' => $value,
                        'is_delete' => false,
                        'deleted_at' => null,
                        'deleted_by' => null,
                    ];
                }
                FavoriteProductModel::delete($customer_id);
                FavoriteProductModel::create($data_product);
            }
            unset($body['customer_id']);
            unset($body['favorite_product']);
            $rsUpdate = CustomerModel::update($customer_id, $body);
            if ($rsUpdate == false) {
                $rs['message'] = "แก้ไขข้อมูลผิดพลาด";
                $rs['success'] = $rsUpdate;
                DB::commit();
                return $rs;
            }
            $rs['message'] = "แก้ไขข้อมูลสำเร็จ";
            $rs['success'] = $rsUpdate;
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
    public static function lost($customer_id)
    {
        try {
            $user = Auth::user();
            $rsCheck = CustomerModel::fetchById($customer_id);
            if ($rsCheck->is_lost == 0) {
                $body = [
                    'is_lost' => true,
                    'updated_at' => Carbon::now(),
                    'updated_by' => $user->id
                ];
            } elseif ($rsCheck->is_lost == 1) {
                $body = [
                    'is_lost' => false,
                    'updated_at' => Carbon::now(),
                    'updated_by' => $user->id
                ];
            }
            $rsLost = CustomerModel::update($customer_id, $body);
            if ($rsLost == false) {
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsLost;
                return $rs;
            }
            $rs['message'] = "บันทึกข้อมูลสำเร็จ";
            $rs['success'] = $rsLost;
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
    public static function fetchById($customer_id)
    {
        try {
            $user = Auth::user();
            $data = CustomerModel::fetchById($customer_id);
            $arrayData = get_object_vars($data);
            $arrayData['customer_tel_show'] = GlobalFunc::formatPhoneNum($arrayData['customer_tel']);
            $rsSale = SysUsers::fetchById($arrayData['sales_in_charge']);
            $arrayData['sale_name'] = $rsSale->name;
            $province = ProvinceModel::fetchById($arrayData['province_id']);
            $amphure = AmphureModel::fetchById($arrayData['amphure_id']);
            $tambol = TambolModel::fetchById($arrayData['tambol_id']);
            $arrayData['province_name'] = $province->name_th;
            $arrayData['amphure_name'] = $amphure->name_th;
            $arrayData['tambol_name'] = $tambol->name_th;
            $arrayData['products'] = [];
            $products = FavoriteProductModel::fetchById($arrayData['customer_id']);
            if (count($products) > 0) {
                foreach ($products as $key_product => $product) {
                    $rsProduct = productModel::fetchById($product->product_id);
                    // dd($rsProduct);
                    if ($product->customer_id == $arrayData['customer_id']) {
                        $arrayData['products'][$key_product]['product_id'] = $product->product_id;
                        $arrayData['products'][$key_product]['product_name'] = $rsProduct->product_name_th;
                        $arrayData['products'][$key_product]['product_short_name'] = $rsProduct->product_short_name_th;
                    }
                }
            }
            $result = GlobalFunc::setProfileCompany((object)$arrayData);
            return $result;
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
            // dd($arraysArray);
            if (count($arraysArray) > 0) {
                foreach ($arraysArray as $key_customer => $customer) {
                    if ($status == '2') {
                        $rsPayment = PaymentModel::fetchByCusId($customer['customer_id']);
                        $arrayCus[$key_customer]['payment_at'] = GlobalFunc::formatDate($rsPayment->payment_at);
                        $arrayCus[$key_customer]['sum_total'] = number_format($rsPayment->sum_total);
                        $arrayCus[$key_customer]['img_receipt'] = $rsPayment->img_receipt ? $rsPayment->img_receipt : null;
                        $rsSalesOfSale = SysUsers::fetchById($customer['sales_in_charge']);
                        $arrayCus[$key_customer]['seller_name'] = $rsSalesOfSale->name;
                        $rsPaymentDetails = PaymentDetailsModel::fetchById($rsPayment->payment_id);
                        // dd($rsPaymentDetails);
                        foreach ($rsPaymentDetails as $key => $value) {
                            $rsProduct = productModel::fetchById($value->product_id);
                            $arrayCus[$key_customer]['products_buy'][$key]['product_id'] = $rsProduct->product_id;
                            $arrayCus[$key_customer]['products_buy'][$key]['product_name'] = $rsProduct->product_name_th;
                        }
                    }
                    $rsSales = SysUsers::fetchById($customer['sales_in_charge']);

                    $arrayCus[$key_customer]['customer_id'] = $customer['customer_id'];
                    $arrayCus[$key_customer]['customer_img'] = $customer['customer_img'];
                    $arrayCus[$key_customer]['customer_name'] = $customer['customer_name'];
                    $arrayCus[$key_customer]['company_name'] = $customer['company_name'];
                    $arrayCus[$key_customer]['customer_tel'] = GlobalFunc::formatPhoneNum($customer['customer_tel']);
                    $arrayCus[$key_customer]['sale_name'] = $rsSales->name;
                    $created_at = Carbon::parse($customer['created_at']);
                    $arrayCus[$key_customer]['begin_date'] = $created_at->format('d/m/Y');
                    $arrayCus[$key_customer]['last_contact_date'] = "ไม่พบการติดต่อล่าสุด";
                    $arrayCus[$key_customer]['is_payment'] = $customer['is_payment'];

                    $araray_products = FavoriteProductModel::fetchById($customer['customer_id']);
                    $araray_product = array_map('get_object_vars', $araray_products);

                    $arrayCus[$key_customer]['products'] = [];
                    foreach ($araray_product as $key_product => $product) {
                        $rsProduct = productModel::fetchById($product['product_id']);
                        if ($product['customer_id'] == $customer['customer_id']) {
                            $arrayCus[$key_customer]['products'][$key_product]['product_id'] = $product['product_id'];
                            $arrayCus[$key_customer]['products'][$key_product]['product_name'] = $rsProduct->product_name_th;
                            $arrayCus[$key_customer]['products'][$key_product]['product_short_name'] = $rsProduct->product_short_name_th;
                        }
                    }
                    // dd($arrayCus);
                }
            } else {
                $arrayCus[0]['customer_id'] = '2D23015D-638B-4EC5-81F8-11CE172DFBDA';
                $arrayCus[0]['customer_img'] = '/assets/images/CN000011/customer/2D23015D-638B-4EC5-81F8-11CE172DFBDA.jpg';
                $arrayCus[0]['customer_name'] = 'Sutasinee Phalahan';
                $arrayCus[0]['customer_tel'] = '0806522912';
                $arrayCus[0]['begin_date'] = '10/05/2024';
                $arrayCus[0]['last_contact_date'] = '15/05/2024';
                $arrayCus[0]['product_name'] = 'บุุคคล';
                $arrayCus[0]['amount'] = '1200';
                $arrayCus[0]['is_payment'] = '1';
                $arrayCus[0]['payment_at'] = '09/05/2024';
                $arrayCus[0]['slip_img'] = '/assets/images/CN000011/customer/2D23015D-638B-4EC5-81F8-11CE172DFBDA.jpg';
                $arrayCus[0]['receipt_img'] = '/assets/images/CN000011/customer/2D23015D-638B-4EC5-81F8-11CE172DFBDA.jpg';
                $arrayCus[0]['products'][0]['product_id'] = '6';
                $arrayCus[0]['products'][0]['product_name'] = 'บุคคล Basic';
                $arrayCus[0]['products'][0]['product_short_name'] = 'บุคคล s';
            }
            return $arrayCus;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
