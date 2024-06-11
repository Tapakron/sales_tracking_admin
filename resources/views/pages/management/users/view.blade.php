@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
        <!--begin::Card-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Summary-->
                <!--begin::User Info-->
                <div class="d-flex flex-center flex-column py-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-100px symbol-circle mb-7">
                        <img src="{{ asset("assets/media/avatars/300-6.jpg") }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">Emma Smith</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="mb-9">
                        <!--begin::Badge-->
                        <div class="badge badge-lg badge-light-primary d-inline">Premium</div>
                        <!--begin::Badge-->
                    </div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <!--begin::Info heading-->
                    <div class="fw-bold mb-3">ยอดการขาย
                    <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week.">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span></div>
                    <!--end::Info heading-->
                    <div class="d-flex flex-wrap flex-center">
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-6 fw-bold text-gray-700 text-center">
                                <span class="w-75px">฿243,125</span>
                            </div>
                            <div class="fw-semibold text-muted text-center">ทั้งหมด</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                            <div class="fs-6 fw-bold text-gray-700 text-center">
                                <span class="w-50px">฿50,116</span>
                            </div>
                            <div class="fw-semibold text-muted text-center">รายเดือน</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-6 fw-bold text-gray-700 text-center">
                                <span class="w-50px">฿18,800</span>
                            </div>
                            <div class="fw-semibold text-muted text-center">ค่าคอมมิชชัน</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User Info-->
                <!--end::Summary-->
                <!--begin::Details toggle-->
                <div class="d-flex flex-stack fs-4 py-3">
                    <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">รายละเอียด
                    <span class="ms-2 rotate-180">
                        <i class="ki-duotone ki-down fs-3"></i>
                    </span></div>
                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="แก้ไขข้อมูลเซลส์">
                        <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light-primary">แก้ไข</a>
                    </span>
                </div>
                <!--end::Details toggle-->
                <div class="separator"></div>
                <!--begin::Details content-->
                <div id="kt_user_view_details" class="collapse show">
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">รหัสเซลส์</div>
                        <div class="text-gray-600">ID-45453423</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">เบอร์โทร</div>
                        <div class="text-gray-600">086-787-98563</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Email</div>
                        <div class="text-gray-600">
                            <a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">ที่อยู่ปัจจุบัน</div>
                        <div class="text-gray-600">101 Collin Street,
                        <br />Melbourne 3000 VIC
                        <br />Australia</div>
                        <!--begin::Details item-->
                    </div>
                </div>
                <!--end::Details content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Sidebar-->
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15 mt-5">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">กำหนดการ</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">ลูกค้าที่ดูแล</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">ประวัติการขาย</a>
            </li>
            <!--end:::Tab item-->
            
        </ul>
        <!--end:::Tabs-->
        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card card-flush mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h2 class="mb-1">กำหนดการของเซลส์</h2>
                            <div class="fs-6 fw-semibold text-muted">แผนงานที่จะมาถึง 15 รายการ</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <!-- <div class="card-toolbar">
                            <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                            <i class="ki-duotone ki-brush fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Add Schedule</button>
                        </div> -->
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-4">
                        <!--begin::Dates-->
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bolder">21</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bolder">22</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bolder">23</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                    <span class="opacity-50 fs-7 fw-semibold">We</span>
                                    <span class="fs-6 fw-bolder">24</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                    <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                    <span class="fs-6 fw-bolder">25</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                    <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                    <span class="fs-6 fw-bolder">26</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                    <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                    <span class="fs-6 fw-bolder">27</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bolder">28</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bolder">29</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bolder">30</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">
                                    <span class="opacity-50 fs-7 fw-semibold">We</span>
                                    <span class="fs-6 fw-bolder">31</span>
                                </a>
                            </li>
                            <!--end::Date-->
                        </ul>
                        <!--end::Dates-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Day-->
                            <div id="kt_schedule_day_0" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Michael Walters</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Peter Marcus</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">12:00 - 13:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Bob Harris</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Michael Walters</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_2" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Bob Harris</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">12:00 - 13:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Naomi Hayabusa</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Walter White</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_3" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Michael Walters</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Terry Robins</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_4" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">9:00 - 10:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_5" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Yannis Gloverson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_6" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Bob Harris</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">9:00 - 10:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Terry Robins</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">9:00 - 10:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_7" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">12:00 - 13:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_8" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Naomi Hayabusa</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">9:00 - 10:00
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Peter Marcus</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_9" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Yannis Gloverson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">13:00 - 14:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_10" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">12:00 - 13:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">12:00 - 13:00
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Kendell Trevor</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">ลูกค้า
                                        <a href="#">Kendell Trevor</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <!-- <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a> -->
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Flatpickr-->
                            <div class="input-group w-250px">
                                <input class="form-control form-control-solid rounded rounded-end-0" placeholder="วันที่บันทึกล่าสุด" id="kt_ecommerce_sales_flatpickr" />
                                <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                    <i class="ki-outline ki-cross fs-2"></i>
                                </button>
                            </div>
                            <!--end::Flatpickr-->
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -" data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all" selected>ทั้งหมด</option>
                                    <option value="bk">บุคคล</option>
                                    <option value="nc">นายช่าง</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-100px">#</th>
                                    <th class="min-w-175px">ชื่อลูกค้า</th>
                                    <th class="text-center min-w-70px">โปรแกรม</th>
                                    <th class="text-center min-w-100px">เบอร์โทร</th>
                                    <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                    <th class="text-center min-w-100px">ติดต่อล่าสุด</th>
                                    <th class="text-center min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14287</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$362.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-14">
                                        <span class="fw-bold">14/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-18">
                                        <span class="fw-bold">18/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14288</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("{{ asset("assets/media/avatars/300-21.jpg") }}") }}" alt="Ethan Wilder" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$366.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-10">
                                        <span class="fw-bold">10/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-17">
                                        <span class="fw-bold">17/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14289</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("assets/media/avatars/300-6.jpg") }}" alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Pending">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-nc">นายช่าง</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$253.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-09">
                                        <span class="fw-bold">09/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-16">
                                        <span class="fw-bold">16/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14290</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("{{ asset("assets/media/avatars/300-21.jpg") }}") }}" alt="Ethan Wilder" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-nc">นายช่าง</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$296.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-13">
                                        <span class="fw-bold">13/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-15">
                                        <span class="fw-bold">15/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14291</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("assets/media/avatars/300-25.jpg") }}" alt="Brian Cox" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Pending">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-nc">นายช่าง</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$38.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-07">
                                        <span class="fw-bold">07/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-14">
                                        <span class="fw-bold">14/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14292</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$438.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-06">
                                        <span class="fw-bold">06/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-13">
                                        <span class="fw-bold">13/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14293</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("{{ asset("assets/media/avatars/300-13.jpg") }}") }}" alt="John Miller" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$160.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-10">
                                        <span class="fw-bold">10/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-12">
                                        <span class="fw-bold">12/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14294</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("assets/media/avatars/300-25.jpg") }}" alt="Brian Cox" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Pending">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-nc">นายช่าง</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$467.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-10">
                                        <span class="fw-bold">10/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-11">
                                        <span class="fw-bold">11/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14295</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("assets/media/avatars/300-6.jpg") }}" alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$84.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-05">
                                        <span class="fw-bold">05/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-10">
                                        <span class="fw-bold">10/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14296</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("assets/media/avatars/300-25.jpg") }}" alt="Brian Cox" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$265.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-08">
                                        <span class="fw-bold">08/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-09">
                                        <span class="fw-bold">09/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fw-bold">14297</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url("/projects") }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset("{{ asset("assets/media/avatars/300-9.jpg") }}") }}" alt="Francis Mitcham" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ url("/projects") }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">บุคคล</div>
                                        <!--end::Badges-->
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-nc">นายช่าง</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-center pe-0">
                                        <span class="fw-bold">$414.00</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-05">
                                        <span class="fw-bold">05/07/2023</span>
                                    </td>
                                    <td class="text-center" data-order="2023-07-08">
                                        <span class="fw-bold">08/07/2023</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url("/projects") }}" class="menu-link px-3">ดู</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="menu-link px-3">แก้ไข</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">ลบ</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                        <ul class="pagination justify-content-center">
                            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                            <li class="page-item "><a href="#" class="page-link">1</a></li>
                            <li class="page-item active"><a href="#" class="page-link">2</a></li>
                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                            <li class="page-item "><a href="#" class="page-link">4</a></li>
                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                            <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                        </ul>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h2 class="mb-1">ประวัติการขาย</h2>
                            <div class="fs-6 text-gray-400">ทั้งหมด 9 รายการ</div>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 pb-5">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                            <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                <tr class="text-start text-muted text-uppercase gs-0">
                                    <th class="min-w-130px">ชื่อลูกค้า</th>
                                    <th>โปรแกรม</th>
                                    <th>ราคา</th>
                                    <!-- <th class="min-w-60px">สถานะ</th> -->
                                    <th class="min-w-100px">วันที่ขาย</th>
                                    <th>สลิป</th>
                                    <th>ใบเสร็จ</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>09/05/2024</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>01/04/2024</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>01/04/2024</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../../demo23/dist/apps/projects/project.html" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <!-- <td class="text-success">สำเร็จ</td> -->
                                    <td>xx/xx/xxxx</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                        <ul class="pagination justify-content-center">
                            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                            <li class="page-item "><a href="#" class="page-link">1</a></li>
                            <li class="page-item active"><a href="#" class="page-link">2</a></li>
                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                            <li class="page-item "><a href="#" class="page-link">4</a></li>
                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                            <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                        </ul>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/view.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/update-details.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/add-schedule.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/add-task.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/update-email.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/update-password.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/update-role.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/add-auth-app.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/user-management/users/view/add-one-time-password.js") }}"></script>
@endsection
