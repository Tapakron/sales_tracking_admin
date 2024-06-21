<?php

namespace App\Services\CustomerServices;

use App\Helpers\JsonResult;
use App\Models\CompanyModels\PaymentDetailsModel;
use App\Models\CompanyModels\PaymentImgModel;
use App\Models\CompanyModels\PaymentModel;
use App\Models\CustomerModel;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    public static function create($body)
    {
        try {
            // dd($body);
            DB::beginTransaction();
            $user = Auth::user();
            $sum_total = filter_var($body['sum_total'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $sum_total = explode('.', $sum_total);
            $save_at = $body['save_at'];
            $save_at = DateTime::createFromFormat('d/m/Y', $save_at);
            $format_save_at = $save_at->format('Y-m-d');

            $payment_at = $body['payment_at'];
            $payment_at = DateTime::createFromFormat('d/m/Y', $payment_at);
            $format_payment_at = $payment_at->format('Y-m-d');
            $payment = [
                'payment_id' => $body['payment_id'],
                'company_id' => $user->company_id,
                'customer_id' => $body['customer_id'],
                'sales_id' => $body['sales_id'],
                'detail' => $body['detail'],
                'sum_total' => intval($sum_total[0]),
                'img_receipt' => $body['img_receipt'],
                'save_at' => $format_save_at,
                'payment_at' => $format_payment_at,
                'is_admin' => true,
                'is_delete' => false,
                'created_at' => Carbon::now(),
                'created_by' => $user->id
            ];
            $payment_detail = [];
            $payment_img = [];
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
                $payment_img[$key]['payment_id'] = $body['payment_id'];
                $payment_img[$key]['img_type'] = 'img_slip';
                $payment_img[$key]['img_path'] = $value;
                $payment_img[$key]['is_delete'] = false;
                $payment_img[$key]['created_at'] = Carbon::now();
                $payment_img[$key]['created_by'] = $user->id;
            }
            $data = [
                'is_payment' => true
            ];
            PaymentModel::create($payment);
            PaymentDetailsModel::create($payment_detail);
            PaymentImgModel::create($payment_img);
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
            $rsWorkObject = PaymentModel::fetchById($payment_id);
            // $rsUser = SysUsers::fetchById($rsWorkObject->created_by);
            // $rsWorkObject->created_at = GlobalFunc::formatDateTime($rsWorkObject->created_at);
            $rsWorkArray = (array)$rsWorkObject;
            $rsWorkArray['author_name'] = $rsUser->name;
            return $rsWorkArray;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
