<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class PaymentModel
{
    private const TABLE = 'payments';
    private const PK = 'payment_id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function fetchByCusId($customer_id)
    {
        return DB::table(self::TABLE)
            ->where('customer_id', $customer_id)
            ->first();
    }
}
