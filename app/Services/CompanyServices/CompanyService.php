<?php

namespace App\Services\CompanyServices;

use App\Helpers\JsonResult;
use App\Models\CompanyModels\CompanyModel;

class CompanyService
{
    public static function fetchById($company_id)
    {
        return CompanyModel::fetchById($company_id);
    }
}
