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
    public static function fetch($fliters)
    {
        $query = DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0);
        //todo ค้นหาข่าวสาร
        if (array_key_exists('search_title', $fliters)) {
            if ($fliters['search_title']) {
                $query->where('title', 'like', '%' . $fliters['search_title'] . '%');
            }
        }
        //todo วันที่
        // if (array_key_exists('date_start', $fliters) && array_key_exists('date_end', $fliters)) {
        //     if ($fliters['date_start']) {
        //         $query->where('date_start', '>=', $fliters['date_start']);
        //     }
        //     if ($fliters['date_end']) {
        //         $query->where('date_end', '<=', $fliters['date_end']);
        //     }
        // }
        return $query->get()->toArray();
    }
    public static function fetchById($id)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $id)
            ->first();
    }
}
