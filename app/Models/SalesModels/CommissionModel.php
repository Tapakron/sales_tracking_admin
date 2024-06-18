<?php

namespace App\Models\SalesModels;

use Illuminate\Support\Facades\DB;

class CommissionModel
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
    public static function delete($targetsale_id)
    {
        return DB::table(self::TABLE)
            ->where('targetsales_id', $targetsale_id)
            ->delete();
    }
    public static function fetch($fliters)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0)
            ->first();
    }
    public static function fetchById($targetsales_id)
    {
        return DB::table(self::TABLE)
            ->where('targetsales_id', $targetsales_id)
            ->get()->toArray();
    }
}
