<?php

namespace App\Http\Controllers;

use App\Services\CompanyServices\NewsService;
use App\Services\CompanyServices\TargetSalesService;
use App\Services\AuthService\SalesService;
use App\Services\CustomerService;
use App\Services\CustomerServices\ContactRecordService;
use App\Services\DataMasterService\productService;
use App\Services\DataMasterService\ProvinceService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NavigatorPagesContoller extends Controller
{
    public $user = null;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            if (Auth::check()) {
                $this->user = Auth::user();
                $this->user->user_profile = (array)$this->user->fetchProfileById();
                $this->user->company_profile = (array)$this->user->fetchCompanyById();
                // $this->user->select_programs = null;
            }
            return $next($request);
        });
    }
    public function dashboard()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        // dd($data);
        return view('pages.dashboard')->with($data);
    }
    public function dashboardProjects()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.dashboard')->with($data);
    }
    public function contactsGettingStarted()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.contacts.getting-started')->with($data);
    }
    public function contactsView()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
            'sales' => json_decode(SalesService::fetch(), true),
        ];
        return view('pages.contacts.view')->with($data);
    }
    public function customersAdd()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'customers-add',
            'page_name_th_2' => 'เพิ่มข้อมูลลูกค้า',
            'page_url_2' => '/customers/add',
            'page_desc_2' => 'เพิ่มข้อมูล',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'province' => json_decode(ProvinceService::fetch(), true),
            'product' => json_decode(productService::fetch(), true),
            'sales' => json_decode(SalesService::fetch(), true),
        ];
        return view('pages.customers.add')->with($data);
    }
    public function customersEdit($customer_id)
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'customers-add',
            'page_name_th_2' => 'แก้ไขข้อมูลลูกค้า',
            'page_url_2' => '/customers/edit',
            'page_desc_2' => 'แก้ไขข้อมูล',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'province' => json_decode(ProvinceService::fetch(), true),
            'product' => json_decode(productService::fetch(), true),
            'sales' => json_decode(SalesService::fetch(), true),
            'customer_profile' => (array)CustomerService::fetchById($customer_id),
        ];
        // dd($data['pageDetails']);
        return view('pages.customers.edit')->with($data);
    }
    public function customersDetails($customer_id)
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'customers-details',
            'page_name_th_2' => 'ข้อมูลลูกค้า',
            'page_url_2' => '/customers/details',
            'page_desc_2' => 'รายละเอียดลูกค้า',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'customer_profile' => (array)CustomerService::fetchById($customer_id),
            'contact_record' => (array)ContactRecordService::fetchById($customer_id), //! รอแก้ไข รอดึงข้อมูลจาก db ตอนนี้ make
        ];
        // dd($data['pageDetails']);
        return view('pages.customers.details')->with($data);
    }
    public function salesAdd()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'ecommerce-sales-add',
            'page_name_th_2' => 'เพิ่มข้อมูลพนักงาน',
            'page_url_2' => '/sales/add',
            'page_desc_2' => 'เพิ่มข้อมูล',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'province' => json_decode(ProvinceService::fetch(), true),
        ];
        return view('pages.sales.add')->with($data);
    }
    public function salesEdit($user_id)
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'ecommerce-sales-edit',
            'page_name_th_2' => 'แก้ไขข้อมูลพนักงาน',
            'page_url_2' => '/sales/edit',
            'page_desc_2' => 'แก้ไขข้อมูล',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'province' => json_decode(ProvinceService::fetch(), true),
            'sale_profile' => (array)SalesService::fetchById($user_id),
        ];
        return view('pages.sales.edit')->with($data);
    }
    public function companyDetails()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'company-details',
            'page_name_th_2' => 'ข้อมูลบริษัท',
            'page_url_2' => '/company/details',
            'page_desc_2' => 'โปรไฟล์บริษัท',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'province' => json_decode(ProvinceService::fetch(), true),
        ];
        return view('pages.company.details')->with($data);
    }
    public function invoices()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'invoices',
            'page_name_th_2' => 'บันทึกการชำระเงิน',
            'page_url_2' => '/invoices',
            'page_desc_2' => 'ชำระเงิน',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'customer_all' => CustomerService::fetchStatus(1), //! ปกติ
            'customer_succeed' => CustomerService::fetchStatus(2), //! ชำระเงินแล้ว
        ];
        // dd($data['pageDetails']['customer_all']);
        return view('pages.invoices.invoices')->with($data);
    }
    public function customersListing()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'customers-listing',
            'page_name_th_2' => 'ข้อมูลลูกค้า',
            'page_url_2' => '/customers/listing',
            'page_desc_2' => 'ลูกค้าที่รับผิดชอบ',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'customer_all' => CustomerService::fetchStatus(1), //! ปกติ
            'customer_succeed' => CustomerService::fetchStatus(2), //! ชำระเงินแล้ว
            'customer_lost' => CustomerService::fetchStatus(3), //! ไม่มีการติดต่อ
        ];
        // dd($data['pageDetails']);
        return view('pages.customers.listing')->with($data);
    }
    public function invoicesView()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.invoices.view')->with($data);
    }
    public function invoicesCreate(Request $request)
    {
        $body = $request->all();
        $data['pageDetails'] = [
            'page_lv' => '3',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'sales-details',
            'page_name_th_2' => 'บันทึกการชำระเงิน',
            'page_url_2' => '/invoices',
            'page_desc_2' => 'ชำระเงิน',
            'page_name_en_3' => 'invoices-create',
            'page_name_th_3' => 'รายละเอียดการชำระเงิน',
            'page_url_3' => '/invoices/create',
            'page_desc_3' => 'รายละเอียดการชำระเงิน',
            'company_profile' => (array)$this->user->company_profile,
            'sales' => json_decode(SalesService::fetch(), true),
            'product' => json_decode(productService::fetch(), true),
            'customer_profile' => (array)CustomerService::fetchById($body['customer_id'])
        ];
        // dd($data['pageDetails']);
        return view('pages.invoices.create')->with($data);
    }
    public function projects()
    {
        $data['pageDetails'] = [
            'page_lv' => '3',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'sales-listing',
            'page_name_th_2' => 'ข้อมูลลูกค้า',
            'page_url_2' => '/customers/listing',
            'page_desc_2' => 'ลูกค้าที่รับผิดชอบ',
            'page_name_en_3' => 'projects',
            'page_name_th_3' => 'ข้อมูลลูกค้า',
            'page_url_3' => '/projects',
            'page_desc_3' => 'รายละเอียดลูกค้า',
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.projects.project')->with($data);
    }
    public function salesTarget()
    {
        $target_sales = TargetSalesService::fetch();
        // dd($target_sales);
        $targetSales = $target_sales['targetValue'] ? number_format($target_sales['targetValue']) : null;
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'sales-target',
            'page_name_th_2' => 'มาสเตอร์การตั้งเป้ายอดขายฯ',
            'page_url_2' => '/sales/target',
            'page_desc_2' => 'เป้ายอดขาย และ คอมมิชชัน',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'targetValue' => $targetSales,
            'commissionItems' => $target_sales['commissionItems'] ?? null, //! ถ้าไม่มีให้ = null เลย

        ];
        // dd($data['pageDetails']);
        return view('pages.sales.target')->with($data);
    }
    public function newsLists(Request $request)
    {
        $body = $request->all();
        if (!array_key_exists("search_title", $body)) {
            $search_title = '';
        } else {
            $search_title = $body['search_title'] ? $body['search_title'] : '';
        }
        if (!array_key_exists("search_date", $body)) {
            $startDate = Carbon::now()->startOfMonth()->format('Y-m-d');
            $endDate = Carbon::now()->format('Y-m-d');
            $search_date = $startDate . "/" . $endDate;
        } else {
            $search_date = $body['search_date'] ? $body['search_date'] : '';
            $arrayDate = explode('-', $body['search_date']);
            $date_start = $arrayDate[0];
            $date_end = $arrayDate[1];

            $date_start = Carbon::createFromFormat('d/m/Y', trim($date_start));
            $startDate = $date_start->format('Y-m-d');

            $date_end = Carbon::createFromFormat('d/m/Y', trim($date_end));
            $endDate = $date_end->format('Y-m-d');

            $search_date = $startDate . " / " . $endDate;
        }

        $arraySearch = [
            'search_title' => $search_title,
            'startDate' => $startDate,
            'endDate' => $endDate
        ];
        $fliters = [
            'search_title' => $search_title,
            'search_date' => $search_date, //14/05/2024-14/06/2024
            'size' => '3',
            'page' => '1'
        ];
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'supportCenter-tickets-list',
            'page_name_th_2' => 'ประกาศข่าวสาร',
            'page_url_2' => '/news/lists',
            'page_desc_2' => 'รายการข่าวสาร',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            // 'list_news' => (array)NewsService::fetch($fliters),
            'list_news2' => NewsService::fetch2($fliters),
            'search' => $arraySearch,
        ];
        // dd($data['pageDetails']);
        return view('pages.news.lists')->with($data);
    }
    public function newsdetail($news_id)
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
            'detail_news' => NewsService::fetchById($news_id),
        ];
        // dd($data['pageDetails'],'777');
        return view('pages.news.detail')->with($data);
    }
    public function salesList()
    {
        $data['pageDetails'] = [
            'page_lv' => '2',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'sales-list',
            'page_name_th_2' => 'จัดการข้อมูลเซลส์',
            'page_url_2' => '/sales/list',
            'page_desc_2' => 'รายการเซลส์',
            'page_name_en_3' => '',
            'page_name_th_3' => '',
            'page_url_3' => '',
            'page_desc_3' => '',
            'company_profile' => (array)$this->user->company_profile,
            'sales' => json_decode(SalesService::fetch(), true),
        ];
        return view('pages.sales.list')->with($data);
    }
    public function salesImport()
    {
        $data['pageDetails'] = [
            'page_lv' => '3',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'management-users-list',
            'page_name_th_2' => 'จัดการข้อมูลเซลส์',
            'page_url_2' => '/sales/list',
            'page_desc_2' => 'รายการเซลส์',
            'page_name_en_3' => 'management-users-import',
            'page_name_th_3' => 'จัดการ Sales',
            'page_url_3' => '/management/users/import',
            'page_desc_3' => 'นำเข้าข้อมูล',
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.management.users.import')->with($data);
    }
    public function managementUsersView()
    {
        $data['pageDetails'] = [
            'page_lv' => '3',
            'page_name_en_1' => 'dashboard',
            'page_name_th_1' => 'แดชบอร์ด',
            'page_url_1' => '/dashboard',
            'page_desc_1' => '',
            'page_name_en_2' => 'management-users-list',
            'page_name_th_2' => 'จัดการข้อมูลเซลส์',
            'page_url_2' => '/sales/list',
            'page_desc_2' => 'รายการเซลส์',
            'page_name_en_3' => 'management-users-view',
            'page_name_th_3' => 'ข้อมูลเซลส์',
            'page_url_3' => '/management/users/view',
            'page_desc_3' => 'รายละเอียดเซลส์',
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.management.users.view')->with($data);
    }
}
