<?php

namespace App\Helpers;

use App\Models\DataMasterModel\AmphureModel;
use App\Models\DataMasterModel\ProvinceModel;
use App\Models\DataMasterModel\TambolModel;

class GlobalFunc
{
    public static function path_image_customer()
    {
        $imagePath = public_path("assets/images/customer");
        return $imagePath;
    }
    public static function path_image_sales()
    {
        $imagePath = public_path("assets/images/sales");
        return $imagePath;
    }
    public static function path_image_admin()
    {
        $imagePath = public_path("assets/images/admin");
        return $imagePath;
    }
    public static function path_image_payment()
    {
        $imagePath = public_path("assets/images/payment");
        return $imagePath;
    }
    public static function path_image_receipt()
    {
        $imagePath = public_path("assets/images/receipt");
        return $imagePath;
    }
    public static function path_image_news()
    {
        $imagePath = public_path("assets/images/news");
        return $imagePath;
    }
    public static function formatAddress($data)
    {
        $province = ProvinceModel::fetchById($data->province_id);
        $amphure = AmphureModel::fetchById($data->amphure_id);
        $tambol = TambolModel::fetchById($data->tambol_id);

        if (isset($data->province_id_1) && $data->province_id_1 == '1') {
            $adress = $data->address ? $data->address : "";
            // $adress .=  "แขวง" . $data->join_tambol_id_1 ? $data->join_tambol_id_1->name_th : "";
            // $adress .= " " . $data->join_amphure_id_1 ? $data->join_amphure_id_1->name_th : "";
            // $adress .= " " . $data->join_province_id_1 ? $data->join_province_id_1->name_th : "";
            // $adress .= " " . $data->join_tambol_id_1 ? $data->join_tambol_id_1->zip_code : "";
        } else {
            $adress = $data->address ? $data->address : " ";
            // $adress .= " ต." . $data->join_tambol_id_1 ? $data->join_tambol_id_1->name_th  : "";
            // $adress .= " อ." . $data->join_amphure_id_1 ? $data->join_amphure_id_1->name_th  : "";
            // $adress .= " จ." . $data->join_province_id_1 ? $data->join_province_id_1->name_th : "";
            // $adress .= " " . $data->join_tambol_id_1 ? $data->join_tambol_id_1->zip_code : "";
        }
        $data->address_text = $adress;
        return $data;
    }
}
