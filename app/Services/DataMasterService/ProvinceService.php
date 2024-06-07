<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\ProvinceModel;

class ProvinceService
{
    public static function fetch()
    {
        return ProvinceModel::fetch();
    }
    public static function fetchById($province_id)
    {
        return ProvinceModel::fetchById($province_id);
    }
}
