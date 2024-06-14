<?php

namespace App\Models\CustomerModels;

use Illuminate\Support\Facades\DB;

class ContactRecordModel
{
    private const TABLE = 'contact_records';
    private const PK = 'contact_id';

    public static function fetchById($customer_id)
    {
        return DB::table(self::TABLE)
            ->where('customer_id', $customer_id)
            ->orderBy('created_at', 'desc')
            ->get()->toArray();
    }
}
