"use strict";
const KTModalNewCard = (function () {
    let modal, form, submitButton, cancelButton, validator;

    return {
        init: function () {
            modal = new bootstrap.Modal(document.querySelector("#modal_sele_target"));
            form = document.querySelector("#modal_sele_target_form");
            submitButton = document.getElementById("modal_sele_target_submit");
            cancelButton = document.getElementById("modal_sele_target_cancel");
            const modalToggleButton = document.getElementById("modal_toggle");

            validator = FormValidation.formValidation(form, {
                fields: {
                    card_name: {
                        validators: {
                            notEmpty: {
                                message: "โปรดระบุ! เป้ายอดขาย"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    }),
                    excluded: new FormValidation.plugins.Excluded({
                        excluded: function (field, ele, eles) {
                            return form.querySelector('[name="' + field + '"]') === null;
                        }
                    })
                }
            });

            function addFields(index) {
                const namePrefix = "data[" + index + "]";

                validator.addField(namePrefix + "[percent]", {
                    validators: {
                        notEmpty: {
                            message: "% ค่าคอม"
                        }
                    }
                });

                validator.addField(namePrefix + "[start_sales]", {
                    validators: {
                        notEmpty: {
                            message: "ยอดขายเริ่มต้น"
                        }
                    }
                });

                validator.addField(namePrefix + "[max_sales]", {
                    validators: {
                        notEmpty: {
                            message: "ยอดขายสูงสุด"
                        }
                    }
                });
            }

            function removeFields(index) {

                const namePrefix = "data[" + index + "]";
                
                validator.removeField(namePrefix + "[percent]");
                validator.removeField(namePrefix + "[start_sales]");
                validator.removeField(namePrefix + "[max_sales]");
            }

            submitButton.addEventListener("click", function (e) {
                e.preventDefault();
                validator.validate().then(function (status) {
                    if (status === "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;

                        const formData = {
                            targetValue: $('input[name="card_name"]').val(),
                            commissionItems: []
                        };

                        document.querySelectorAll("[data-repeater-item]").forEach(function (item, index) {
                            const percentInput = item.querySelector('input[name="data[' + index + '][percent]"]');
                            const startSalesInput = item.querySelector('input[name="data[' + index + '][start_sales]"]');
                            const maxSalesInput = item.querySelector('input[name="data[' + index + '][max_sales]"]');

                            if (percentInput && startSalesInput && maxSalesInput) {
                                const percent = percentInput.value;
                                const start_sales = startSalesInput.value;
                                const max_sales = maxSalesInput.value;

                                formData.commissionItems.push({
                                    percent: percent,
                                    start_sales: start_sales,
                                    max_sales: max_sales
                                });
                            } else {
                                console.error('Some input fields are missing or have incorrect values.');
                            }
                        });


                        console.log(formData);
                        // $.ajax({
                        //     url: '/your-backend-endpoint',
                        //     type: 'POST',
                        //     contentType: 'application/json',
                        //     data: JSON.stringify(formData),
                        //     success: function(response) {
                        //         alert('บันทึกข้อมูลสำเร็จ');
                        //     },
                        //     error: function(xhr, status, error) {
                        //         alert('มีข้อผิดพลาดในการบันทึกข้อมูล');
                        //     }
                        // });

                        setTimeout(function () {
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                            Swal.fire({
                                text: "บันทึกสำเร็จ!",
                                icon: "success",
                                buttonsStyling: false,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                confirmButtonText: "ตกลง",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });
                        }, 2000);
                    } else {
                        Swal.fire({
                            text: "มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.",
                            icon: "error",
                            buttonsStyling: false,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            confirmButtonText: "ตกลง",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });

            cancelButton.addEventListener("click", function () {
                modal.hide();
            });

            function populateForm(data) {
                const targetInput = document.querySelector("[name='card_name']");
                if (targetInput) {
                    targetInput.value = data.targetValue;
                }

                const repeaterList = document.querySelector("[data-repeater-list='data']");
                if (repeaterList) {
                    repeaterList.innerHTML = ''; // Clear existing items
                }

                data.commissionItems.forEach(function (item, index) {
                    const newItem = document.createElement('div');
                    newItem.setAttribute('data-repeater-item', '');
                    newItem.innerHTML = `
                        <div class="fv-row form-group row mb-5">
                <div class="col-md-3">
                    <label class="form-label">% ค่าคอม</label>
                    <input type="text" class="form-control mb-2 mb-md-0" name="data[${index}][percent]" value="${item.percent}" placeholder="0"/>
                </div>
                <div class="col-md-3">
                    <label class="form-label">ยอดขายเริ่มต้น</label>
                    <input type="number" class="form-control mb-2 mb-md-0" name="data[${index}][start_sales]" value="${item.start_sales}" placeholder="0"/>
                </div>
                <div class="col-md-4">
                    <label class="form-label">ยอดขายสูงสุด</label>
                    <input type="number" class="form-control mb-2 mb-md-0" name="data[${index}][max_sales]" value="${item.max_sales}" placeholder="0"/>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                        <i class="ki-duotone ki-trash fs-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        </i> 
                    </a>
                </div>
            </div>
                    `;
                    repeaterList.appendChild(newItem);

                    const namePrefix = "data[" + index + "]";

                    validator.addField(namePrefix + `[percent]`, {
                        validators: {
                            notEmpty: {
                                message: "% ค่าคอม"
                            }
                        }
                    });

                    validator.addField(namePrefix + `[start_sales]`, {
                        validators: {
                            notEmpty: {
                                message: "ยอดขายเริ่มต้น"
                            }
                        }
                    });

                    validator.addField(namePrefix + `[max_sales]`, {
                        validators: {
                            notEmpty: {
                                message: "ยอดขายสูงสุด"
                            }
                        }
                    });

                    // addFields(index);
                });

                
                modal.show();
            }

            modalToggleButton.addEventListener("click", function () {
                const data = {
                    targetValue: 50000,
                    commissionItems: [{
                            percent: 10,
                            start_sales: 0,
                            max_sales: 10000
                        },
                        {
                            percent: 15,
                            start_sales: 10001,
                            max_sales: 20000
                        },
                        {
                            percent: 20,
                            start_sales: 20001,
                            max_sales: 40000
                        }
                    ]
                };
                populateForm(data);
            });

            $(document).ready(function () {
                $(form).repeater({
                    initEmpty: true,
                    isFirstItemUndeletable: false,
                    show: function () {
                        $(this).slideDown();
                        const index = $(this).closest("[data-repeater-item]").index();
                        addFields(index);
                    },
                    hide: function (deleteElement) {
                        // if (confirm('คุณต้องการลบข้อมูลชุดนี้?')) {
                        //     $(this).slideUp(deleteElement);
                        //     const index = $(this).closest("[data-repeater-item]").index();
                        //     removeFields(index);
                        // }
                        $(this).slideUp(deleteElement);
                        const index = $(this).closest("[data-repeater-item]").index();
                        removeFields(index)
                    }
                });
            });
        }
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTModalNewCard.init();
});