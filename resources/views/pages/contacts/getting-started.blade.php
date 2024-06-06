@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
<div class="row g-7">
    <!--begin::Search-->
    <div class="col-lg-6 col-xl-4">
        <!--begin::Contacts-->
        <div class="card card-flush" id="kt_contacts_list">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_contacts_list_header">
                <!--begin::Form-->
                <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="ค้นหาเซลส์" />
                    <!--end::Input-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-5" id="kt_contacts_list_body">
                <!--begin::List-->
                <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-6.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0001</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0002</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-1.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0003</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-5.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0004</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-25.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0005</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0006</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-9.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0007</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0008</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0009</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-23.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                <div class="fw-semibold fs-7 text-muted">EMP00010</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0011</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-12.jpg") }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0012</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-info text-info fs-6 fw-bolder">A</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0013</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-13.jpg") }}" />
                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0014</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <span class="symbol-label bg-light-success text-success fs-6 fw-bolder">L</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0015</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-40px symbol-circle">
                                <img alt="Pic" src="{{ asset("assets/media/avatars/300-21.jpg") }}" />
                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-4">
                                <a href="{{ url("/contacts/view") }}" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                <div class="fw-semibold fs-7 text-muted">EMP0016</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::List-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Contacts-->
    </div>
    <!--end::Search-->
    <!--begin::Content-->
    <div class="col-xl-8">
        <!--begin::Card-->
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card body-->
            <div class="card-body p-0">
                <!--begin::Wrapper-->
                <div class="card-px text-center py-20 my-10">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bold mb-10">ดูสถานะการดำเนินการของเซลส์</h2>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fs-4 fw-semibold mb-10">กรุณาเลือกเซลส์ที่ต้องการดูข้อมูลการดำเนินการ</p>
                    <!--end::Description-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Illustration-->
                <div class="text-center px-4">
                    <img class="mw-100 mh-300px" alt="" src="{{ asset("assets/media/illustrations/sigma-1/5.png") }}" />
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
@endsection

@section('js-content')
@endsection
