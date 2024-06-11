@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Misc Widget 1-->
        <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/sales/listing") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-address-book fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                        <span class="fs-4 fw-bold">ข้อมูลลูกค้า</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/contacts/getting/started") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-questionnaire-tablet fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="fs-5 fw-bold">สถานะดำเนินการ</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/management/users/list") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-profile-user fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                        <span class="fs-4 fw-bold">ข้อมูลเซลส์</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/sales/details") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-wallet fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                        <span class="fs-4 fw-bold">การชำระเงิน</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/subscriptions/add") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-bitcoin fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                        <span class="fs-4 fw-bold">มาสเตอร์</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="{{ url("/supportCenter/tickets/view") }}" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <i class="ki-duotone ki-note-2 fs-2tx mb-5 ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                        <span class="fs-4 fw-bold">ข่าวสาร</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Misc Widget 1-->
        <!--begin::Total-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <!--begin::Statistics-->
                    <div class="d-flex align-items-center mb-2">
                        <!--begin::Currency-->
                        <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">฿</span>
                        <!--end::Currency-->
                        <!--begin::Value-->
                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">30,274</span>
                        <!--end::Value-->
                        <!--begin::Label-->
                        <!-- <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>9.2%</span> -->
                        <!--end::Label-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-400 mb-4">ยอดขายทั้งหมด</span>
                    <!--end::Description-->
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0 px-0">
                <!--begin::Nav-->
                <ul class="nav d-flex justify-content-between mb-3 mx-9">
                    <!--begin::Item-->
                    <li class="nav-item mb-3">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-100px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">วันนี้</a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mb-3">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-100px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">เดือนนี้</a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mb-3">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-100px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">ปีนี้</a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Nav-->
                <!--begin::Tab Content-->
                <div class="tab-content mt-n6">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                        <!--end::Chart-->
                        <!--begin::Table container-->
                        <div class="table-responsive mx-9 mt-n6">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="min-w-100px"></th>
                                        <th class="min-w-100px text-end pe-0"></th>
                                        <th class="text-end min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมบุคคล</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">2,756.26</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมนายช่าง</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">3,207.03</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                        <!--end::Chart-->
                        <!--begin::Table container-->
                        <div class="table-responsive mx-9 mt-n6">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="min-w-100px"></th>
                                        <th class="min-w-100px text-end pe-0"></th>
                                        <th class="text-end min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมบุคคล</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">2,756.26</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมนายช่าง</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">3,207.03</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                        <!--end::Chart-->
                        <!--begin::Table container-->
                        <div class="table-responsive mx-9 mt-n6">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="min-w-100px"></th>
                                        <th class="min-w-100px text-end pe-0"></th>
                                        <th class="text-end min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมบุคคล</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">2,756.26</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-600 fw-bold fs-6">โปรแกรมนายช่าง</a>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">3,207.03</span>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <span class="fw-bold fs-6 text-gray-400">บาท</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Tap pane-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end: Total-->
        <!--begin::Tracking-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::List widget 16-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800 me-5">สถานะการขาย
                            <span class="badge badge-light-primary fs-8 fw-bold ms-2">เดือน</span>
                        </span>
                        
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">56 รายการ</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="">ดูทั้งหมด</a> -->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-4 px-0">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9">
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 p-0">
                            <!--begin::Link-->
                            <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_1">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-7 mb-3">เสนอราคา</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_2">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-7 mb-3">แจ้งหนี้</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_3">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-7 mb-3">ใบเสร็จ</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Bullet-->
                        <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                        <!--end::Bullet-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 390px">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">กฤตัชญ์ พิทยุตม์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">อังคาร 08 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อนันยช จิรัฎฐ์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พุธ 09 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อัฑฒ์ เทวทิณณ์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พฤหัสบดี 10 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">สุนันทา เจตรวดี </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">ศุกร์ 11 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อรลภัสญา ณรงค์คณินทร์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">จันทร์ 13 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_list_widget_16_tab_2">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">กฤตัชญ์ พิทยุตม์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">อังคาร 08 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อนันยช จิรัฎฐ์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พุธ 09 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อัฑฒ์ เทวทิณณ์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พฤหัสบดี 10 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">สุนันทา เจตรวดี </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">ศุกร์ 11 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อรลภัสญา ณรงค์คณินทร์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">จันทร์ 13 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_list_widget_16_tab_3">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">กฤตัชญ์ พิทยุตม์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">อังคาร 08 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อนันยช จิรัฎฐ์</a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พุธ 09 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อัฑฒ์ เทวทิณณ์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">พฤหัสบดี 10 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">สุนันทา เจตรวดี </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">ศุกร์ 11 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Timeline-->
                                <div class="timeline ms-n1">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="fs-8 fw-bolder text-success text-uppercase">สำเร็จ</span>
                                            <!--begin::Label-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">อรลภัสญา ณรงค์คณินทร์ </a>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fw-semibold text-gray-400">จันทร์ 13 พฤษภาคม 2024</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::List widget 16-->
        </div>
        <!--end::Tracking-->
        <!--begin::Graph-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Chart widget 29-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header py-7">
                    <!--begin::Statistics-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Title-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">74</span>
                            <span class="fs-5 text-gray-600 me-3 lh-1 ls-n2">รายการ</span>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-400 mb-0">ภาพรวมประจำเดือน</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Statistics-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center p-0">
                    <!--begin::Chart-->
                    <canvas id="kt_chartjs_3" class="mh-300px mb-5"></canvas>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 29-->
        </div>
        <!--end::Graph-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-8 ps-xl-12">
        <!--begin::Timeline widget 3-->
        <div class="card h-md-90 mb-5">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">ปฏิทินงานของเซลส์</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">ทั้งหมด 25 รายการ</span>
                </h3>
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="{{ url("/dashboard/projects") }}" class="btn btn-sm btn-light">ดูทั้งหมด</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-7 px-0">
                <!--begin::Nav-->
                <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                            <span class="fs-7 fw-semibold">Fr</span>
                            <span class="fs-6 fw-bold">20</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                            <span class="fs-7 fw-semibold">Sa</span>
                            <span class="fs-6 fw-bold">21</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                            <span class="fs-7 fw-semibold">Su</span>
                            <span class="fs-6 fw-bold">22</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                            <span class="fs-7 fw-semibold">Tu</span>
                            <span class="fs-6 fw-bold">23</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                            <span class="fs-7 fw-semibold">Tu</span>
                            <span class="fs-6 fw-bold">24</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                            <span class="fs-7 fw-semibold">We</span>
                            <span class="fs-6 fw-bold">25</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                            <span class="fs-7 fw-semibold">Th</span>
                            <span class="fs-6 fw-bold">26</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                            <span class="fs-7 fw-semibold">Fri</span>
                            <span class="fs-6 fw-bold">27</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                            <span class="fs-7 fw-semibold">Sa</span>
                            <span class="fs-6 fw-bold">28</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                            <span class="fs-7 fw-semibold">Su</span>
                            <span class="fs-6 fw-bold">29</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item p-0 ms-0">
                        <!--begin::Date-->
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                            <span class="fs-7 fw-semibold">Mo</span>
                            <span class="fs-6 fw-bold">30</span>
                        </a>
                        <!--end::Date-->
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--end::Nav-->
                <!--begin::Tab Content (ishlamayabdi)-->
                <div class="tab-content mb-2 px-9">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                <span class="text-gray-400 fw-semibold fs-7">PM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Mark Morris</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Bullet-->
                            <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                <span class="text-gray-400 fw-semibold fs-7">AM</span></div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-7">ผู้วางแผน
                                <!--begin::Name-->
                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Bob</a>
                                <!--end::Name--></div>
                                <!--end::Link-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Action-->
                            <!-- <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a> -->
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tap pane-->
                </div>
                <!--end::Tab Content-->
                <!--begin::Action-->
                <div class="float-end d-none">
                    <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Timeline widget 3-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12 mb-0">
                <!--begin::Table Widget 5-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">ยอดขายรวม Sale</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">รวมยอด 80,356 บาท</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <!-- <div class="text-muted fs-7 me-2"></div> -->
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="เลือก">
                                        <option value="00">ทุกเดือน</option>
                                        <option value="01">มกราคม</option>
                                        <option value="02">กุมภาพันธ์</option>
                                        <option value="03">มีนาคม</option>
                                        <option value="04">เมษายน</option>
                                        <option value="05">พฤษภาคม</option>
                                        <option value="06">มิถุนายน</option>
                                        <option value="07">กรกฎาคม</option>
                                        <option value="08">สิงหาคม</option>
                                        <option value="09">กันยายน</option>
                                        <option value="10">ตุลาคม</option>
                                        <option value="11">พฤศจิกายน</option>
                                        <option value="12">ธันวาคม</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Destination-->
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <!-- <div class="text-muted fs-7 me-2"></div> -->
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="เลือก">
                                        <option value="00">ทุกปี</option>
                                        <option value="01">2024</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Destination-->
                            
                                <!--begin::Search-->
                                <!-- <a href="../../demo9/dist/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a> -->
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1 mt-2 mb-0">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                            <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาเซลส์" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Sales</th>
                                    <th class="text-end pe-3 min-w-100px">บุคคล</th>
                                    <th class="text-end pe-3 min-w-150px">นายช่าง</th>
                                    <th class="text-end pe-3 min-w-100px">ยอดรวม</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Max Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Melody Macy</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Emma Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Max Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Melody Macy</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Emma Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Max Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Melody Macy</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Emma Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="{{ url("/management/users/view") }}" class="text-dark text-hover-primary">Max Smith</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">฿500</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">฿560</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end text-primary">฿1,060</td>
                                    <!--end::Price-->
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link"><i class="previous"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item "><a href="#" class="page-link">2</a></li>
                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                            <li class="page-item "><a href="#" class="page-link">4</a></li>
                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                            <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                        </ul>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 5-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12 mb-0">
                <!--begin::Table widget 6-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">รายชื่อลูกค้า</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">ทั้งหมด 25 รายการ</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <!-- <div class="card-toolbar">
                            <a href="../../demo23/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">ดูทั้งหมด</a>
                        </div> -->
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom mb-3">
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-55px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">บุคคล</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-55px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">นายช่าง</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 w-200px w-xxl-450px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-190px"></th>
                                                <th class="p-0 w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                             class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                            <span class="text-muted fw-semibold d-block fs-7">Sale: smait niewot</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                            <span class="text-muted fw-semibold d-block fs-7">Sale: smait niewot</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="{{ asset("assets/media/avatars/300-12.jpg") }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                            <span class="text-muted fw-semibold d-block fs-7">Sale: smait niewot</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                            <span class="text-muted fw-semibold d-block fs-7">Sale: smait niewot</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="{{ asset("assets/media/avatars/300-13.jpg") }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                            <span class="text-muted fw-semibold d-block fs-7">Sale: smait niewot</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item "><a href="#" class="page-link">2</a></li>
                                        <li class="page-item "><a href="#" class="page-link">3</a></li>
                                        <li class="page-item "><a href="#" class="page-link">4</a></li>
                                        <li class="page-item "><a href="#" class="page-link">5</a></li>
                                        <li class="page-item "><a href="#" class="page-link">6</a></li>
                                        <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                                    </ul>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 w-200px w-xxl-450px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-190px"></th>
                                                <th class="p-0 w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="{{ asset("assets/media/avatars/300-1.jpg") }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="{{ asset("assets/media/avatars/300-12.jpg") }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="{{ asset("assets/media/avatars/300-13.jpg") }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">0XX-XXX-XXXX</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">20 user</span>
                                                    <span class="fw-semibold text-gray-400 d-block">รายละเอียด</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">฿ 2,020</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">ราคา</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">31/05/2024</span>
                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">วันหมดอายุ</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 6-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
@endsection

@section('js-content')
@endsection
