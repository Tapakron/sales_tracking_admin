<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResult;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\CompanyServices\TargetSalesService;

class TargetSalesController extends Controller
{
    public static function create(Request $request) //!
    {
        $body = $request->all();
        $result = TargetSalesService::create($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
}
