@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<div class="row g-7">
    <!--begin::Search-->
    <div class="col-lg-6 col-xl-3">
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
                    <div class="d-flex flex-stack py-4 bg-light-primary rounded">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center ms-5">
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
    <div class="col-xl-9">
        <!--begin::Table-->
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
                                <th class="min-w-90px">ลูกค้า</th>
                                <th class="min-w-200px">รายละเอียด</th>
                                <th class="min-w-150px text-center">วันที่บันทึก</th>
                                <th class="min-w-90px text-center">โปรแกรม</th>
                                <th class="min-w-90px text-center">ติดต่อครั้งที่</th>
                                <th class="min-w-90px text-center">นัดครั้งถัดไป</th>
                                <th class="min-w-50px text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>
                                <td class="">Mikaela Collins</td>
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
                                <td class="text-center">5</td>
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
                                <td class="">Ethan Wilder</td>
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
                                <td class="text-center">2</td>
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
                                <td class="">Emma Smith</td>
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
                                <td class="text-center">5</td>
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
                                <td class="">Ethan Wilder</td>
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
                                <td class="text-center">2</td>
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
                                <td class="">Brian Cox</td>
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
                                <td class="text-center">5</td>
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
                                <td class="">Emma Bold</td>
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
                                <td class="text-center">2</td>
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
                                <td class="">John Miller</td>
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
                                <td class="text-center">5</td>
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
                                <td class="">Brian Cox</td>
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
                                <td class="text-center">2</td>
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
                                <td class="">Emma Smith</td>
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
                                <td class="text-center">5</td>
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
                                <td class="">Brian Cox</td>
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
                                <td class="text-center">2</td>
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
                                <td class="">Mikaela Collins</td>
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
                                <td class="text-center">5</td>
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
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('js-content')
@endsection
