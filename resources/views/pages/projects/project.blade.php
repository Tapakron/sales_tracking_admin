@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="card mb-6 mb-xl-9">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                <img class="mw-50px mw-lg-100px" src="assets/media/avatars/300-10.jpg" alt="image" />
            </div>
            <!--end::Image-->
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::Details-->
                    <div class="d-flex flex-column">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center mb-1">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Wqitnes Yppet</a>
                            <!-- <span class="badge badge-light-success me-auto">In Progress</span> -->
                        </div>
                        <!--end::Status-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-2 fs-5 text-gray-400">42/24 กระทุ่มล้ม สามพราน นครปฐม 73220</div>
                        <!--end::Description-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-2 fs-5 text-gray-400">SME THAI SOFTWARE</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Actions-->
                    <div class="d-flex mb-4">
                        <a href="../../demo9/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-bg-light btn-active-color-primary me-3">แก้ไขข้อมูล</a>
                        <!-- <a href="../../demo9/dist/apps/projects/project-save-data.html" class="btn btn-sm btn-primary me-3">บันทึกการติดต่อ</a> -->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Head-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap justify-content-start">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">086-787-98563</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">เบอร์โทร</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">นายสุกิจ จิตตดิ</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Sale ที่ดูแล</div>
                            <!--end::Label-->
                            
                        </div>
                        <!--end::Stat-->
                        <a class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search" data-bs-toggle="tooltip" data-bs-trigger="hover" title="ประวัติเซลส์ที่ดูแล">
                            <i class="ki-duotone ki-search-list fs-2x ms-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
        <div class="separator"></div>
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 active" href="{{ url("/projects") }}">ข้อมูล</a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--end::Nav-->
    </div>
</div>
<div class="card card-flush mt-6 mt-xl-9">
    <!--begin::Card header-->
    <div class="card-header mt-5">
        <!--begin::Card title-->
        <div class="card-title flex-column">
            <h3 class="fw-bold mb-1">ประวัติการบันทึกข้อมูล</h3>
            <div class="fs-6 text-gray-400">ทั้งหมด 11 รายการ</div>
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar my-1">
            <!--begin::Select-->
            <div class="me-6 my-1">
                <select id="kt_filter_month" name="month" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                    <option value="00">ทั้งหมด</option>
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
            </div>
            <!--end::Select-->
            <!--begin::Select-->
            <div class="me-6 my-1">
                <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                    <option value="00">ทั้งหมด</option>
                    <option value="01">2024</option>
                </select>
            </div>
            <!--end::Select-->
            <!--begin::Select-->
            <div class="me-4 my-1">
                <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                    <option value="All" selected="selected">ทุกโปรแกรม</option>
                    <option value="bk">บุคคล</option>
                    <option value="nc">นายช่าง</option>
                </select>
            </div>
            <!--end::Select-->
            <!--begin::Select-->
            <div class="me-4 my-1">
                <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                    <option value="All" selected="selected">ทุกสถานะ</option>
                    <option value="Approved">ติดต่อได้</option>
                    <option value="Declined">ติดต่อไม่ได้</option>
                    <option value="Not yet">ยังไม่ได้ติดต่อ</option>
                </select>
            </div>
            <!--end::Select-->
            <!--begin::Search-->
            <!-- <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
            </div> -->
            <!--end::Search-->
        </div>
        <!--begin::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                <thead class="fs-7 text-gray-400 text-uppercase">
                    <tr>
                        <th class="min-w-30px text-center">ติดต่อครั้งที่</th>
                        <th class="min-w-250px">รายละเอียดในการติดต่อ</th>
                        <th class="min-w-150px text-center">วันที่บันทึก</th>
                        <th class="min-w-90px text-center">โปรแกรม</th>

                        <th class="min-w-90px text-center">นัดครั้งถัดไป</th>
                        <th class="min-w-50px text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fs-6">
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary ms-auto fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสมัครสมาชิดรายเดือน</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">10/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-nc fw-bold px-2 py-1">นายช่าง</span>
                        </td>

                        <td class="text-center">10/05/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสมัครสมาชิดรายเดือน</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">10/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-nc fw-bold px-2 py-1">นายช่าง</span>
                        </td>

                        <td class="text-center">10/05/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสมัครสมาชิดรายเดือน</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">10/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-nc fw-bold px-2 py-1">นายช่าง</span>
                        </td>

                        <td class="text-center">10/05/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสมัครสมาชิดรายเดือน</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">10/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-nc fw-bold px-2 py-1">นายช่าง</span>
                        </td>

                        <td class="text-center">10/05/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสมัครสมาชิดรายเดือน</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">10/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-nc fw-bold px-2 py-1">นายช่าง</span>
                        </td>

                        <td class="text-center">10/05/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td>
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                
                                <!--begin::Info-->
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-semibold text-gray-800">ติดต่อสอบถามความสนใจโปรแกรม</div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </td>
                        <td class="text-center">18/04/2024</td>
                        <td class="text-center">
                            <span class="badge badge-primary fw-bold px-2 py-1">บุคคล</span>
                        </td>

                        <td class="text-center">22/04/2024</td>
                        <td class="text-center">
                            <a href="{{ url("/invoices/view") }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                <i class="ki-duotone ki-magnifier fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Card body-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>ประวัติเซลส์ที่ดูแล</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <div class="card-body pt-4 px-0">
                <!--begin::Tab Content-->
                <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height:550px">
                    <!--begin::Tap pane-->
                    <div class="mt-5 mb-5">
                        <!--begin::Item-->
                        <div class="m-0">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center mb-7">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-pencil fs-2 text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block"> Sale ใหม่</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Annette Black</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light-success fw-bold my-2">01/06/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-cd fs-2 text-gray-800">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block">Sale เก่า</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Haven van Rotterdam</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light fw-bold my-2">23/05/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="m-0">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center mb-7">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-pencil fs-2 text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block"> Sale ใหม่</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Haven van Rotterdam</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light-success fw-bold my-2">23/05/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-cd fs-2 text-gray-800">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block">Sale เก่า</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Hektor Container</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light fw-bold my-2">15/02/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="m-0">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center mb-7">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-pencil fs-2 text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block"> Sale ใหม่</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Haven van Rotterdam</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light-success fw-bold my-2">15/02/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item align-items-center">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon" style="margin-left: 11px">
                                        <i class="ki-duotone ki-cd fs-2 text-gray-800">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content m-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 text-gray-400 fw-semibold d-block">Sale เก่า</span>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bold text-gray-800">Hektor Container</span>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Timeline content-->
                                    <div class="d-flex align-items-sm-center mb-5">
                                        <span class="badge badge-lg badge-light fw-bold my-2">01/01/2024</span>
                                    </div>
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Tap pane-->
                </div>
                <!--end::Tab Content-->
            </div>
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection

@section('js-content')
<script src="{{ asset("assets/js/custom/apps/projects/project/project.js") }}"></script>
@endsection
