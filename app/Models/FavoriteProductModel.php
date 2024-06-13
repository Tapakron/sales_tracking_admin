<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class FavoriteProductModel
{
    private const TABLE = 'customers_favorite_products';
    private const PK = 'id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function fetchById($customer_id)
    {
        return DB::table(self::TABLE)
            ->where('customer_id', $customer_id)
            ->where('is_delete', 0)
            ->get()->toArray();
    }
}
