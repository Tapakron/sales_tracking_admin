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
            ->where('is_delete', 0)
            ->get();
    }
    public static function fetchById($user_id)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $user_id)
            ->first();
    }
    public static function checkUserName($username)
    {
        return DB::table(self::TABLE)
            ->where('username', $username)
            ->first();
    }
    public static function genCodeSales()
    {
        return DB::table(self::TABLE)
            ->where('username', 'like', 'FSO%')
            ->orderBy('created_at', 'desc')
            ->first();
    }
}
