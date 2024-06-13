@php
    // dd($pageDetails);
@endphp
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
            <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-customers-all-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="table-01">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        {{-- <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                                            </div>
                                        </th> --}}
                                        {{-- <th class="min-w-100px">#</th> --}}
                                        <th class="min-w-175px">ชื่อลูกค้า</th>
                                        <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                        <th class="text-center min-w-100px">เบอร์โทร</th>
                                        <th class="text-center min-w-100px">วันที่เริ่มดูแล</th> 
                                        <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
                                        <th class="text-center min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (Count($pageDetails['customer_all']) > 0)
                                        @foreach ($pageDetails['customer_all'] as $item)
                                            @php
                                                if ($item['customer_img'] != null) {
                                                    $img = $item['customer_img'];
                                                } else {
                                                    $img = '/assets/media/avatars/300-6.jpg';
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{ url('/projects') }}">
                                                                <div class="symbol-label">
                                                                    <img src="{{ asset($img) }}" alt="{{ $item['customer_name'] }}" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="ms-5">
                                                            <a  href="{{ url('/projects') }}" data-customer-id="{{ $item['customer_id'] }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item['customer_name'] }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center pe-0" data-order="Delivering">
                                                    @if (Count($item['products']) > 0)
                                                        @foreach ($item['products'] as $products)
                                                            @switch($products["product_id"])
                                                                @case(1)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(2)
                                                                    <div class="badge badge-light-nc ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(3)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(4)
                                                                    <div class="badge badge-light-warning ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @default
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                            @endswitch
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold">{{ $item['customer_tel'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-14">
                                                    <span class="fw-bold">{{ $item['begin_date'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-18">
                                                    <span class="fw-bold">{{ $item['last_contact_date'] }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('/projects') }}" class="menu-link px-3">แก้ไข</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-customers-all-order-filter="move_row">Lost</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-customers-all-order-filter="delete_row">ลบ</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_ecommerce_sales_order_history1" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-customers-succeed-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="table-02">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-175px">ชื่อลูกค้า</th>
                                        <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                        <th class="text-center min-w-100px">เบอร์โทร</th>
                                        <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                        <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (Count($pageDetails['customer_succeed']) > 0)
                                        @foreach ($pageDetails['customer_succeed'] as $item)
                                            @php
                                                if ($item['customer_img'] != null) {
                                                    $img = $item['customer_img'];
                                                } else {
                                                    $img = '/assets/media/avatars/300-6.jpg';
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{ url('/projects') }}">
                                                                <div class="symbol-label">
                                                                    <img src="{{ asset($img) }}" alt="{{ $item['customer_name'] }}" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="ms-5">
                                                            <a  href="{{ url('/projects') }}" data-customer-id="{{ $item['customer_id'] }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item['customer_name'] }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center pe-0" data-order="Delivering">
                                                    @if (Count($item['products']) > 0)
                                                        @foreach ($item['products'] as $products)
                                                            @switch($products["product_id"])
                                                                @case(1)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(2)
                                                                    <div class="badge badge-light-nc ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(3)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(4)
                                                                    <div class="badge badge-light-warning ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @default
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                            @endswitch
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold">{{ $item['customer_tel'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-14">
                                                    <span class="fw-bold">{{ $item['begin_date'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-18">
                                                    <span class="fw-bold">{{ $item['last_contact_date'] }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
            <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-customers-lost-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="table-03">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-175px">ชื่อลูกค้า</th>
                                        <th class="text-center min-w-70px">โปรแกรมที่สนใจ</th>
                                        <th class="text-center min-w-100px">เบอร์โทร</th>
                                        <th class="text-center min-w-100px">วันที่เริ่มดูแล</th>
                                        <th class="text-center min-w-100px">วันที่ติดต่อล่าสุด</th>
                                        <th class="text-center min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (Count($pageDetails['customer_lost']) > 0)
                                        @foreach ($pageDetails['customer_lost'] as $item)
                                            @php
                                                if ($item['customer_img'] != null) {
                                                    $img = $item['customer_img'];
                                                } else {
                                                    $img = '/assets/media/avatars/300-6.jpg';
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{ url('/projects') }}">
                                                                <div class="symbol-label">
                                                                    <img src="{{ asset($img) }}" alt="{{ $item['customer_name'] }}" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="ms-5">
                                                            <a  href="{{ url('/projects') }}" data-customer-id="{{ $item['customer_id'] }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item['customer_name'] }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center pe-0" data-order="Delivering">
                                                    @if (Count($item['products']) > 0)
                                                        @foreach ($item['products'] as $products)
                                                            @switch($products["product_id"])
                                                                @case(1)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(2)
                                                                    <div class="badge badge-light-nc ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(3)
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @case(4)
                                                                    <div class="badge badge-light-warning ">{{ $products['product_short_name'] }}</div>
                                                                @break

                                                                @default
                                                                    <div class="badge badge-light-primary">{{ $products['product_short_name'] }}</div>
                                                            @endswitch
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold">{{ $item['customer_tel'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-14">
                                                    <span class="fw-bold">{{ $item['begin_date'] }}</span>
                                                </td>
                                                <td class="text-center" data-order="2023-07-18">
                                                    <span class="fw-bold">{{ $item['last_contact_date'] }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('/projects') }}" class="menu-link px-3">ดู</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-customers-lost-order-filter="move_row">ปกติ</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-customers-lost-order-filter="delete_row">ลบ</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
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
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/listing.js') }}"></script> --}}
    <script src="{{ asset('assets/js-external/customers/listing.js') }}"></script>
@endsection
