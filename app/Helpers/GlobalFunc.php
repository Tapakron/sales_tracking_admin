<?php

namespace App\Helpers;

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
}
