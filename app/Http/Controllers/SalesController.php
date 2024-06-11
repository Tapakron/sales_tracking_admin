<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\JsonResult;
use App\Http\Controllers\Controller;
use App\Services\AuthService\SalesService;

class SalesController extends Controller
{
    public function create(Request $request)
    {
        $body = $request->all();
        // $result = Sales::create($body);
        // if (!$result['success']) {
        //     return JsonResult::errors(null, $result['message']);
        // }
        // return JsonResult::success(null, $result['message']);
    }
    public static function fetch(Request $request)
    {
        try {
            $body = $request->all();
            $result = SalesService::fetch($body);
            if (!$result) {
                return JsonResult::errors(null, 'ไม่พบข้อมูล');
            }
            return JsonResult::success($result);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
