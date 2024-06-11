<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\AmphureModel;

class AmphureService
{
    public static function fetchAmphureById($province_id)
    {
        return AmphureModel::fetchAmphureById($province_id);
    }
}
