"use strict";
var KTModalNewTicket = function () {
    var t, e, n, i, o, a;
    return {
        init: function () {
            (a = document.querySelector("#kt_modal_new_ticket")) && (o = new bootstrap.Modal(a), i = document.querySelector("#kt_modal_new_ticket_form"), t = document.getElementById("kt_modal_new_ticket_submit"), e = document.getElementById("kt_modal_new_ticket_cancel"), new Dropzone("#kt_modal_create_ticket_attachments", {
                url: "https://keenthemes.com/scripts/void.php",
                paramName: "file",
                maxFiles: 10,
                maxFilesize: 10,
                addRemoveLinks: !0,
                accept: function (t, e) {
                    "justinbieber.jpg" == t.name ? e("Naha, you don't.") : e()
                }
            }), $(i.querySelector('[name="due_date"]')).flatpickr({
                enableTime: !0,
                dateFormat: "d, M Y, H:i"
            }), $(i.querySelector('[name="user"]')).on("change", (function () {
                n.revalidateField("user")
            })), $(i.querySelector('[name="status"]')).on("change", (function () {
                n.revalidateField("status")
            })), n = FormValidation.formValidation(i, {
                fields: {
                    title: {
                        validators: {
                            notEmpty: {
                                message: "โปรดกรอก! หัวข้อข่าวสารที่ต้องการแจ้ง"
                            }
                        }
                    },
                    detail: {
                        validators: {
                            notEmpty: {
                                message: "โปรดกรอก! รายละเอียดข่าวสาร"
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function (e) {
                e.preventDefault(), n && n.validate().then((function (e) {
                    if ("Valid" == e) {


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
                                t.setAttribute("data-kt-indicator", "on");
                                t.disabled = !0;
                                let formData = new FormData();
                                let frmData = {
                                    image: $('#kt_modal_create_ticket_attachments').prop('files')[0],
                                    title: $('#title').val(),
                                    detail: $('#detail').val(),
                                }

                                if (!frmData.image) {
                                    frmData.image = "";
                                }
                                Object.keys(frmData).forEach(function (key, index) {
                                    formData.append(key, frmData[key]);
                                })
                                console.log(formData);

                                // $.ajax({
                                //     url: '/backend/admin/sales/create',
                                //     type: 'POST',
                                //     data: formData,
                                //     cache: false,
                                //     contentType: false,
                                //     processData: false,
                                //     success: function (response) {
                                //         if (response.success) {
                                //             toastr.success('บันทึกข้อมูลสำเร็จ');
                                //             setTimeout(() => {
                                //                 window.location.reload();
                                //             }, 1000);
                                //         } else {
                                //             toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                //         }
                                //         btn.removeAttribute("data-kt-indicator")
                                //         btn.disabled = !1
                                //     },
                                //     error: function () {

                                //     }
                                // });
                            }
                        }))

                        // Swal.fire({
                        //     text: "Form has been successfully submitted!",
                        //     icon: "success",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok, got it!",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // }).then((function (t) {
                        //     t.removeAttribute("data-kt-indicator");
                        //     t.disabled = !1;

                        //     t.isConfirmed && o.hide()
                        // }))
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }
                }))
            })), e.addEventListener("click", (function (t) {
                i.reset();
                o.hide();
            })))
        }
    }
}();

var BtnEvents = function () {
    let r, id, o = document.getElementById("news"),
        edit = () => {
            o.querySelectorAll('[data-btn-toggle="edit"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("div");
                    r = n.querySelectorAll("a")[0].innerText
                    id = n.getAttribute('data-new-id');
                    console.log(id);
                }))
            }))
        },
        del = () => {
            o.querySelectorAll('[data-btn-toggle="delete"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("div");
                    r = n.querySelectorAll("a")[0].innerText
                    id = n.getAttribute('data-new-id');
                    console.log(id);
                }))
            }))
        };
    return {
        init: function () {
            edit(), del()
        }
    }
}();
var Daterangepicker = function () {
    let start, end
    return {
        init: function () {
            // var start = moment().subtract(29, "days");
            // var end = moment();
            start = moment($("#kt_daterangepicker_4").data("date-start"));
            end = moment($("#kt_daterangepicker_4").data("date-end"));

            function cb(start, end) {
                $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
            }

            $("#kt_daterangepicker_4").daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    "Today": [moment(), moment()],
                    "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                },
                locale: {
                    format: 'DD/MM/YYYY'
                }
            }, cb);

            cb(start, end);
        }
    }
}();

KTUtil.onDOMContentLoaded((function () {
    KTModalNewTicket.init()
    BtnEvents.init()
    Daterangepicker.init()
    // $("#kt_daterangepicker_4").daterangepicker();
}));
