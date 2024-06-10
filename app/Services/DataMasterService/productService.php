<?php

namespace App\Services\DataMasterService;

use App\Helpers\JsonResult;
use App\Models\DataMasterModel\productModel;

class productService
{
    public static function fetch()
    {
        return productModel::fetch();
    }
    public static function fetchById($province_id)
    {
        return productModel::fetchById($province_id);
    }
}
