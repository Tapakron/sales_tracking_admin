"use strict";
var CustomersProfileForm1 = function () {
    let btn, Valid, frm;
    return {
        init: function () {
            frm = document.querySelector("#frm_customer_profile"),
                btn = frm.querySelector("#frm_customer_profile_submit"),
                Valid = FormValidation.formValidation(frm, {
                    fields: {
                        customer_name: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก ชื่อ-นามสกุล"
                                }
                            }
                        },
                        customer_tel: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดกรอก เบอร์โทร"
                                }
                            }
                        },
                        sales_in_charge: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ เซลส์ที่ดูแล"
                                }
                            }
                        },
                        favorite_product: {
                            validators: {
                                notEmpty: {
                                    message: "โปรดระบุ เซลส์ที่ดูแล"
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
                                        customer_img: $('#customer_img').prop('files')[0],                                        
                                        customer_name: $('#customer_name').val(),
                                        company_name: $('#company_name').val(),
                                        citizen_id: $('#citizen_id').val(),
                                        customer_tel: $('#customer_tel').val(),
                                        customer_email: $('#customer_email').val(),
                                        other_contact: $('#other_contact').val(),
                                        sales_in_charge: $('#sales_in_charge').val(),
                                        referrer: $('#referrer').val(),
                                        know_us_from: $('#know_us_from').val(),
                                        documents: $('#documents').val(),
                                        favorite_product: $('#favorite_product').val(),
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
                                    if (!frmData.customer_img) {
                                        frmData.customer_img = "";
                                    }
                                    Object.keys(frmData).forEach(function (key, index) {
                                        formData.append(key, frmData[key]);
                                    })

                                    $.ajax({
                                        url: '/backend/admin/customers/create',
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
    CustomersProfileForm1.init()
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
