<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SysloginModel
{
    private const TABLE = 'sys_login';

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
    public static function findUserByUsername($username)
    {
        return   DB::table(self::TABLE)
            ->where('username',  $username)
            ->first();
    }
}
