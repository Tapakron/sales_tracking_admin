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
                        <input type="hidden" id="customer_id" name="customer_id" value="{{ $pageDetails['customer_profile']['customer_id'] }}">
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
                                    <input class="form-control form-control-transparent fw-bold pe-5" placeholder="โปรดระบุ" name="save_at" id="save_at" />
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
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row" data-bs-toggle="tooltip" data-bs-trigger="hover" title="วันที่ลูกค้าชำระเงิน">
                                <div class="fs-6 fw-bold text-gray-700 text-nowrap">วันที่ชำระ:</div>
                                <div class="position-relative d-flex align-items-center w-160px">
                                    <input class="form-control form-control-transparent fw-bold pe-5" placeholder="โปรดระบุ" name="payment_at" id="payment_at" />
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
                            <!--begin::Table wrapper-->
                            <div class="table-responsive mb-10">
                                <!--begin::Table-->
                                <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                            <th class="min-w-150px">รายการชำระ</th>
                                            <th class="min-w-150px">วันหมดอายุ</th>
                                            <th class="min-w-100px">จำนวน/user</th>
                                            <th class="min-w-150px">ราคาต่อหน่วย</th>
                                            <th class="min-w-100px text-end">รวม</th>
                                            <th class="min-w-50px text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Empty row template -->
                                        <tr data-kt-element="item-template" class="d-none">
                                            <td>
                                                <select class="form-select" data-kt-element="item-name" name="product_id[]">
                                                    <option value="">โปรดระบุ</option>
                                                    @if (Count($pageDetails['product']) > 0)                                                        
                                                        @foreach ($pageDetails['product'] as $item)
                                                            <option value="{{ $item["product_id"] }}">{{ $item["product_name_th"] }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" data-kt-element="item-expiry" name="expiration_at[]" placeholder="Pick a date"></td>
                                            <td><input type="number" class="form-control" data-kt-element="item-quantity" name="number_users[]" value="1" min="1"></td>
                                            <td><input type="number" class="form-control" data-kt-element="item-price" name="amount_unit[]" value="0" min="0"></td>
                                            <td class="text-end" data-kt-element="item-total">0</td>
                                            <td class="text-end">
                                                <input type="hidden" class="form-control" data-kt-element="total" name="total[]" value="">
                                                <button type="button" class="btn btn-sm btn-light-danger" data-kt-element="remove-item">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-end mb-5">
                                <button type="button" class="btn btn-light-primary" data-kt-element="add-item">เพิ่มรายการ</button>
                            </div>
                            <div class="mb-0">
                                <div class="d-flex justify-content-end">
                                    <div class="fs-6 fw-bold text-gray-700">
                                        รวมยอดสุทธิ: <span id="grand-total">0</span>
                                        <input type="hidden" class="form-control" name="sum_total" id="sum_total" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-5 mt-5 fv-row">
                                {{-- <label class="required fs-6 fw-semibold mb-2">รายละเอียดเพิ่มเติม</label> --}}
                                <textarea id="detail" name="detail" class="form-control form-control-solid" rows="5" placeholder="กรอกรายละเอียดเพิ่มเติม"></textarea>
                            </div>
                            <!--end::Notes-->
                        </div>

                        <div class="mb-0 mt-5">
                            <div class="fv-row mb-5">
                                <div class="dropzone" id="img_slip">
                                    <div class="dz-message needsclick">
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดสลิปเงิน</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 5MB, สูงสุดไม่เกิน 5 ไฟล์</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fv-row mb-5">
                                <div class="dropzone" id="img_receipt">
                                    <div class="dz-message needsclick">
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดใบเสร็จ</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 5MB, สูงสุดไม่เกิน 1 ไฟล์</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="pt-5">
                                <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="">
                                    <div class="fs-6 fw-bold text-gray-700 text-nowrap">เซลที่ดูแล :</div>
                                    <div class="position-relative d-flex align-items-center w-160px">
                                        <select class="form-select form-select-sm" name="sales_id" data-control="select2" data-placeholder="Select an option">
                                            @if (Count($pageDetails['sales']) > 0)
                                                @foreach ($pageDetails['sales'] as $item)
                                                    <option value="{{ $item['id'] }}" {{ $pageDetails['customer_profile']['sales_in_charge'] == $item['id'] ? 'selected' : '' }}> {{ $item['name'] }}</option>
                                                @endforeach
                                            @else
                                                <option value="">ไม่พบข้อมูล</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-5">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">ยกเลิก</button>
                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                    <span class="indicator-label">บันทึก</span>
                                    <span class="indicator-progress">รอสักครู่...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </form>
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
    <script src="{{ asset('assets/js-external/invoices/create.js') }}"></script>
    {{--  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const invoiceForm = document.getElementById("kt_invoice_form");
            const itemsTable = invoiceForm.querySelector('[data-kt-element="items"] tbody');
            const itemTemplate = itemsTable.querySelector('[data-kt-element="item-template"]');
            const addItemButton = invoiceForm.querySelector('[data-kt-element="add-item"]');
            const grandTotalElement = document.getElementById('grand-total');

            const formatNumber = num => new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(num);

            const calculateTotals = () => {
                let grandTotal = 0;
                const rows = itemsTable.querySelectorAll('tr:not([data-kt-element="item-template"])');
                rows.forEach(row => {
                    const quantity = parseFloat(row.querySelector('[data-kt-element="item-quantity"]').value);
                    const price = parseFloat(row.querySelector('[data-kt-element="item-price"]').value);
                    const total = quantity * price;
                    row.querySelector('[data-kt-element="item-total"]').textContent = formatNumber(total);
                    grandTotal += total;
                });
                grandTotalElement.textContent = formatNumber(grandTotal);
            };

            const addItem = () => {
                const newRow = itemTemplate.cloneNode(true);
                newRow.classList.remove('d-none');
                newRow.removeAttribute('data-kt-element');
                itemsTable.appendChild(newRow);
                newRow.querySelector('[data-kt-element="remove-item"]').addEventListener('click', () => {
                    newRow.remove();
                    calculateTotals();
                });

                newRow.querySelectorAll('input, select').forEach(input => {
                    input.addEventListener('input', calculateTotals);
                });

                $(newRow).find('[data-kt-element="item-name"]').select2();
                $(newRow).find('[data-kt-element="item-expiry"]').flatpickr();
            };

            addItemButton.addEventListener('click', addItem);

            calculateTotals();
        });
    </script>
    --}}
@endsection
