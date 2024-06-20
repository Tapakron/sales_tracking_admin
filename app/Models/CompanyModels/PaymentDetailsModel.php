<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PaymentDetailsModel
{
    private const TABLE = 'payments_details';
    private const PK = 'id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
}
