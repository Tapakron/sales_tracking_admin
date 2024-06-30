<?php

namespace App\Services\CustomerServices;

use App\Helpers\JsonResult;
use App\Models\CompanyModels\PaymentDetailsModel;
use App\Models\CompanyModels\PaymentImgModel;
use App\Models\CompanyModels\PaymentModel;
use App\Models\CustomerModel;
use App\Models\DataMasterModel\productModel;
use App\Models\SysUsers;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    public static function create($body)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $sum_total = filter_var($body['sum_total'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $sum_total = explode('.', $sum_total);
            $save_at = $body['save_at'];
            $save_at = DateTime::createFromFormat('d/m/Y', $save_at);
            $format_save_at = $save_at->format('Y-m-d');
            $rsCustomer = CustomerModel::fetchById($body['customer_id']);

            $payment_at = $body['payment_at'];
            $payment_at = DateTime::createFromFormat('d/m/Y', $payment_at);
            $format_payment_at = $payment_at->format('Y-m-d');
            $payment = [
                'payment_id' => $body['payment_id'],
                'company_id' => $user->company_id,
                'customer_id' => $body['customer_id'],
                'sales_id' => $body['sales_id'],
                'sales_in_charge' => $rsCustomer->sales_in_charge,
                'detail' => $body['detail'],
                'sum_total' => intval($sum_total[0]),
                'save_at' => $format_save_at,
                'payment_at' => $format_payment_at,
                'is_admin' => true,
                'is_delete' => false,
                'created_at' => Carbon::now(),
                'created_by' => $user->id
            ];
            $payment_detail = [];
            $payment_img_slip = [];
            $payment_img_receipt = [];
            foreach ($body['product_id'] as $key => $value) {
                $payment_detail[$key]['product_id'] = $value;
                $payment_detail[$key]['payment_id'] = $body['payment_id'];
                $payment_detail[$key]['is_delete'] = false;
            }
            foreach ($body['expiration_at'] as $key => $value) {
                $expiration_at = DateTime::createFromFormat('d/m/Y', $value);
                $format_expiration_at = $expiration_at->format('Y-m-d');
                $payment_detail[$key]['expiration_at'] = $format_expiration_at;
            }
            foreach ($body['number_users'] as $key => $value) {
                $payment_detail[$key]['number_users'] = intval($value);
            }
            foreach ($body['amount_unit'] as $key => $value) {
                $payment_detail[$key]['amount_unit'] = intval($value);
            }
            foreach ($body['total'] as $key => $value) {
                $payment_detail[$key]['total'] = intval($value);
            }
            foreach ($body['img_slip'] as $key => $value) {
                $payment_img_slip[$key]['payment_id'] = $body['payment_id'];
                $payment_img_slip[$key]['img_type'] = 'img_slip';
                $payment_img_slip[$key]['img_path'] = $value;
                $payment_img_slip[$key]['is_delete'] = false;
                $payment_img_slip[$key]['created_at'] = Carbon::now();
                $payment_img_slip[$key]['created_by'] = $user->id;
            }
            if (array_key_exists('img_receipt', $body)) {
                foreach ($body['img_receipt'] as $key => $value) {
                    $payment_img_receipt[$key]['payment_id'] = $body['payment_id'];
                    $payment_img_receipt[$key]['img_type'] = 'img_receipt';
                    $payment_img_receipt[$key]['img_path'] = $value;
                    $payment_img_receipt[$key]['is_delete'] = false;
                    $payment_img_receipt[$key]['created_at'] = Carbon::now();
                    $payment_img_receipt[$key]['created_by'] = $user->id;
                }
                PaymentImgModel::create($payment_img_receipt);
            }
            $data = [
                'is_payment' => true
            ];
            PaymentModel::create($payment);
            PaymentDetailsModel::create($payment_detail);
            PaymentImgModel::create($payment_img_slip);
            $rsCreate = CustomerModel::update($body['customer_id'], $data);
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
    public static function fetchById($payment_id) //!
    {
        try {
            $arrayData = [];
            $rsPayment = PaymentModel::fetchById($payment_id);
            $payment_at = DateTime::createFromFormat('Y-m-d', $rsPayment->payment_at);
            $format_payment_at = $payment_at->format('d/m/Y');
            $save_at = DateTime::createFromFormat('Y-m-d', $rsPayment->save_at);
            $format_save_at = $save_at->format('d/m/Y');
            $rsSales = SysUsers::fetchById($rsPayment->sales_id);
            $arrayData = [
                'payment_id' => $rsPayment->payment_id,
                'payment_at' => $format_payment_at,
                'save_at' => $format_save_at,
                'detail' => $rsPayment->detail,
                'sum_total' => number_format($rsPayment->sum_total, 2),
                'sales_id' => $rsPayment->sales_id,
                'sales_name' => $rsSales->name
            ];
            $rsPaymentDetails = PaymentDetailsModel::fetchById($rsPayment->payment_id);
            foreach ($rsPaymentDetails as $key => $value) {
                $rsProduct = productModel::fetchById($value->product_id);
                $arrayData['products_buy'][$key]['product_id'] = $value->product_id;
                $arrayData['products_buy'][$key]['product_name'] = $rsProduct->product_name_th;
                $arrayData['products_buy'][$key]['number_users'] = $value->number_users;
                $arrayData['products_buy'][$key]['amount_unit'] = number_format($value->amount_unit);
                $arrayData['products_buy'][$key]['total'] = number_format($value->total, 2);
                $expiration_at = DateTime::createFromFormat('Y-m-d', $value->expiration_at);
                $format_expiration_at = $expiration_at->format('d/m/Y');
                // $arrayData['products_buy'][$key]['expiration_at'] = $value->expiration_at;
                $arrayData['products_buy'][$key]['expiration_at'] = $format_expiration_at;
            }
            // dd($arrayData);
            return $arrayData;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchImgs($payment_id, $type)
    {
        try {
            $fliters = [
                'payment_id' => $payment_id,
                'img_type' => $type
            ];
            $rsPaymentImgs = PaymentImgModel::fetchByPaymentId($fliters);
            $arrayData = array_map('get_object_vars', $rsPaymentImgs);
            // dd($arrayData);
            return $arrayData;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
