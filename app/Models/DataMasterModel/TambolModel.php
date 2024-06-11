<?php

namespace App\Models\DataMasterModel;

use Illuminate\Support\Facades\DB;

class TambolModel
{
    private const TABLE = 'master_districts';
    private const PK = 'id';

    public static function fetch()
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->get();
    }
    public static function fetchById($tambol_id)
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->where(self::PK, $tambol_id)
            ->where('is_delete', 0)
            ->first();
    }
    public static function fetchTambolById($amphure_id)
    {
        return DB::connection('datamaster')->table(self::TABLE)
            ->where(self::PK, $amphure_id)
            ->where('is_delete', 0)
            ->get();
    }
}
