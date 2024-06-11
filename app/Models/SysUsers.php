<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SysUsers
{
    private const TABLE = 'sys_users';
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
    public static function fetch($company_id)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $company_id)
            ->where('user_level', 3)
            ->get();
    }
}
