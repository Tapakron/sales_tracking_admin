<?php

namespace App\Models\SalesModels;

use Illuminate\Support\Facades\DB;

class TargetSalesModel
{
    private const TABLE = 'targetsales';
    private const PK = 'targetsales_id';

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
    public static function delete($company_id)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $company_id)
            ->delete();
    }
    public static function fetchByCompanyId($company_id)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $company_id)
            ->first();
    }
    public static function fetch($fliters)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0)
            ->first();
    }
}
