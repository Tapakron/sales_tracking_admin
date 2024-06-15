"use strict";
var KTModalNewCard = (function () {
    var modal, form, submitButton, cancelButton, validator;
    return {
        init: function () {
            modal = new bootstrap.Modal(document.querySelector("#modal_sele_target"));
            form = document.querySelector("#modal_sele_target_form");
            submitButton = document.getElementById("modal_sele_target_submit");
            cancelButton = document.getElementById("modal_sele_target_cancel");
            validator = FormValidation.formValidation(form, {
                fields: {
                    card_name: {
                        validators: {
                            notEmpty: {
                                message: "โปรดระบุ! เป้ายอดขาย"
                            }
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: "",
                    }),
                },
            });

            submitButton.addEventListener("click", function (e) {
                e.preventDefault();
                validator.validate().then(function (status) {
                    if (status === "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;
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
                                },
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
                            },
                        });
                    }
                });
            });

            cancelButton.addEventListener("click", function () {
                form.reset();
            });

            $(document).ready(function () {
                $("#kt_docs_repeater_basic").repeater({
                    initEmpty: false,
                    defaultValues: {
                        'kt_docs_repeater_basic[0].percent': "0",
                        'kt_docs_repeater_basic[0].start_sales': "0",
                        'kt_docs_repeater_basic[0].max_sales': "500"
                    },
                    show: function () {
                        $(this).slideDown();
                    },
                    hide: function (e) {
                        $(this).slideUp(e);
                    },
                });
            });
        }
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTModalNewCard.init();
});
