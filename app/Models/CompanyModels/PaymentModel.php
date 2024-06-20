<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PaymentModel
{
    private const TABLE = 'payments';
    private const PK = 'payment_id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
}
