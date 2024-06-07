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

// ! customers
Route::get('/customers/details', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'customers-details',
        'page_name_th_2' => 'ข้อมูลบริษัท',        
        'page_url_2' => '/customers/details',
        'page_desc_2' => 'โปรไฟล์บริษัท',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.customers.details')->with($data);
});
// ! sales
Route::get('/sales/details', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'sales-details',
        'page_name_th_2' => 'บันทึกการชำระเงิน',        
        'page_url_2' => '/sales/details',
        'page_desc_2' => 'ชำระเงิน',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.sales.details')->with($data);
});
Route::get('/sales/listing', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'sales-listing',
        'page_name_th_2' => 'ข้อมูลลูกค้า',        
        'page_url_2' => '/sales/listing',
        'page_desc_2' => 'ลูกค้าที่รับผิดชอบ',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.sales.listing')->with($data);
});
// ! invoices
Route::get('/invoices/view', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => '',
        'page_name_th_2' => 'สถานะดำเนินการ',        
        'page_url_2' => '',
        'page_desc_2' => 'สถานะดำเนินการ',
        'page_name_en_3' => 'invoices-view',
        'page_name_th_3' => 'รายละเอียดการบันทึก',        
        'page_url_3' => '/invoices/view',
        'page_desc_3' => 'รายละเอียดการบันทึก',
    ];
    return view('pages.invoices.view')->with($data);
});
Route::get('/invoices/create', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'sales-details',
        'page_name_th_2' => 'บันทึกการชำระเงิน',        
        'page_url_2' => '/sales/details',
        'page_desc_2' => 'ชำระเงิน',
        'page_name_en_3' => 'invoices-create',
        'page_name_th_3' => 'รายละเอียดการชำระเงิน',        
        'page_url_3' => '/invoices/create',
        'page_desc_3' => 'รายละเอียดการชำระเงิน',
    ];
    return view('pages.invoices.create')->with($data);
});
// ! projects
Route::get('/projects', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'sales-listing',
        'page_name_th_2' => 'ข้อมูลลูกค้า',        
        'page_url_2' => '/sales/listing',
        'page_desc_2' => 'ลูกค้าที่รับผิดชอบ',
        'page_name_en_3' => 'projects',
        'page_name_th_3' => 'ข้อมูลลูกค้า',        
        'page_url_3' => '/projects',
        'page_desc_3' => 'รายละเอียดลูกค้า',
    ];
    return view('pages.projects.project')->with($data);
});
// ! subscriptions
Route::get('/subscriptions/add', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'subscriptions-add',
        'page_name_th_2' => 'มาสเตอร์การตั้งเป้ายอดขายฯ',        
        'page_url_2' => '/subscriptions/add',
        'page_desc_2' => 'เป้ายอดขาย และ คอมมิชชัน',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.subscriptions.add')->with($data);
});
// ! support-center
Route::get('/supportCenter/tickets/list', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'supportCenter-tickets-list',
        'page_name_th_2' => 'ประกาศข่าวสาร',        
        'page_url_2' => '/supportCenter/tickets/list',
        'page_desc_2' => 'รายการข่าวสาร',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.support-center.tickets.list')->with($data);
});
Route::get('/supportCenter/tickets/view', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'supportCenter-tickets-list',
        'page_name_th_2' => 'ประกาศข่าวสาร',        
        'page_url_2' => '/supportCenter/tickets/list',
        'page_desc_2' => 'รายการข่าวสาร',
        'page_name_en_3' => 'supportCenter-tickets-view',
        'page_name_th_3' => 'ข่าวสาร',        
        'page_url_3' => '/supportCenter/tickets/view',
        'page_desc_3' => 'รายละเอียด',
    ];
    return view('pages.support-center.tickets.view')->with($data);
});
// ! user-management
Route::get('/management/users/list', function () {
    $data["pageDetails"] = [
        'page_lv' => '2',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'management-users-list',
        'page_name_th_2' => 'จัดการข้อมูลเซลส์',        
        'page_url_2' => '/management/users/list',
        'page_desc_2' => 'รายการเซลส์',
        'page_name_en_3' => '',
        'page_name_th_3' => '',        
        'page_url_3' => '',
        'page_desc_3' => '',
    ];
    return view('pages.management.users.list')->with($data);
});
Route::get('/management/users/import', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'management-users-list',
        'page_name_th_2' => 'จัดการข้อมูลเซลส์',        
        'page_url_2' => '/management/users/list',
        'page_desc_2' => 'รายการเซลส์',
        'page_name_en_3' => 'management-users-import',
        'page_name_th_3' => 'จัดการ Sales',        
        'page_url_3' => '/management/users/import',
        'page_desc_3' => 'นำเข้าข้อมูล',
    ];
    return view('pages.management.users.import')->with($data);
});
Route::get('/management/users/view', function () {
    $data["pageDetails"] = [
        'page_lv' => '3',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',        
        'page_url_1' => '/dashboard',
        'page_desc_1' => '', 
        'page_name_en_2' => 'management-users-list',
        'page_name_th_2' => 'จัดการข้อมูลเซลส์',        
        'page_url_2' => '/management/users/list',
        'page_desc_2' => 'รายการเซลส์',
        'page_name_en_3' => 'management-users-view',
        'page_name_th_3' => 'ข้อมูลเซลส์',        
        'page_url_3' => '/management/users/view',
        'page_desc_3' => 'รายละเอียดเซลส์',
    ];
    return view('pages.management.users.view')->with($data);
});