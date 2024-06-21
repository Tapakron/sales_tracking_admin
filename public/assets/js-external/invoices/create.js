"use strict";

var KTAppInvoicesCreate = function () {
    var imgSlip, imgReceipt;
    var message = "";

    var initDatePickers = function () {
        var today = new Date();
        var formattedDate = today.getDate().toString().padStart(2, '0') + '/' +
            (today.getMonth() + 1).toString().padStart(2, '0') + '/' +
            today.getFullYear();

        $(document.querySelector('[name="save_at"]')).flatpickr({
            enableTime: false,
            dateFormat: "d/m/Y"
        });
        $(document.querySelector('[name="payment_at"]')).flatpickr({
            enableTime: false,
            dateFormat: "d/m/Y"
        });

        return formattedDate;
    };

    var formatNumber = function (num) {
        return new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        }).format(num);
    };

    var calculateTotals = function (itemsTable, grandTotalElement) {
        let grandTotal = 0;
        const rows = itemsTable.querySelectorAll('tr:not([data-kt-element="item-template"])');
        rows.forEach(row => {
            const quantityInput = row.querySelector('[data-kt-element="item-quantity"]');
            const priceInput = row.querySelector('[data-kt-element="item-price"]');
            const quantity = parseFloat(quantityInput.value) || 0;
            const price = parseFloat(priceInput.value) || 0;
            const total = quantity * price;

            row.querySelector('[data-kt-element="item-total"]').textContent = formatNumber(total);
            grandTotal += total;

            // Add event listener to set empty input to 0
            quantityInput.addEventListener('blur', function () {
                if (!this.value) {
                    this.value = 0;
                }
            });
            priceInput.addEventListener('blur', function () {
                if (!this.value) {
                    this.value = 0;
                }
            });
        });
        grandTotalElement.textContent = formatNumber(grandTotal);
        $("#sum_total").val(formatNumber(grandTotal));
    };

    var addItem = function (itemsTable, itemTemplate, grandTotalElement) {
        const newRow = itemTemplate.cloneNode(true);
        newRow.classList.remove('d-none');
        newRow.removeAttribute('data-kt-element');

        itemsTable.appendChild(newRow);

        $(newRow.querySelector('[data-kt-element="item-name"]')).select2({
            placeholder: "โปรดระบุ",
            allowClear: false,
            width: '100%'
        });

        $(newRow.querySelector('[data-kt-element="item-expiry"]')).flatpickr({
            enableTime: false,
            dateFormat: "d/m/Y",
            defaultDate: initDatePickers()
        });

        const removeButton = newRow.querySelector('[data-kt-element="remove-item"]');
        if (itemsTable.rows.length > 2) {
            removeButton.addEventListener('click', function () {
                newRow.remove();
                calculateTotals(itemsTable, grandTotalElement);
            });
        } else {
            removeButton.classList.add('disabled'); // Disable remove button for first row
        }


        newRow.querySelector('[data-kt-element="remove-item"]').addEventListener('click', function () {
            newRow.remove();
            calculateTotals(itemsTable, grandTotalElement);
        });

        newRow.querySelector('[data-kt-element="item-quantity"]').addEventListener('input', function () {
            calculateTotals(itemsTable, grandTotalElement);
        });
        newRow.querySelector('[data-kt-element="item-price"]').addEventListener('input', function () {
            calculateTotals(itemsTable, grandTotalElement);
        });

        calculateTotals(itemsTable, grandTotalElement);
    };

    var initFormRepeater = function () {
        const invoiceForm = document.getElementById('kt_invoice_form');
        const itemsTable = invoiceForm.querySelector('tbody');
        const itemTemplate = itemsTable.querySelector('tr[data-kt-element="item-template"]');
        const grandTotalElement = document.getElementById('grand-total');

        invoiceForm.querySelector('[data-kt-element="add-item"]').addEventListener('click', () => {
            addItem(itemsTable, itemTemplate, grandTotalElement);
        });

        // Initialize the first row
        addItem(itemsTable, itemTemplate, grandTotalElement);
    };

    var initDropzone = function () {
        imgSlip = new Dropzone("#img_slip", {
            url: "https://keenthemes.com/scripts/void.php",
            maxFilesize: 5, // ขนาดไฟล์สูงสุด (MB)
            acceptedFiles: '.jpg,.png', // ประเภทไฟล์ที่รับ
            maxFiles: 5, // จำนวนไฟล์สูงสุดที่รับ
            addRemoveLinks: true, // เพิ่มลิงก์สำหรับลบไฟล์
            dictDefaultMessage: 'ลากและวางไฟล์ที่นี่ หรือคลิกเพื่อเลือกไฟล์',
            dictRemoveFile: 'ลบไฟล์',
            dictFileTooBig: 'ไฟล์ใหญ่เกินไป ({{filesize}}MB). ขนาดสูงสุด: {{maxFilesize}}MB.',
            dictInvalidFileType: 'ประเภทไฟล์ไม่ถูกต้อง',
            dictMaxFilesExceeded: 'ไม่สามารถอัปโหลดไฟล์มากกว่า {{maxFiles}} ไฟล์',
            accept: function (file, done) {
                if (file.name === "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            },
            init: function () {
                this.on("addedfile", function (file) {
                    if (this.files.length > this.options.maxFiles) {
                        this.removeFile(this.files[0]); // ลบไฟล์ตัวแรกที่ถูกอัปโหลดออก
                    }
                });

                this.on("maxfilesexceeded", function (file) {
                    alert("ไม่สามารถอัปโหลดไฟล์เกิน 5 ไฟล์ได้");
                    this.removeFile(file); // ลบไฟล์ที่เกินออก
                });
            }
        });
        imgReceipt = new Dropzone("#img_receipt", {
            url: "https://keenthemes.com/scripts/void.php",
            maxFilesize: 5, // ขนาดไฟล์สูงสุด (MB)
            acceptedFiles: '.jpg,.png', // ประเภทไฟล์ที่รับ
            maxFiles: 5, // จำนวนไฟล์สูงสุดที่รับ
            addRemoveLinks: true, // เพิ่มลิงก์สำหรับลบไฟล์
            dictDefaultMessage: 'ลากและวางไฟล์ที่นี่ หรือคลิกเพื่อเลือกไฟล์',
            dictRemoveFile: 'ลบไฟล์',
            dictFileTooBig: 'ไฟล์ใหญ่เกินไป ({{filesize}}MB). ขนาดสูงสุด: {{maxFilesize}}MB.',
            dictInvalidFileType: 'ประเภทไฟล์ไม่ถูกต้อง',
            dictMaxFilesExceeded: 'ไม่สามารถอัปโหลดไฟล์มากกว่า {{maxFiles}} ไฟล์',
            accept: function (file, done) {
                if (file.name === "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            },
            init: function () {
                this.on("addedfile", function (file) {
                    if (this.files.length > this.options.maxFiles) {
                        this.removeFile(this.files[0]); // ลบไฟล์ตัวแรกที่ถูกอัปโหลดออก
                    }
                });

                this.on("maxfilesexceeded", function (file) {
                    alert("ไม่สามารถอัปโหลดไฟล์เกิน 5 ไฟล์ได้");
                    this.removeFile(file); // ลบไฟล์ที่เกินออก
                });
            }
        });
    };

    var validateForm = function () {
        var isValid = true;
        var itemsTable = document.querySelector('#kt_invoice_form tbody');
        var rows = itemsTable.querySelectorAll('tr:not([data-kt-element="item-template"])');

        var invoiceDate = document.querySelector('#save_at');
        var invoiceDueDate = document.querySelector('#payment_at');

        // Validate each row
        rows.forEach(function (row) {
            var itemName = row.querySelector('[data-kt-element="item-name"]').value.trim();
            var expiryDate = row.querySelector('[data-kt-element="item-expiry"]').value.trim();
            var quantity = row.querySelector('[data-kt-element="item-quantity"]').value.trim();
            var price = row.querySelector('[data-kt-element="item-price"]').value.trim();

            if (itemName === '' || expiryDate === '' || quantity === '' || price === '') {
                isValid = false;
                message = "โปรดกรอกข้อมูลในตารางให้ครบถ้วน";
                return;
            }
        });

        // Validate Dropzone
        if (imgSlip.files.length === 0) {
            message = 'อัพโหลด "รูปสลิป" อย่างน้อยหนึ่งรูป';
            isValid = false;
        }

        if (invoiceDate.value === "") {
            message = 'โปรดระบุ! วันที่บันทึก';
            isValid = false;
        }

        if (invoiceDueDate.value === "") {
            message = 'โปรดระบุ! วันที่ชำระ';
            isValid = false;
        }

        return isValid;
    };

    var removeItemTemplateRow = function () {
        const itemTemplateRow = document.querySelector('tr[data-kt-element="item-template"]');
        if (itemTemplateRow) {
            itemTemplateRow.remove();
        }
    };

    return {
        init: function () {
            initFormRepeater();
            initDropzone();
            // Form submission handling
            $('#kt_modal_new_target_submit').on('click', function (event) {
                event.preventDefault();
                var isValid = validateForm();
                let frm = document.querySelector("#kt_invoice_form")
                let btn = frm.querySelector("#kt_modal_new_target_submit")
                if (isValid) {
                    btn.setAttribute("data-kt-indicator", "on");
                    btn.disabled = !0;

                    removeItemTemplateRow(); // Remove the item template row before submission

                    var formData = new FormData(document.getElementById('kt_invoice_form'));

                    // Append uploaded files to FormData
                    imgSlip.files.forEach(function (file) {
                        formData.append('img_slip', file);
                    });

                    imgReceipt.files.forEach(function (file) {
                        formData.append('img_receipt', file);
                    });

                    // for (var pair of formData.entries()) {
                    //     console.log(pair[0] + ', ' + pair[1]);
                    // }

                    $.ajax({
                        url: '/backend/payment/create',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    text: "บันทึกข้อมูลสำเร็จ!",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    showCancelButton: !0,
                                    allowEscapeKey: false,
                                    allowOutsideClick: false,
                                    confirmButtonText: "ตกลง",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then((function (n) {
                                    if (n.isConfirmed) {
                                        window.location.href = "";
                                    }
                                }))
                                btn.removeAttribute("data-kt-indicator")
                                btn.disabled = !1
                            } else {
                                toastr.warning(response.message);
                                btn.removeAttribute("data-kt-indicator")
                                btn.disabled = !1
                            }
                        },
                        error: function (xhr, status, error) {
                            alert('Form submission failed!');
                            btn.removeAttribute("data-kt-indicator")
                            btn.disabled = !1
                        }
                    });
                } else {
                    alert(message);
                }
            });
        }
    };
}();

// Initialize the function when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    KTAppInvoicesCreate.init();
});
