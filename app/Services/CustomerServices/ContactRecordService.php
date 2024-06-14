<?php

namespace App\Services\CustomerServices;

use App\Helpers\JsonResult;
use App\Models\CustomerModels\ContactRecordModel;
use Illuminate\Support\Facades\Auth;

class ContactRecordService
{

    public static function fetchById($customer_id)
    {
        try {
            $user = Auth::user();
            $data = ContactRecordModel::fetchById($customer_id);
            for ($i = 0; $i < 1; $i++) {
                $data[$i] = [
                    'row' => $i + 1,
                    'contact_id' => '123456',
                    'detail' => 'ติดต่อสอบถามความสนใจโปรแกรม(Fake Data)',
                    'next_contact' => '20/7/2024',
                    'created_at' => '14/6/2024',
                    'product_name' => 'บุคคล Basic',
                    'product_short_name' => 'บุคคล s'
                ];
            }
            // dd($data, 'ttt');
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
