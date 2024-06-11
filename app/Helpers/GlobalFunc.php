<?php

namespace App\Helpers;

use App\Models\DataMasterModel\AmphureModel;
use App\Models\DataMasterModel\ProvinceModel;
use App\Models\DataMasterModel\TambolModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GlobalFunc
{
    public static function getNewId()
    {
        return DB::select('select NEWID() as uuid')[0]->uuid;
    }
    // public static function path_image_customer()
    // {
    //     $imagePath = public_path("assets/images/customer");
    //     return $imagePath;
    // }
    // public static function path_image_sales($sys_customer_code)
    // {
    //     $imagePath = "/assets/images/" . $sys_customer_code . "/user/";
    //     // $imagePath = public_path("assets/images/sales");
    //     return $imagePath;
    // }
    // public static function path_image_admin()
    // {
    //     $imagePath = public_path("assets/images/admin");
    //     return $imagePath;
    // }
    // public static function path_image_payment()
    // {
    //     $imagePath = public_path("assets/images/payment");
    //     return $imagePath;
    // }
    // public static function path_image_receipt()
    // {
    //     $imagePath = public_path("assets/images/receipt");
    //     return $imagePath;
    // }
    // public static function path_image_news($sys_customer_code)
    // {
    //     $imagePath = "/assets/images/" . $sys_customer_code . "/news/";
    //     return $imagePath;
    // }
    public static function path_image($sys_customer_code)
    {
        $imagePath = "/assets/images/" . $sys_customer_code . "/";
        return $imagePath;
    }
    public static function uploadImg($request, $user, $id, $type, $location)
    {
        try {
            $body = array();
            if ($request->hasFile($type)) {
                $image = $request->file($type);

                if ($image) {
                    $id = $user->id;
                    $imagePath = self::path_image($user->sys_customer_code . $location);

                    // Delete existing image
                    File::delete($imagePath . $id);

                    // Move the new image and update profile_img field
                    $new_img_name = $id . '.' . $image->getClientOriginalExtension();
                    $image->move($imagePath, $new_img_name);
                    $body[$type] = $new_img_name;
                }
            } else {
                // If no image provided, remove profile_img field
                unset($body[$type]);
            }
            return $body;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function setProfileCompany($data)
    {
        $province = ProvinceModel::fetchById($data->province_id);
        $amphure = AmphureModel::fetchById($data->amphure_id);
        $tambol = TambolModel::fetchById($data->tambol_id);
        $adress = 'ไม่พบข้อมูล';
        // dd($data);
        if (isset($data->province_id) && $data->province_id == '1') {
            $adress = $data->address ? $data->address : "";
            $adress = $data->village_building ? $data->village_building : "";
            $adress = $data->village_no ? $data->village_no : "";
            $adress = $data->alley ? $data->alley : "";
            $adress = $data->road ? $data->road : "";
            $adress .=  $tambol->id ? "แขวง" . $tambol->name_th : "";
            $adress .= $amphure->id ? " " . $amphure->name_th : "";
            $adress .= $province->id ? " " . $province->name_th : "";
            $adress .= $tambol->id ? " " . $tambol->zip_code : "";
        } elseif (isset($data->province_id) && $data->province_id != '1') {
            $adress = $data->address ? $data->address : " ";
            $adress = $data->village_building ? $data->village_building : "";
            $adress = $data->village_no ? $data->village_no : "";
            $adress = $data->road ? $data->road : "";
            $adress = $data->alley ? $data->alley : "";
            $adress .= $tambol->id ? " ต." . $tambol->name_th : "";
            $adress .= $amphure->id ? " อ." . $amphure->name_th : "";
            $adress .= $province->id ? " จ." . $province->name_th : "";
            $adress .= $tambol->id ? " " . $tambol->zip_code : "";
        }

        $data->province_name = $province->id ? $province->name_th : "";
        $data->amphure_name = $amphure->id ? $amphure->name_th : "";
        $data->tambol_name = $tambol->id ? $tambol->name_th : "";
        $data->address_text = $adress;
        return $data;
    }
}
