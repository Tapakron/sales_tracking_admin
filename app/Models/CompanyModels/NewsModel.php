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
        // dd($fliters);
        $query = DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0)
            ->orderBy('created_at', 'desc');
        //todo ค้นหาข่าวสาร
        if (array_key_exists('search_title', $fliters)) {
            if ($fliters['search_title']) {
                $query->where('title', 'like', '%' . $fliters['search_title'] . '%');
            }
        }
        //todo วันที่
        if (array_key_exists('date_start', $fliters) && array_key_exists('date_end', $fliters)) {
            // $query->whereBetween(DB::raw('DATE(created_at)'), [$fliters['date_start'], $fliters['date_end']]);
            $query->whereDate('created_at', '>=', $fliters['date_start'])
                ->whereDate('created_at', '<=', $fliters['date_end']);
        }
        return $query->get()->toArray();
    }
    public static function fetchByPaginate2($fliters)
    {
        $query = DB::table(self::TABLE)
            ->where('company_id', $fliters['company_id'])
            ->where('is_delete', 0)
            ->orderBy('created_at', 'desc');
        //todo ค้นหาข่าวสาร
        if (array_key_exists('search_title', $fliters)) {
            if ($fliters['search_title']) {
                $query->where('title', 'like', '%' . $fliters['search_title'] . '%');
            }
        }
        //todo วันที่
        if (array_key_exists('date_start', $fliters) && array_key_exists('date_end', $fliters)) {
            // $query->whereBetween('created_at', [$fliters['date_start'], $fliters['date_end']]);
            $query->whereDate('created_at', '>=', $fliters['date_start'])
                ->whereDate('created_at', '<=', $fliters['date_end']);
        }

        $newsList = $query->paginate(3); // Adjust the number of items per page as needed

        return $newsList;
    }
    public static function fetchByPaginate($fliters)
    {
        //! For Filter Loop
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
        if (array_key_exists('date_start', $fliters) && array_key_exists('date_end', $fliters)) {
            // $query->whereBetween('created_at', [$fliters['date_start'], $fliters['date_end']]);
            $query->whereDate('created_at', '>=', $fliters['date_start'])
                ->whereDate('created_at', '<=', $fliters['date_end']);
        }
        $query2 = $query;
        $total = $query2->count();
        //! For Offset} Limit} Select} Oder
        $result = $query
            ->skip(($fliters['page'] - 1) * $fliters['size'])
            ->take($fliters['size'])
            ->orderBy('created_at', 'desc')
            ->get()->toArray();
        return [$total, $result];
    }
    public static function fetchById($id)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $id)
            ->first();
    }
}
