<?php

namespace App\Services\CompanyServices;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CompanyModels\CompanyModel;

class CompanyService
{
    public static function update($body)
    {
        try {
            $company_id = $body['company_id'];
            $result = CompanyModel::update($company_id, $body);
            return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchById($company_id)
    {
        try {
            $data = CompanyModel::fetchById($company_id);
            $result = GlobalFunc::setProfileCompany($data);
            return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
