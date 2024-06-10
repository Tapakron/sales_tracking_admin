<?php

namespace App\Models\DataMasterModel;

use Illuminate\Support\Facades\DB;

class productModel
{
    private const TABLE = 'master_sme_product';
    private const PK = 'product_id';

    public static function fetch()
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->get();
    }
    public static function fetchById($product_id)
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->where(self::PK, $product_id)
            ->where('is_delete', 0)
            ->first();
    }
}
