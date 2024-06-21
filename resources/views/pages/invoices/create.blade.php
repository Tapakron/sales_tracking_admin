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
                                    <input class="form-control form-control-transparent fw-bold pe-5" placeholder="05/05/2024 13:00" name="invoice_date" id="invoice_date" />
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
                                    <input class="form-control form-control-transparent fw-bold pe-5" placeholder="05/05/2024 13:00" name="invoice_due_date" id="invoice_due_date" />
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
                                                <select class="form-select" data-kt-element="item-name" name="product[]">
                                                    <option value="">โปรดระบุ</option>
                                                    <option value="นายช่าง">นายช่าง</option>
                                                    <option value="บุคคล">บุคคล</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" data-kt-element="item-expiry" name="date_expiry[]" placeholder="Pick a date"></td>
                                            <td><input type="number" class="form-control" data-kt-element="item-quantity" name="users[]" value="1" min="1"></td>
                                            <td><input type="number" class="form-control" data-kt-element="item-price" name="price[]" value="0" min="0"></td>
                                            <td class="text-end" data-kt-element="item-total">0
                                                <input type="hidden" class="form-control" data-kt-element="item-total" name="total[]" value="">
                                            </td>
                                            <td class="text-end">
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
                            <!--end::Notes-->
                        </div>

                        <div class="mb-0 mt-5">
                            <div class="fv-row mb-5">
                                <div class="dropzone" id="payment_slip_img">
                                    <div class="dz-message needsclick">
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดสลิปเงิน</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 200MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fv-row mb-5">
                                <div class="dropzone" id="payment_receipt_img">
                                    <div class="dz-message needsclick">
                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">อัปโหลดใบเสร็จ</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">ขนาดไฟล์ไม่เกิน 200MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="text-center pt-5">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">ยกเลิก</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">บันทึก</span>
                            <span class="indicator-progress">รอสักครู่...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>

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
