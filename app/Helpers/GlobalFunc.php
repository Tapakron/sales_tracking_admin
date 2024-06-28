<?php

namespace App\Helpers;

use App\Models\DataMasterModel\AmphureModel;
use App\Models\DataMasterModel\ProvinceModel;
use App\Models\DataMasterModel\TambolModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GlobalFunc
{
    public static function getNewId()
    {
        return DB::select('select NEWID() as uuid')[0]->uuid;
    }
    public static function formatPhoneNum($phone)
    {
        $phone = preg_replace("/[^0-9]*/", '', $phone);
        if (strlen($phone) != 10) {
            return $phone;
        }
        $sArea = substr($phone, 0, 3);
        $sPrefix = substr($phone, 3, 3);
        $sNumber = substr($phone, 6, 4);
        $phone = $sArea . "-" . $sPrefix . "-" . $sNumber;
        return $phone;
    }
    public static function formatDateTime($dateTime)
    {
        $createdAt = new Carbon($dateTime);
        $date = $createdAt->format('d/m/Y');
        $time = $createdAt->format('H:i');
        $dateTime = $date . ' เวลา ' . $time . ' น.';
        return $dateTime;
    }
    public static function formatDate($date)
    {
        $createdAt = new Carbon($date);
        $date = $createdAt->format('d/m/Y');
        return $date;
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
    public static function path_image($sys_customer_code, $location)
    {
        $imagePathStorage = public_path("assets/images/" . $sys_customer_code . "/" . $location . "/");
        $imagePathDB = "/assets/images/" . $sys_customer_code . "/" . $location . "/";
        return [$imagePathStorage, $imagePathDB];
    }
    public static function uploadImg($request, $user, $id, $type, $location)
    {
        try {
            $body = array();
            if ($request->hasFile($type)) {
                $image = $request->file($type);

                if ($image) {
                    // $id = $user->id;
                    list($imagePathStorage, $imagePathDB) = self::path_image($user->sys_customer_code, $location);
                    // Delete existing image
                    File::delete($imagePathStorage . $id);

                    // Move the new image and update profile_img field
                    $new_img_name = $id . '.' . $image->getClientOriginalExtension();
                    $image->move($imagePathStorage, $new_img_name);
                    $body[$type] = $imagePathDB . $new_img_name;
                    // dd($imagePathStorage, $body[$type], '77788');
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
        $address = 'ไม่พบข้อมูล';
        // dd($data);
        if (isset($data->province_id) && $data->province_id == '1') {
            $address = $data->address ? $data->address : "";
            $address .= $data->village_building ? " " . $data->village_building : "";
            $address .= $data->village_no ? " " . $data->village_no : "";
            $address .= $data->alley ? " " . $data->alley : "";
            $address .= $data->road ? " " . $data->road : "";
            $address .= $tambol->id ? " แขวง" . $tambol->name_th : "";
            $address .= $amphure->id ? " " . $amphure->name_th : "";
            $address .= $province->id ? " " . $province->name_th : "";
            $address .= $tambol->id ? " " . $tambol->zip_code : "";

            $data->province_name = $province->id ? $province->name_th : "";
            $data->amphure_name = $amphure->id ? $amphure->name_th : "";
            $data->tambol_name = $tambol->id ? $tambol->name_th : "";
            $data->address_text = $address;
        } elseif (isset($data->province_id) && $data->province_id != '1') {
            $address = $data->address ? $data->address : " ";
            $address .= $data->village_building ? " " . $data->village_building : "";
            $address .= $data->village_no ? " " . $data->village_no : "";
            $address .= $data->road ? " " . $data->road : "";
            $address .= $data->alley ? " " . $data->alley : "";
            $address .= $tambol->id ? " ต." . $tambol->name_th : "";
            $address .= $amphure->id ? " อ." . $amphure->name_th : "";
            $address .= $province->id ? " จ." . $province->name_th : "";
            $address .= $tambol->id ? " " . $tambol->zip_code : "";

            $data->province_name = $province->id ? $province->name_th : "";
            $data->amphure_name = $amphure->id ? $amphure->name_th : "";
            $data->tambol_name = $tambol->id ? $tambol->name_th : "";
            $data->address_text = $address;
        }

        return $data;
    }
    public static function setProfileCustomer($data)
    {
        $address = 'ไม่พบข้อมูล';
        if (isset($data->province_id) && $data->province_id == '1') {

            $province = ProvinceModel::fetchById($data->province_id);
            $amphure = AmphureModel::fetchById($data->amphure_id);
            $tambol = TambolModel::fetchById($data->tambol_id);

            $address = $data->address ? $data->address : "";
            $address .= $data->village_building ? " " . $data->village_building : "";
            $address .= $data->village_no ? " " . $data->village_no : "";
            $address .= $data->alley ? " " . $data->alley : "";
            $address .= $data->road ? " " . $data->road : "";
            $address .= $tambol->id ? " แขวง" . $tambol->name_th : "";
            $address .= $amphure->id ? " " . $amphure->name_th : "";
            $address .= $province->id ? " " . $province->name_th : "";
            $address .= $tambol->id ? " " . $tambol->zip_code : "";

            $data->province_name = $province->id ? $province->name_th : "";
            $data->amphure_name = $amphure->id ? $amphure->name_th : "";
            $data->tambol_name = $tambol->id ? $tambol->name_th : "";
            $data->address_text = $address;
        } elseif (isset($data->province_id) && $data->province_id != '1') {

            $province = ProvinceModel::fetchById($data->province_id);
            $amphure = AmphureModel::fetchById($data->amphure_id);
            $tambol = TambolModel::fetchById($data->tambol_id);

            $address = $data->address ? $data->address : " ";
            $address .= $data->village_building ? " " . $data->village_building : "";
            $address .= $data->village_no ? " " . $data->village_no : "";
            $address .= $data->road ? " " . $data->road : "";
            $address .= $data->alley ? " " . $data->alley : "";
            $address .= $tambol->id ? " ต." . $tambol->name_th : "";
            $address .= $amphure->id ? " อ." . $amphure->name_th : "";
            $address .= $province->id ? " จ." . $province->name_th : "";
            $address .= $tambol->id ? " " . $tambol->zip_code : "";

            $data->province_name = $province->id ? $province->name_th : "";
            $data->amphure_name = $amphure->id ? $amphure->name_th : "";
            $data->tambol_name = $tambol->id ? $tambol->name_th : "";
            $data->address_text = $address;
        }
        $data->address_text = $address;

        return $data;
    }
}
