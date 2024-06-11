<?php

namespace App\Services\AuthService;

use App\Helpers\JsonResult;
use App\Models\SysUsers;
use Illuminate\Support\Facades\Auth;

class SalesService
{
    public static function fetch()
    {
        try {
            $user = Auth::user();
            $data = SysUsers::fetch($user->company_id);
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
