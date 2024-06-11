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
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">รายการลูกค้า</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">ชำระเงินแล้ว</a>
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
                <!--begin::Tables Widget 2-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">ลูกค้าทั้งหมด</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">รวม 40 รายการ</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                    </div>
                    <!--end::Search-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-125px"></th>
                                        <th class="p-0 min-w-40px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="{{ url("/projects") }}">
                                                        <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                                    </a>
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Mikaela Collins</a>
                                            <span class="text-muted fw-semibold d-block fs-7">SME THAI SOFTWARE</span>
                                            <span class="text-muted fw-semibold d-block fs-7">Sale: Morro towkl</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-primary fw-semibold me-1">บุคคล</span>
                                        </td>
                                        <td class="text-end">
                                            <div href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ติดต่อล่าสุด</div>
                                            <span class="text-muted fw-semibold d-block fs-7">30/04/2024</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url("/invoices/create") }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <i class="ki-outline ki-arrow-right fs-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
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
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Mikaela Collins</a>
                                            <span class="text-muted fw-semibold d-block fs-7">SME THAI SOFTWARE</span>
                                            <span class="text-muted fw-semibold d-block fs-7">Sale: Morro towkl</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-nc fw-semibold me-1">นายช่าง</span>
                                        </td>
                                        <td class="text-end">
                                            <div href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ติดต่อล่าสุด</div>
                                            <span class="text-muted fw-semibold d-block fs-7">30/04/2024</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url("/invoices/create") }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <i class="ki-outline ki-arrow-right fs-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="{{ url("/projects") }}">
                                                        <div class="symbol-label">
                                                            <img src="{{ asset("assets/media/avatars/300-22.jpg") }}" alt="Ethan Wilder" class="w-100" />
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Mikaela Collins</a>
                                            <span class="text-muted fw-semibold d-block fs-7">SME THAI SOFTWARE</span>
                                            <span class="text-muted fw-semibold d-block fs-7">Sale: Morro towkl</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-primary fw-semibold me-1">บุคคล</span>
                                            <span class="badge badge-light-nc fw-semibold me-1">นายช่าง</span>
                                        </td>
                                        <td class="text-end">
                                            <div href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ติดต่อล่าสุด</div>
                                            <span class="text-muted fw-semibold d-block fs-7">30/04/2024</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url("/invoices/create") }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <i class="ki-outline ki-arrow-right fs-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                        <div class="row mb-5">
                            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="dataTables_length" id="kt_ecommerce_sales_table_length">
                                    <label>
                                        <select name="kt_ecommerce_sales_table_length" aria-controls="kt_ecommerce_sales_table" class="form-select form-select-sm form-select-solid">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_sales_table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="kt_ecommerce_sales_table_previous">
                                            <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="0" tabindex="0" class="page-link">
                                                <i class="previous"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="kt_ecommerce_sales_table_next">
                                            <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="3" tabindex="0" class="page-link">
                                                <i class="next"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                    
                </div>
                <!--end::Tables Widget 2-->
            </div>
            <!--end::Orders-->
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
            <!--begin::Orders-->
            <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                <!--begin::Order history-->
                <div class="card card-flush py-4 flex-row-fluid">
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
                                    <th class="min-w-60px">สถานะ</th>
                                    <th class="min-w-100px">วันที่ขาย</th>
                                    <th>สลิป</th>
                                    <th>ใบเสร็จ</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿1,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">บุุคคล</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                                        <a href="{{ url("/projects") }}" class="text-gray-600 text-hover-primary mb-1">Mikaela Collins</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-nc">นายช่าง</span>
                                    </td>
                                    <td>฿X,200</td>
                                    <td class="text-success">สำเร็จ</td>
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
                        <ul class="pagination justify-content-end">
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
                <!--end::Order history-->
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
@endsection
