<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class NewsModel
{
    private const TABLE = 'news';
    private const PK = 'news_id';

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
    public static function fetchById($id)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $id)
            ->first();
    }
}
