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
}
