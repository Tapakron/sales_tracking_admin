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
                <!--begin::Form-->
                <form action="" id="kt_invoice_form">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="วันที่บันทึกข้อมูลการชำระเงินลูกค้า">
                            <!--begin::Date-->
                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">วันที่บันทึก:</div>
                            <!--end::Date-->
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center w-160px">
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-transparent fw-bold pe-5" placeholder="05/05/2024 13:00" name="invoice_date"/>
                                <!--end::Datepicker-->
                                <!--begin::Icon-->
                                <i class="ki-outline ki-down fs-4 position-absolute end-0"></i>
                                <!--end::Icon-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover">
                            <span class="fs-2x fw-bold text-gray-800">ใบชำระเงิน</span>
                            <!-- <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="2021001" placehoder="..." /> -->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row" data-bs-toggle="tooltip" data-bs-trigger="hover" title="วันที่ลูกค้าชำระเงิน">
                            
                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">วันที่ชำระ:</div>
                            
                            <div class="position-relative d-flex align-items-center w-160px">
                                
                                <input class="form-control form-control-transparent fw-bold pe-5" placeholder="05/05/2024 13:00" name="invoice_due_date" />
                                
                                <i class="ki-outline ki-down fs-4 position-absolute end-0 ms-4"></i>
                                
                            </div>
                            
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-10"></div>
                    <!--end::Separator-->
                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Row-->
                        <div class="row gx-10 mb-5">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">วันหมดอายุ</label>
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="date" class="form-control form-control-solid pe-5" placeholder="05/05/2024" name="invoice_due_date" />
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Table wrapper-->
                        <div class="table-responsive mb-10">
                            <!--begin::Table-->
                            <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                        <th class="min-w-300px w-475px">รายการชำระ</th>
                                        <!-- <th class="min-w-100px w-100px">QTY</th> -->
                                        <th class="min-w-150px w-150px">จำนวนเงิน</th>
                                        <th class="min-w-100px w-150px text-end">รวม</th>
                                        <th class="min-w-75px w-75px text-end">Action</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                        <td class="pe-7">
                                            <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
                                        </td>
                                        <td class="ps-0">
                                            <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity" />
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price" />
                                        </td>
                                        <td class="pt-8 text-end">฿<span data-kt-element="total">0.00</span></td>
                                        <td class="pt-5 text-end">
                                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                                <i class="ki-outline ki-trash fs-3"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                                <!--begin::Table foot-->
                                <tfoot>
                                    <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                        <th class="text-primary">
                                            <button class="btn btn-link py-1" data-kt-element="add-item">เพิ่มรายการ</button>
                                        </th>
                                        <!-- <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                            <div class="d-flex flex-column align-items-start">
                                                <div class="fs-5">Subtotal</div>
                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add tax</button>
                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add discount</button>
                                            </div>
                                        </th>
                                        <th colspan="2" class="border-bottom border-bottom-dashed text-end">$
                                        <span data-kt-element="sub-total">0.00</span></th> -->
                                    </tr>
                                    <tr class="align-top fw-bold text-gray-700">
                                        <th></th>
                                        <th colspan="2" class="fs-4 ps-0">รวมยอดสุทธิ</th>
                                        <th colspan="2" class="text-end fs-4 text-nowrap">฿
                                        <span data-kt-element="grand-total">0.00</span></th>
                                    </tr>
                                </tfoot>
                                <!--end::Table foot-->
                            </table>
                        </div>
                        <!--end::Table-->
                        <!--begin::Item template-->
                        <table class="table d-none" data-kt-element="item-template">
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">
                                    <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
                                </td>
                                <td class="ps-0">
                                    <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity" />
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price" />
                                </td>
                                <td class="pt-8 text-end">฿
                                <span data-kt-element="total">0.00</span></td>
                                <td class="pt-5 text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <table class="table d-none" data-kt-element="empty-template">
                            <tr data-kt-element="empty">
                                <th colspan="5" class="text-muted text-center py-10">No items</th>
                            </tr>
                        </table>
                        <!--end::Item template-->
                        <!--begin::Notes-->
                        <div class="mb-0">
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดสลิปเงิน</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 200MB</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดใบเสร็จ</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 200MB</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Notes-->
                    </div>
                    <!--end::Wrapper-->
                </form>
                <!--end::Form-->
                <!--begin::Actions-->
                <div class="text-center pt-5">
                    <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">ยกเลิก</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">บันทึก</span>
                        <span class="indicator-progress">รอสักครู่...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
<script src="{{ asset("assets/js-external/invoices/create.js") }}"></script>
@endsection
