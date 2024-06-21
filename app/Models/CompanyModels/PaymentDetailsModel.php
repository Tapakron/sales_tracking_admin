<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class PaymentDetailsModel
{
    private const TABLE = 'payments_details';
    private const PK = 'id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }

    public static function fetchById($payment_id)
    {
        return DB::table(self::TABLE)
            ->where('payment_id', $payment_id)
            ->get()->toArray();
    }
}
