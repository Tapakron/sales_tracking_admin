<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function create(Request $request) {
        $body = $request->all();
    }
}
