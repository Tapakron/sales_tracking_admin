<?php

namespace App\Http\Controllers;

use App\Services\DataMasterService\ProvinceService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ];
        return view('pages.contacts.view')->with($data);
    }
    public function ecommerceProductAdd()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        $data['province'] = ProvinceService::fetch();
        return view('pages.ecommerce.add-product')->with($data);
    }
    public function ecommerceSalesAdd()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        $data['province'] = ProvinceService::fetch();
        return view('pages.ecommerce.add-sales')->with($data);
    }
    public function customersDetails()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        $data['province'] = ProvinceService::fetch();
        return view('pages.customers.details')->with($data);
    }
    public function salesDetails()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.sales.details')->with($data);
    }
    public function salesListing()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.sales.listing')->with($data);
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
    public function invoicesCreate()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
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
            'page_url_2' => '/sales/listing',
            'page_desc_2' => 'ลูกค้าที่รับผิดชอบ',
            'page_name_en_3' => 'projects',
            'page_name_th_3' => 'ข้อมูลลูกค้า',
            'page_url_3' => '/projects',
            'page_desc_3' => 'รายละเอียดลูกค้า',
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.projects.project')->with($data);
    }
    public function subscriptionsAdd()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.subscriptions.add')->with($data);
    }
    public function supportCenterTicketsList()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.support-center.tickets.list')->with($data);
    }
    public function supportCenterTicketsView()
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
        ];
        return view('pages.support-center.tickets.view')->with($data);
    }
    public function managementUsersList()
    {
        $data['pageDetails'] = [
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
            'company_profile' => (array)$this->user->company_profile,
        ];
        return view('pages.management.users.list')->with($data);
    }
    public function managementUsersImport()
    {
        $data['pageDetails'] = [
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
            'page_url_2' => '/management/users/list',
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
