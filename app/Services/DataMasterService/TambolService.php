<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\TambolModel;

class TambolService
{
    public static function fetchById($amphure_id)
    {
        return TambolModel::fetchById($amphure_id);
    }
}
