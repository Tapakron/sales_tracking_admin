<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ! dashboard
Route::get('/dashboard', function () {
    $data["pageDetails"] = [
        'page_lv' => '1',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_name_en_2' => '',
        'page_name_th_2' => '',        
        'page_url_2' => '',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
    ];
    return view('pages.dashboard')->with($data);
});

Route::get('/dashboard/projects', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'dashboards-projects',
        'page_name_th_2' => 'ปฎิทินงานทั้งหมด',        
        'page_url_2' => '/dashboard/projects',
        'page_desc_2' => '',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.dashboard')->with($data);
});

// ! contacts
Route::get('/contacts/getting/started', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'getting-started',
        'page_name_th_2' => 'สถานะดำเนินการ',        
        'page_url_2' => '/contacts/getting/started',
        'page_desc_2' => 'การดำเนินการของ Sales',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.contacts.getting-started')->with($data);
});
Route::get('/contacts/view', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'getting-started',
        'page_name_th_2' => 'สถานะดำเนินการ',        
        'page_url_2' => '/contacts/view',
        'page_desc_2' => 'การดำเนินการของ Sales',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.contacts.view')->with($data);
});

// ! ecommerce
Route::get('/ecommerce/product/add', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'ecommerce-product-add',
        'page_name_th_2' => 'เพิ่มข้อมูลลูกค้า',        
        'page_url_2' => '/ecommerce/product/add',
        'page_desc_2' => 'เพิ่มข้อมูล',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.ecommerce.add-product')->with($data);
});
Route::get('/ecommerce/sales/add', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'ecommerce-sales-add',
        'page_name_th_2' => 'เพิ่มข้อมูลพนักงาน',        
        'page_url_2' => '/ecommerce/sales/add',
        'page_desc_2' => 'เพิ่มข้อมูล',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.ecommerce.add-sales')->with($data);
});