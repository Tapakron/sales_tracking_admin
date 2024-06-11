<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\TambolModel;

class TambolService
{
    public static function fetchTambolById($amphure_id)
    {
        return TambolModel::fetchTambolById($amphure_id);
    }
}
