@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="card mb-12">
    <div class="card-body flex-column p-5">
        <div class="d-flex align-items-center h-lg-100px p-5">
            <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                <div class="position-relative w-100">
                    <i class="ki-outline ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8"></i>
                    <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="ค้นหาข่าวสาร" />
                </div>
            </div>
            <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                <input id="kt_daterangepicker_4" data-date-start="2024-05-15" data-date-end="2024-05-20" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" placeholder="" value=""/>
            </div>
            <button class="btn btn-primary ms-5">ค้นหา</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row p-7">
            <div class="card-rounded d-flex flex-stack flex-wrap p-5">
                <h1 class="text-dark">รายการข่าวสาร</h1>
                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-light-primary fw-bold fs-8 fs-lg-base mb-2">เพิ่มข่าวสาร</a>
            </div>
            <div class="mb-10">
                @for ($i = 0; $i < 8; $i++)
                <div class="d-flex mb-10">
                    <i class="ki-outline ki-file-added fs-2x me-5 ms-n1 mt-2 text-success"></i>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-2">
                            <a href="{{ url("/news/detail/") }}" class="text-dark text-hover-primary fs-4 me-3 fw-semibold">ตารางโปรโมชันลูกค้าเดือนพฤษภาคม</a>
                        </div>
                        <span class="text-gray-700 fw-semibold fs-6">Keenthemes example description</span>
                        <span class="text-muted fw-semibold fs-7 mt-2">20/05/2024 13:00 น.</span>
                    </div>
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
                @endfor
            </div>
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
        </div>
    </div>
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_ticket_form" class="form" action="#">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">เพิ่มข่าวสาร</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
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
                        <input type="text" class="form-control form-control-solid" placeholder="กรอกข้อมูล" name="subject" />
                    </div>
                    <div class="d-flex flex-column mb-5 fv-row">
                        <label class="fs-6 fw-semibold mb-2">รายละเอียดข่าวสาร</label>
                        <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="กรอกรายละเอียดข่าวสาร"></textarea>
                    </div>
                    <div class="fv-row mb-8">
                        <label class="fs-6 fw-semibold mb-2">อัปโหลดรูปภาพ</label>
                        <div class="dropzone" id="kt_modal_create_ticket_attachments">
                            <div class="dz-message needsclick align-items-center">
                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดรูปภาพ</h3>
                                    <span class="fw-semibold fs-7 text-gray-400">ขนาดไฟล์ไม่เกิน 5MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">ยกเลิก</button>
                        <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                            <span class="indicator-label">สร้างข่าวสาร</span>
                            <span class="indicator-progress">รอสักครู่...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-content')
{{-- <script src="{{ asset("assets/js/custom/apps/support-center/tickets/create.js") }}"></script> --}}
<script src="{{ asset("assets/js-external/news/lists.js") }}"></script>
@endsection