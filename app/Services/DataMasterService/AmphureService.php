<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\AmphureModel;

class AmphureService
{
    public static function fetchById($province_id)
    {
        return AmphureModel::fetchById($province_id);
    }
}
