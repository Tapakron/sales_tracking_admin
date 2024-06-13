<?php

namespace App\Models\CustomerModels;

use Illuminate\Support\Facades\DB;

class RecordCustomerSaleModel
{
    private const TABLE = 'customer_sale_records';
    private const PK = 'id';
    
    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
}
