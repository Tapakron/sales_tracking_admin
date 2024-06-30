<?php

namespace App\Models\CustomerModels;

use Illuminate\Support\Facades\DB;

class ContactsModel
{
    private const TABLE = 'contact';
    private const PK = 'contact_id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function fetchByCustomerId($customer_id)
    {
        return DB::table(self::TABLE)
            ->where('customer_id', $customer_id)
            ->where('is_status', 0)
            ->where('is_delete', 0)
            ->get()->toArray();
    }
}
