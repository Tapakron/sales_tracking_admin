"use strict";
var ComapanyProfileForm1 = function () {
    let btn, Valid, frm;
    return {
        init: function () {
            frm = document.querySelector("#frm_company_profile_1"),
                btn = frm.querySelector("#frm_company_profile_1_submit"),
                Valid = FormValidation.formValidation(frm, {
                    fields: {
                        company_name: {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
                        },
                        company_email: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก Email"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }), btn.addEventListener("click", (function (frm) {
                    frm.preventDefault(), Valid && Valid.validate().then((function (Valid) {
                        if ("Valid" == Valid) {
                            Swal.fire({
                                text: "บันทึกข้อมูล! โปรดกดปุ่มบันทึกอีกครั้ง",
                                icon: "info",
                                buttonsStyling: !1,
                                showCancelButton: !0,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                confirmButtonText: "บันทึก",
                                cancelButtonText: "ยกเลิก",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function (n) {
                                if (n.isConfirmed) {
                                    btn.setAttribute("data-kt-indicator", "on");
                                    btn.disabled = !0;
                                    let formData = new FormData();
                                    let frmData = {
                                        company_img: $('#company_img').prop('files')[0],
                                        company_name: $('#company_name').val(),
                                        company_email: $('#company_email').val(),
                                        citizen_id: $('#citizen_id').val(),
                                    }
                                    if (!frmData.company_img) {
                                        frmData.company_img = "";
                                    }
                                    Object.keys(frmData).forEach(function (key, index) {
                                        formData.append(key, frmData[key]);
                                    })

                                    $.ajax({
                                        url: '/backend/admin/update_profile',
                                        type: 'POST',
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function (response) {
                                            if (response.success) {
                                                toastr.success('บันทึกข้อมูลสำเร็จ');
                                            } else {
                                                toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            }
                                            btn.removeAttribute("data-kt-indicator")
                                            btn.disabled = !1
                                        },
                                        error: function () {

                                        }
                                    });
                                }
                            }))
                        } else {

                        }
                    }))
                }))
        }
    }
}();

