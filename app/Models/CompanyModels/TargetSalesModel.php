<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class TargetSalesModel
{
    private const TABLE = 'commission';
    private const PK = 'commission_id';
    
    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function update($id, $data)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $id)
            ->update($data);
    }
}
