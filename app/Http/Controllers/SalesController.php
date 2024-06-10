<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\JsonResult;
use App\Http\Controllers\Controller;

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
}
