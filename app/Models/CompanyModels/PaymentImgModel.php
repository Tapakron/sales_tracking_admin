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
}
