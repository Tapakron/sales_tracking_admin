@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="d-flex flex-column gap-7 gap-lg-10">
    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">รายชื่อลูกค้า</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history1">รายการลูกค้าที่สำเร็จ</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">รายการขายที่ไม่สำเร็จ</a>
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->
    </div>
    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
            <!--begin::Orders-->
            <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                <!--begin::Products-->
                <div class="card card-flush">
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
                                    <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                    <th class="text-center min-w-100px">เบอร์โทร</th>
                                    <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                    <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-13.jpg") }}" alt="John Miller" class="w-100" />
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-9.jpg") }}" alt="Francis Mitcham" class="w-100" />
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">Lost</a>
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
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Orders-->
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history1" role="tab-panel">
            <!--begin::Orders-->
            <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                <!--begin::Products-->
                <div class="card card-flush">
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
                                    <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                    <th class="text-center min-w-100px">เบอร์โทร</th>
                                    <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                    <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-13.jpg") }}" alt="John Miller" class="w-100" />
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-9.jpg") }}" alt="Francis Mitcham" class="w-100" />
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
                                                <a href="{{ url("/sales/add") }}" class="menu-link px-3">แก้ไข</a>
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
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Orders-->
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
            <!--begin::Orders-->
            <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                <!--begin::Products-->
                <div class="card card-flush">
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
                                    <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                    <th class="text-center min-w-100px">เบอร์โทร</th>
                                    <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                    <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                        <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" alt="Ethan Wilder" class="w-100"/>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-13.jpg") }}" alt="John Miller" class="w-100" />
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                                                        <img src="{{ asset("assets/media/avatars/300-9.jpg") }}" alt="Francis Mitcham" class="w-100" />
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
                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="move_row">ปกติ</a>
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
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Orders-->
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab content-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
<script src="{{ asset("assets/js/custom/apps/ecommerce/customers/listing.js") }}"></script>
@endsection
