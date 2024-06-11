@php
    //dd($pageDetails["company_profile"]);
@endphp
@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    {{-- !------------------------------------------------------- --}}
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-150px symbol-circle mb-7">
                            <img src="{{ asset('assets/media/avatars/sme.png') }}" alt="image" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{ $pageDetails['company_profile']['company_name'] }}</a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <!-- <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6"></a> -->
                        <!--end::Email-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold">รายละเอียด</div>
                        <!--begin::Badge-->
                        <!-- <div class="badge badge-light-info d-inline">Premium user</div> -->
                        <!--begin::Badge-->
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">รหัสบริษัท</div>
                        <div class="text-gray-600">{{ $pageDetails['company_profile']['sys_customer_code'] }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Email</div>
                        <div class="text-gray-600">
                            <a href="#" class="text-gray-600 text-hover-primary">{{ $pageDetails['company_profile']['company_email'] }}</a>
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">เลขผู้เสียภาษีอากร</div>
                        <div class="text-gray-600">{{ $pageDetails['company_profile']['citizen_id'] }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">ที่ตั้ง</div>
                        <div class="text-gray-600">{{ $pageDetails['company_profile']['address_text'] }}
                            <!-- <br />Melbourne 3000 VIC
                                                <br />Australia -->
                        </div>
                        <!--begin::Details item-->
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_general">แก้ไขข้อมูล</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_advanced">จัดการบัญชี</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_customer_general" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>อัปเดทข้อมูล</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Form-->
                            <form class="form" action="#" id="frm_company_profile_1">

                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>รูปบริษัท</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ asset('assets/media/svg/files/blank-image.svg') }}');
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image input placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/avatars/sme.png') }})"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="file" name="company_img" id="company_img" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold mb-2 required">ชื่อบริษัท</label>
                                    <input type="text" class="form-control" placeholder="" id="company_name" name="company_name" value="{{ $pageDetails['company_profile']['company_name'] }}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-md-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span class="required">Email</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control" placeholder="" id="company_email" name="company_email" value="{{ $pageDetails['company_profile']['company_email'] }}" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span>เลขผู้เสียภาษีอากร</span>
                                            </label>
                                            <input type="email" class="form-control" placeholder="" id="citizen_id" name="citizen_id" value="" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="submit" id="frm_company_profile_1_submit" class="btn btn-light-primary">
                                        <span class="indicator-label">อัปเดท</span>
                                        <span class="indicator-progress">รอสักครู่...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div id="kt_ecommerce_customer_addresses" class="card-body pt-4 pb-5">
                            <form class="form" action="#" id="frm_company_profile_2">
                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="required form-label">ที่อยู่</label>
                                        <input type="text" class="form-control mb-2" id="address" name="address" value="{{ $pageDetails['company_profile']['address'] }}" />
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label">หมู่บ้าน/อาคาร</label>
                                        <input type="text" class="form-control mb-2" id="village_building" name="village_building" value="{{ $pageDetails['company_profile']['village_building'] }}" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label">หมู่ที่</label>
                                        <input type="text" class="form-control mb-2" id="village_no" name="village_no" value="{{ $pageDetails['company_profile']['village_no'] }}" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label">ตรอก/ซอย</label>
                                        <input type="text" class="form-control mb-2" id="alley" name="alley" value="{{ $pageDetails['company_profile']['alley'] }}" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label">ถนน</label>
                                        <input type="text" class="form-control mb-2" id="road" name="road" value="{{ $pageDetails['company_profile']['road'] }}" />
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label required">จังหวัด</label>
                                        <select class="form-select mb-2" id="province_id" name="province_id" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -">
                                            <option></option>
                                            @foreach ($pageDetails['province'] as $item)
                                                <option value="{{ $item['id'] }}" {{ $pageDetails['company_profile']['province_id'] == $item['id'] ? "selected" : "" }}>{{ $item['name_th'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label required">อำเภอ</label>
                                        <select class="form-select mb-2" id="amphure_id" name="amphure_id" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -" disabled>
                                            @if ($pageDetails['company_profile']['amphure_id'] != "")
                                                <option value="{{ $pageDetails['company_profile']['amphure_id'] }}">{{ $pageDetails['company_profile']['amphure_name'] }}</option>
                                            @else
                                                <option></option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label required">ตำบล</label>
                                        <select class="form-select mb-2" id="tambol_id" name="tambol_id" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -" disabled>
                                            @if ($pageDetails['company_profile']['tambol_id'] != "")
                                                <option value="{{ $pageDetails['company_profile']['tambol_id'] }}">{{ $pageDetails['company_profile']['tambol_name'] }}</option>
                                            @else
                                                <option></option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="form-label">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control mb-2" id="postal_code" name="postal_code" value="{{ $pageDetails['company_profile']['postal_code'] }}" disabled/>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="submit" id="frm_company_profile_2_submit" class="btn btn-light-primary">
                                        <span class="indicator-label">อัปเดท</span>
                                        <span class="indicator-progress">รอสักครู่...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Security Details</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                    <!--begin::Table body-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>Password</td>
                                            <td>******</td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                                    <i class="ki-duotone ki-pencil fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('modal-content')
    <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Password</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_password_form" class="form" action="#">
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold fs-6 mb-2">New Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="ki-duotone ki-eye-slash fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                        <i class="ki-duotone ki-eye d-none fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section('js-content')
    <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/transaction-history.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/add-auth-app.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/add-address.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/add-one-time-password.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/update-password.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/update-phone.js') }}"></script>1 --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/update-address.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom/apps/ecommerce/customers/details/update-profile.js') }}"></script> --}}
    <script src="{{ asset('assets/js-external/company-profile.js') }}"></script>
@endsection
