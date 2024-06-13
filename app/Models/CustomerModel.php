<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CustomerModel
{
    private const TABLE = 'customers';
    private const PK = 'customer_id';

    public static function create($data)
    {
        return DB::table(self::TABLE)->insert($data);
    }
    public static function update($id, $data)
    {
        return DB::table(self::TABLE)
            ->where(self::PK, $id)
            ->update($data);
    }
    public static function fetch($company_id)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $company_id)
            ->where('is_delete', 0)
            // ->join('customers_favorite_products', 'customers.customer_id', '=', 'customers_favorite_products.customer_id')
            ->get()->toArray();
    }
    public static function fetchStatus($filters)
    {
        $query = DB::table(self::TABLE)
            ->where('company_id', $filters['company_id'])
            ->where('is_delete', 0);
        if ($filters['status'] == 2) {
            $query->where('is_payment', 1);
        } elseif ($filters['status'] == 3) {
            $query->where('is_lost', 1);
        }

        return $query->get()->toArray();
    }
    public static function fetchById($customer_id)
    {
        return DB::table(self::TABLE)
            ->where('company_id', $customer_id)
            ->where('is_delete', 0)
            ->get();
    }
}
