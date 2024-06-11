<?php

namespace App\Http\Controllers\DataMasterController;

use Illuminate\Http\Request;

use App\Helpers\JsonResult;
use App\Http\Controllers\Controller;
use App\Services\DataMasterService\AmphureService;
use App\Services\DataMasterService\TambolService;

class DropdownMasterController extends Controller
{
    public static function fetchAmphureById($province_id)
    {
        $data = AmphureService::fetchAmphureById($province_id)->toArray();
        return JsonResult::success($data);
    }
    public static function fetchTambolById($amphure_id)
    {
        $data = TambolService::fetchTambolById($amphure_id)->toArray();
        return JsonResult::success($data);
    }
}
