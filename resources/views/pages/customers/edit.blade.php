@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    {{-- !------------------------------------------------------- --}}
    <form id="frm_customer_profile" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo9/dist/apps/ecommerce/catalog/products.html">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>รุปภาพ</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>
                        .image-input-placeholder {
                            background-image: url({{ asset('assets/media/svg/files/blank-image.svg') }});
                        }

                        [data-bs-theme="dark"] .image-input-placeholder {
                            background-image: url({{ asset('assets/media/svg/files/blank-image-dark.svg') }});
                        }
                    </style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="customer_img" id="customer_img" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->

            <!--begin::Category & tags-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title required">
                        <h2>โปรแกรมที่สนใจ</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Select2-->
                    <div class="fv-row w-100 flex-md-root mb-2">
                        <select class="form-select mb-2" id="favorite_product" name="favorite_product" data-control="select2" data-hide-search="false" data-placeholder="- เลือก -" data-allow-clear="true" multiple="multiple">
                            <option></option>
                            @foreach ($pageDetails['product'] as $item)
                                <option value="{{ $item['product_id'] }}">{{ $item['product_name_th'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Select2-->
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category & tags-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">ข้อมูลเบื้องต้น</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">ที่อยู่</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content mt-5">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>กรอกรายละเอียด</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="required form-label">ชื่อ-นามสกุล</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="customer_name" name="customer_name" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ชื่อบริษัท</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="company_name" name="company_name" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">เลขประจำตัวประชาชน/ผู้เสียภาษี</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="citizen_id" name="citizen_id" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="required form-label">เบอร์โทร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="customer_tel" name="customer_tel" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">Email</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="customer_email" name="customer_email" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ช่องทางติดต่ออื่น ๆ</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="other_contact" name="other_contact" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label required">เซลส์ที่ดูแล</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" id="sales_in_charge" name="sales_in_charge" data-control="select2" data-hide-search="false" data-placeholder="- เลือก -">
                                                <option></option>
                                                @foreach ($pageDetails['sales'] as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">เซลส์ที่ดูแลรับผิดชอบลูกค้า</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ผู้แนะนำ</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="referrer" name="referrer" class="form-control mb-2" placeholder="กรอกรหัส หรือ ชื่อผู้แนะนำ" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">ระบุชื่อหรือรหัสผู้ที่แนะนำโปรแกรมให้ลูกค้ารู้จัก</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">รู้จักเราจาก</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="- เลือก -" id="know_us_from" name="know_us_from">
                                                <option></option>
                                                <option value="facebook">Facebook</option>
                                                <option value="email">Email</option>
                                                <option value="line">Line</option>
                                                <option value="youtube">Youtube</option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">ช่องทางที่ลูกค้ารู้จักโปรแกรมของเรา</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>ที่อยู่ปัจจุบัน</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ที่อยู่</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="address" name="address" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">หมู่บ้าน/อาคาร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="village_building" name="village_building" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">หมู่ที่</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="village_no" name="village_no" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ตรอก/ซอย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="alley" name="alley" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ถนน</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="road" name="road" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">จังหวัด</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="- เลือก -" id="province_id" name="province_id">
                                                <option></option>
                                                @foreach ($pageDetails['province'] as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name_th'] }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-2 fv-row">
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">อำเภอ</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="- เลือก -" id="amphure_id" name="amphure_id" disabled>
                                                <option></option>
                                                <option value="0">อำเภอ</option>
                                                <option value="1">อำเภอ</option>
                                                <option value="2">อำเภอ</option>
                                                <option value="3">อำเภอ</option>
                                            </select>
                                            <!--end::Select2-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">ตำบล</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="- เลือก -" id="tambol_id" name="tambol_id" disabled>
                                                <option></option>
                                                <option value="0">ตำบล</option>
                                                <option value="1">ตำบล</option>
                                                <option value="2">ตำบล</option>
                                                <option value="3">ตำบล</option>
                                            </select>
                                            <!--end::Select2-->

                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">รหัสไปรษณีย์</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="postal_code" name="postal_code" class="form-control mb-2" value="" disabled />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end:Tax-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ url("/dashboard") }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">ยกเลิก</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="frm_customer_profile_submit" class="btn btn-primary">
                    <span class="indicator-label">บันทึก</span>
                    <span class="indicator-progress">รอสักครู่...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
    {{-- !------------------------------------------------------- --}}
    {{-- @include('modal.original.kt_activities')
@include('modal.original.kt_drawer_chat')
@include('modal.original.kt_shopping_cart') --}}
@endsection

@section('js-content')
    <script src="{{ asset('assets/js-external/customers/add-profile.js') }}"></script>
@endsection