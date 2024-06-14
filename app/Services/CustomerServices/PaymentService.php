<?php

namespace App\Services\CustomerServices;

use App\Helpers\JsonResult;
use Illuminate\Support\Facades\Auth;

class PaymentService
{
    public static function create($body)
    {
        try {
            $user = Auth::user();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
