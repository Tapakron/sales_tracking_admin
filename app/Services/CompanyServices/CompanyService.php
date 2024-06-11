<?php

namespace App\Services\CompanyServices;

use App\Helpers\GlobalFunc;
use App\Helpers\JsonResult;
use App\Models\CompanyModels\CompanyModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CompanyService
{
    public static function update($body)
    {
        try {
            $user = Auth::user();
            $company_id = $user->company_id;
            unset($body['company_id']);
            unset($body['remove_img']);
            unset($body['cancel_img']);
            $body = [
                'updated_by' => $user->id,
                'updated_at' => Carbon::now(),
            ];
            $rsCreate = CompanyModel::update($company_id, $body);
            if ($rsCreate == false) {;
                $rs['message'] = "บันทึกข้อมูลผิดพลาด";
                $rs['success'] = $rsCreate;
                return $rs;
            }
            $rs['message'] = "บันทึกข้อมูลสำเร็จ";
            $rs['success'] = $rsCreate;
            return $rs;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function fetchById($company_id)
    {
        try {
            $data = CompanyModel::fetchById($company_id);
            $result = GlobalFunc::setProfileCompany($data);
            return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
