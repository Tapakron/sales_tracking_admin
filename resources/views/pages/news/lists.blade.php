@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="card mb-12">
    <!--begin::Hero body-->
    <div class="card-body flex-column p-5">
        <!--begin::Hero content-->
        <div class="d-flex align-items-center h-lg-100px p-5">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                <!--begin::Input group-->
                <div class="position-relative w-100">
                    <i class="ki-outline ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8"></i>
                    <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="ค้นหาข่าวสาร" />
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                <input class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" placeholder="05/07/2024 - 05/13/2024" id="kt_daterangepicker_4"/>
                <!--begin::Primary button-->
                <!-- <a href="#" class="btn fw-bold btn-primary ms-5">ค้นหา</a> -->
                <!--end::Primary button-->
            </div>
            <!--end::Wrapper-->
            <button class="btn btn-primary ms-5">ค้นหา</button>
        </div>
        <!--end::Hero content-->
    </div>
    <!--end::Hero body-->
</div>
<div class="card">
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Layout-->
        <div class="row p-7">
            <!--begin::Tickets-->
            <!--begin::Heading-->
            <div class="card-rounded d-flex flex-stack flex-wrap p-5">
                <h1 class="text-dark">รายการข่าวสาร</h1>
                <!--begin::Action-->
                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-light-primary fw-bold fs-8 fs-lg-base mb-2">เพิ่มข่าวสาร</a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
            <!--begin::Tickets List-->
            <div class="mb-10">
                <!--begin::Ticket-->
                <div class="d-flex mb-10">
                    <!--begin::Symbol-->
                    <i class="ki-outline ki-file-added fs-2x me-5 ms-n1 mt-2 text-success"></i>
                    <!--end::Symbol-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column">
                        <!--begin::Content-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Title-->
                            <a href="{{ url("/news/detail/") }}" class="text-dark text-hover-primary fs-4 me-3 fw-semibold">ตารางโปรโมชันลูกค้าเดือนพฤษภาคม</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <span class="text-gray-700 fw-semibold fs-6">Keenthemes example description</span>
                        <!--end::Text-->
                        <!--begin::time-->
                        <span class="text-muted fw-semibold fs-7 mt-2">20/05/2024 13:00 น.</span>
                        <!--end::time-->
                    </div>
                    <!--end::Section-->
                    <span class="flex-equal d-flex justify-content-center ms-5">
                        <a href="#" class="btn btn-icon btn-light w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket">
                            <i class="ki-duotone ki-pencil fs-2 ms-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                        <span>
                            <a href="#" class="btn btn-icon btn-light-danger w-30px h-30px ms-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket">
                                <i class="ki-duotone ki-trash fs-2 ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </a>
                        </span>
                    </span>
                </div>
                <!--end::Ticket-->
            </div>
            <!--end::Tickets List-->
            <!--begin::Pagination-->
            <ul class="pagination">
                <li class="page-item previous disabled">
                    <a href="#" class="page-link">
                        <i class="previous"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">6</a>
                </li>
                <li class="page-item next">
                    <a href="#" class="page-link">
                        <i class="next"></i>
                    </a>
                </li>
            </ul>
            <!--end::Pagination-->
            <!--end::Tickets-->
            
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Card body-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_ticket_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">เพิ่มข่าวสาร</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">หัวข้อ</span>
                            <span class="ms-2" data-bs-toggle="tooltip" title="หัวข้อข่าวสารที่ต้องการแจ้ง">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="กรอกข้อมูล" name="subject" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <label class="fs-6 fw-semibold mb-2">รายละเอียดข่าวสาร</label>
                        <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="กรอกรายละเอียดข่าวสาร"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <label class="fs-6 fw-semibold mb-2">อัปโหลดรูปภาพ</label>
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_modal_create_ticket_attachments">
                            <!--begin::Message-->
                            <div class="dz-message needsclick align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดรูปภาพ</h3>
                                    <span class="fw-semibold fs-7 text-gray-400">ขนาดไฟล์ไม่เกิน 5MB</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">ยกเลิก</button>
                        <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                            <span class="indicator-label">สร้างข่าวสาร</span>
                            <span class="indicator-progress">รอสักครู่...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection

@section('js-content')
<script src="{{ asset("assets/js/custom/apps/support-center/tickets/create.js") }}"></script>
@endsection
