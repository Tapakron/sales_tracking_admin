@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    {{-- !------------------------------------------------------- --}}
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 me-5" placeholder="ค้นหา" />
                    {{-- <div class="w-100 mw-150px">
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -">
                            <option></option>
                            <option value="all" selected>ทั้งหมด</option>
                            <option value="bk">บุคคล</option>
                            <option value="nc">นายช่าง</option>
                        </select>
                    </div> --}}
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    {{-- <a href="{{ url("/management/users/import") }}">
                        <button type="button" class="btn btn-light-primary me-3">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>นำเข้าข้อมูล
                        </button>
                    </a> --}}
                    <a href="{{ url('/sales/add') }}">
                        <button type="button" class="btn btn-primary">
                            <i class="ki-duotone ki-plus fs-2"></i>เพิ่มพนักงาน
                        </button>
                    </a>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span>รายการที่เลือก
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">ลบรายการที่เลือก</button>
                </div>
                <!--end::Group actions-->

            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-125px">รายการเซลส์</th>
                        <th class="min-w-125px">เบอร์โทร</th>
                        <th class="min-w-125px">อีเมล</th>
                        <td></td>
                        <th class="min-w-125px">ระดับพนักงาน</th>
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @if (Count($pageDetails['sales']) > 0)
                        @foreach ($pageDetails['sales'] as $item)
                            @php
                                if ($item['user_img'] != null) {
                                    $img = $item['user_img'];
                                } else {
                                    $img = '/assets/media/avatars/300-6.jpg';
                                }
                                switch ($item['sales_level']) {
                                    case '2':
                                        $classLevel = "badge badge-light-warning fw-bold";
                                        $level = 'Gold';
                                        break;
                                    case '3':
                                        $classLevel = "badge badge-light-primary fw-bold";
                                        $level = 'Premium';
                                        break;
                                    default:
                                        $classLevel = "badge badge-light fw-bold";
                                        $level = 'Silver';
                                        break;
                                }
                                $editUrl = "/sales/edit/".$item['id'];
                            @endphp
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="{{ url('/management/users/view') }}">
                                            <div class="symbol-label">
                                                <img src="{{ asset($img) }}" alt="{{ $item['name'] }}" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{ url('/management/users/view') }}" data-sale-id="{{ $item['id'] }}" class="text-gray-800 text-hover-primary mb-1">{{ $item['name'] }}</a>
                                        <span>{{ $item['username'] }}</span>
                                    </div>
                                </td>
                                <td>{{ $item['tel'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td></td>
                                <td>
                                    <div class="{{ $classLevel }}">{{ $level }}</div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">จัดการ
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="{{ url('/management/users/view') }}" class="menu-link px-3">ดู</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ $editUrl }}" class="menu-link px-3">แก้ไข</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">ลบ</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    @endif
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    {{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
    {{-- <script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script> --}}
    <script src="{{ asset('assets/js-external/sales-list.js') }}"></script>
@endsection
