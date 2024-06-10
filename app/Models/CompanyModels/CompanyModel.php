<?php

namespace App\Models\CompanyModels;

use Illuminate\Support\Facades\DB;

class CompanyModel
{
    private const TABLE = 'company';

    private const PK = 'company_id';

    public static function fetchById($company_id)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $company_id)
            ->first();
    }
}
