@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Content-->
    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-12">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <!-- <div class="d-flex flex-stack pb-10"> -->
                                <!--begin::Logo-->
                                <!-- <a href="#">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/code-lab.svg" />
                                </a> -->
                                <!--end::Logo-->
                                <!--begin::Action-->
                                <!-- <a href="#" class="btn btn-sm btn-success">Pay Now</a> -->
                                <!--end::Action-->
                            <!-- </div> -->
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Label-->
                                <div class="fw-bold fs-3 text-gray-800 mb-8">ติดต่อครั้งที่ 1</div>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-11">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">วันที่ติดต่อ:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bold fs-6 text-gray-800">12 Apr 2021, 15:00 น.</div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">วันที่บันทึก:</div>
                                        <!--end::Label-->
                                        <!--end::Info-->
                                        <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                            <span class="pe-2">02 May 2021, 15:10 น.</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-12">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">รายละเอียดในการติดต่อ:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <!-- <div class="fw-bold fs-6 text-gray-800">KeenThemes Inc.</div> -->
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-semibold fs-6 text-gray-800">เสนอแนะนำฟังก์ชันการทำงานในครั้งถัดไป</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">ติดต่อครั้งถัดไป:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bold fs-6 text-gray-800">02 May 2021, 10:00 น. ถึง 11:30 น.</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <!-- <div class="fw-semibold fs-6 text-gray-800">10:00 น. ถึง 11:30 น.</div> -->
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Content-->
                                <div class="flex-grow-1">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-9">
                                        <table class="table mb-3">
                                            <thead>
                                                <tr class="border-bottom fs-6 fw-bold text-muted">
                                                    <th class="min-w-175px pb-2">การติดต่อ</th>
                                                    <th class="min-w-70px text-end pb-2">ได้</th>
                                                    <th class="min-w-80px text-end pb-2">ไม่ได้</th>
                                                    <th class="min-w-100px text-end pb-2">หลักฐาน</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>การโทร</td>
                                                    <td class="pt-5"><i class="ki-duotone ki-check fs-1 text-success fw-bold"></i></td>
                                                    <td class="pt-5"><i class="ki-duotone ki-minus fs-1 fw-bold"></i></td>
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
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>Email</td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-cross fs-1 text-danger fw-bold">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>Line Sales</td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>Line@</td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>Facebook</td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>เข้าพบ/ไปหาลูกค้า</td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td class="pt-5">
                                                        <i class="ki-duotone ki-minus fs-1 fw-bold"></i>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <a href="#"><button class="btn btn-light me-3">กลับ</button></a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
    <!--begin::Sidebar-->
    <div class="flex-lg-auto min-w-lg-300px">
        <!--begin::Card-->
        <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
            <!--begin::Card body-->
            <div class="card-body p-10">
                <!--begin::Input group-->
                <!--begin::Heading-->
                <div class="mb-5">
                    <!--begin::Title-->
                    <h4 class="mb-3 text-gray-800">File</h4>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Item-->
                <div class="mb-6">
                    <div class="fw-semibold text-gray-600 fs-7">ใบเสนอราคา:</div>
                    <div class="fw-bold fs-6 text-gray-800">ดูไฟล์
                        <a href="#" class="link-primary ps-1">{ชื่อไฟล์ที่อัปโหลด}</a></div>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-5"></div>
                <!--end::Separator-->
                <div class="mb-5">
                    <!--begin::Item-->
                    <div class="mb-6">
                        <div class="fw-semibold text-gray-600 fs-7">แจ้งหนี้:</div>
                        <div class="fw-bold fs-6 text-gray-800">ดูไฟล์
                            <a href="#" class="link-primary ps-1">{ชื่อไฟล์ที่อัปโหลด}</a></div>
                    </div>
                    <!--end::Item-->
                </div>
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-5"></div>
                <!--end::Separator-->
                <div class="mb-5">
                    <!--begin::Item-->
                    <div class="mb-15">
                        <div class="fw-semibold text-gray-600 fs-7">สถานะใบเสนอราคา:</div>
                        <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">
                        <span class="fs-7 text-danger d-flex align-items-center">
                        ต่อรองราคา</span></div>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Sidebar-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
@endsection
