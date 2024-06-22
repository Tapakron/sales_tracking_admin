<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class PaymentImgModel
{
    private const TABLE = 'payments_imgs';
    private const PK = 'id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function fetchByPaymentId($payment_id)
    {
        return DB::table(self::TABLE)
            ->where('payments_imgs.payment_id', $payment_id)
            ->join('payments', 'payments_imgs.payment_id', '=', 'payments.payment_id')
            ->select([
                'payments_imgs.*', 'payments.is_admin'
            ])
            ->get()->toArray();
    }
}
