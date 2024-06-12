"use strict";
var SaleProfileForm1 = function () {
    let btn, Valid, frm;
    return {
        init: function () {
            frm = document.querySelector("#frm_sale_profile"),
                btn = frm.querySelector("#frm_sale_profile_submit"),
                Valid = FormValidation.formValidation(frm, {
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
                        },
                        username: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก รหัส Sales"
                                }
                            }
                        },
                        sales_level: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ ระดับ Sales"
                                }
                            }
                        },
                        tel: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก เบอร์โทร"
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
                                        user_id : $('#frm_sale_profile').data("userid"),
                                        user_img: $('#user_img').prop('files')[0],
                                        name : $('#name').val(),
                                        username : $('#username').val(),
                                        citizen_id : $('#citizen_id').val(),
                                        sales_level : $('#sales_level').val(),
                                        tel : $('#tel').val(),
                                        email : $('#email').val(),
                                        address : $('#address').val(),
                                        village_building : $('#village_building').val(),
                                        village_no : $('#village_no').val(),
                                        alley : $('#alley').val(),
                                        road : $('#road').val(),
                                        province_id : $('#province_id').val(),
                                        amphure_id : $('#amphure_id').val(),
                                        tambol_id : $('#tambol_id').val(),
                                        postal_code : $('#postal_code').val(),
                                    }
                                    if (!frmData.user_img) {
                                        frmData.user_img = "";
                                    }
                                    Object.keys(frmData).forEach(function (key, index) {
                                        formData.append(key, frmData[key]);
                                    })

                                    $.ajax({
                                        url: '/backend/admin/sales/update',
                                        type: 'POST',
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function (response) {
                                            if (response.success) {
                                                toastr.success('บันทึกข้อมูลสำเร็จ');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 1000);
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
KTUtil.onDOMContentLoaded((function () {
    SaleProfileForm1.init()
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