var ComapanyProfileForm2 = function () {
    let btn, Valid, frm;
    return {
        init: function () {
            frm = document.querySelector("#frm_company_profile_2"),
                btn = frm.querySelector("#frm_company_profile_2_submit"),
                Valid = FormValidation.formValidation(frm, {
                    fields: {
                        address: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก ที่อยู่"
                                }
                            }
                        },
                        province_id: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ จังหวัด"
                                }
                            }
                        },
                        amphure_id: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ อำเภอ"
                                }
                            }
                        },
                        tambol_id: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ ตำบล"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }), btn.addEventListener("click", (function (frm) {
                    frm.preventDefault(), Valid && Valid.validate().then((function (Valid) {
                        if ("Valid" == Valid) {
                            Swal.fire({
                                text: "บันทึกข้อมูล! โปรดกดปุ่มบันทึกอีกครั้ง",
                                icon: "info",
                                buttonsStyling: !1,
                                showCancelButton: !0,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                confirmButtonText: "บันทึก",
                                cancelButtonText: "ยกเลิก",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function (n) {
                                if (n.isConfirmed) {
                                    btn.setAttribute("data-kt-indicator", "on");
                                    btn.disabled = !0;

                                    let frmData = {
                                        address: $('#address').val(),
                                        village_building: $('#village_building').val(),
                                        village_no: $('#village_no').val(),
                                        alley: $('#alley').val(),
                                        road: $('#road').val(),
                                        province_id: $('#province_id').val(),
                                        amphure_id: $('#amphure_id').val(),
                                        tambol_id: $('#tambol_id').val(),
                                        postal_code: $('#postal_code').val(),
                                    }

                                    $.ajax({
                                        url: '/backend/admin/update_address',
                                        type: 'POST',
                                        data: frmData,
                                        success: function (response) {
                                            if (response.success) {
                                                toastr.success('บันทึกข้อมูลสำเร็จ');
                                            } else {
                                                toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            }
                                            btn.removeAttribute("data-kt-indicator")
                                            btn.disabled = !1
                                        },
                                        error: function () {

                                        }
                                    });
                                }
                            }))
                        } else {

                        }
                    }))
                }))
        }
    }
}();
var UpdatePassword = function () {
    const t = document.getElementById("modal_update_password"),
        e = t.querySelector("#modal_update_password_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        old_password: {
                            validators: {
                                notEmpty: {
                                    message: "ระบุรหัสผ่านเดิม"
                                }
                            }
                        },
                        new_password: {
                            validators: {
                                notEmpty: {
                                    message: "ระบุรหัสผ่านใหม่"
                                },
                                callback: {
                                    message: "Please enter valid password",
                                    callback: function (t) {
                                        if (t.value.length > 0) return validatePassword()
                                    }
                                }
                            }
                        },
                        comfirm_password: {
                            validators: {
                                notEmpty: {
                                    message: "ยืนยันรหัสผ่านใหม่"
                                },
                                identical: {
                                    compare: function () {
                                        return e.querySelector('[name="new_password"]').value
                                    },
                                    message: "รหัสผ่านใหม่ไม่ตรงกัน!"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });
                t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault()
                    e.reset();
                    n.hide();
                }));
                const a = t.querySelector('[data-kt-users-modal-action="submit"]');
                a.addEventListener("click", (function (t) {
                    t.preventDefault(), o && o.validate().then((function (t) {
                        if ("Valid" == t) {
                            a.setAttribute("data-kt-indicator", "on");
                            a.disabled = !0;
                            Swal.fire({
                                text: "บันทึกข้อมูล! โปรดกดปุ่มบันทึกอีกครั้ง",
                                icon: "info",
                                buttonsStyling: !1,
                                showCancelButton: !0,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                confirmButtonText: "บันทึก",
                                cancelButtonText: "ยกเลิก",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function (v) {

                                if (v.isConfirmed) {
                                    a.removeAttribute("data-kt-indicator");
                                    a.disabled = !1;

                                    let frmData = {
                                        old_password: $('#old_password').val(),
                                        new_password: $('#new_password').val(),
                                    }

                                    $.ajax({
                                        url: '/backend/changepassword',
                                        type: 'POST',
                                        data: frmData,
                                        success: function (response) {
                                            if (response.success) {
                                                toastr.success('บันทึกข้อมูลสำเร็จ');
                                            } else {
                                                toastr.warning(response.message);
                                            }
                                            console.log(t);
                                            e.reset();
                                            n.hide();
                                        },
                                        error: function () {

                                        }
                                    });
                                } else {
                                    a.removeAttribute("data-kt-indicator"); a.disabled = !1;
                                }
                            }))
                        } else {
                            // t.isConfirmed && n.hide()
                        }
                    }))
                }))
            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    ComapanyProfileForm1.init()
    ComapanyProfileForm2.init()
    UpdatePassword.init()
    $('#province_id').change(function (event) {
        if ($('#province_id').val() != "") {
            var province_id = $('#province_id').val();
            $.ajax({
                type: "get",
                url: "/api/datamaster/amphure/fetch/" + province_id,
                // data: {province_id:province_id},
                success: function (res) {
                    if (res.success) {
                        $('#amphure_id').prop('disabled', false);
                        $('#tambol_id').prop('disabled', false);
                        $('#postal_code').prop('disabled', false);
                        document.getElementById('amphure_id').options.length = 0;
                        let results = [];
                        // results.push({
                        // 	id:"",
                        // 	text:"โปรดระบุ"
                        // })
                        res.data.forEach(function (item) {
                            console.log(item);
                            results.push({
                                id: item.id,
                                text: item.name_th,
                                item: item
                            })
                        })
                        $("#amphure_id").select2({
                            data: results
                        }).trigger('change');
                    }
                }
            });
        } else {
            $('#postal_code').val("");
            document.getElementById('amphure_id').options.length = 0;
            var $amphure_id = $("<option></option>").val("").text("โปรดระบุ")
            $("#amphure_id").append($amphure_id).trigger('change');
        }
    });
    $('#amphure_id').change(function (event) {
        if ($('#amphure_id').val() != "") {
            var amphure_id = $('#amphure_id').val();
            $.ajax({
                type: "get",
                url: "/api/datamaster/tambol/fetch/" + amphure_id,
                // data: {amphure_id:amphure_id},
                success: function (res) {
                    if (res.success) {
                        document.getElementById('tambol_id').options.length = 0;
                        let results = $.map(res.data, function (item) {
                            return {
                                id: item.id,
                                text: item.name_th,
                                item: item
                            }
                        })
                        $("#tambol_id").select2({
                                data: results
                            })
                            .on('select2:select', function (e) {
                                if (e.params.data.item.zip_code && e.params.data.item.zip_code != "0") {
                                    $('#postal_code').val(e.params.data.item.zip_code);
                                } else {
                                    $('#postal_code').val("");
                                }
                            })
                            .trigger('change');
                        $('#postal_code').val(results[0]['item']['zip_code'])
                    }
                }
            });
        } else {
            document.getElementById('tambol_id').options.length = 0;
            var $tambol_id = $("<option></option>").val("").text("โปรดระบุ")
            $("#tambol_id").append($tambol_id).trigger('change');
        }
    });
}));
