<?php

namespace App\Models\DataMasterModel;

use Illuminate\Support\Facades\DB;

class ProvinceModel
{
    private const TABLE = 'master_provinces';
    private const PK = 'id';

    public static function fetch()
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->orderBy('name_th', 'asc')
            ->get();
    }
    public static function fetchById($province_id)
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->where(self::PK, $province_id)
            ->where('is_delete', 0)
            ->first();
    }
}
