<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class TargetSalesDetailsModel
{
    private const TABLE = 'commission_details';
    private const PK = 'id';

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
    public static function fetch($fliters)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0)
            ->first();
    }
}
