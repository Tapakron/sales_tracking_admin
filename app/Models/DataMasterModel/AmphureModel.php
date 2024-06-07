<?php

namespace App\Models\DataMasterModel;

use Illuminate\Support\Facades\DB;

class AmphureModel
{
    private const TABLE = 'master_amphures';
    private const PK = 'id';

    public static function fetch()
    {
        return DB::connection('datamaster')->table(self::TABLE)
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
