"use strict";
var KTModalNewTicket = function () {
    var t, e, n, i, o, a, r, id;
    var myDropzone;
    let news = document.getElementById("news");
    let modal = document.getElementById("#kt_modal_new_ticket");
    let edit = () => {
        news.querySelectorAll('[data-btn-toggle="edit"]').forEach((t => {
            t.addEventListener("click", (function (t) {
                t.preventDefault();
                const n = t.target.closest("div");
                r = n.querySelectorAll("a")[0].innerText
                id = n.getAttribute('data-new-id');


                $.ajax({
                    type: "get",
                    url: "/api/admin/news/fetch/" + id,
                    success: function (response) {
                        if (response.success) {
                            let data = response.data;
                            $('#title').val(data.title);
                            $('#detail').val(data.detail);

                            // เคลียร์ไฟล์เก่าที่อยู่ใน Dropzone
                            myDropzone.removeAllFiles(true);

                            // แสดงไฟล์จาก backend
                            if (data.image) {
                                let mockFile = {
                                    name: data.image.split('/').pop(),
                                    size: 12345
                                }; // คุณสามารถใช้ขนาดไฟล์จริงได้หากมี
                                myDropzone.emit("addedfile", mockFile);
                                myDropzone.emit("thumbnail", mockFile, data.image);
                                myDropzone.emit("complete", mockFile);
                                myDropzone.files.push(mockFile);
                            }

                            $('#kt_modal_new_ticket_form').data('newid', data.news_id)
                            $('#kt_modal_new_ticket_form').data('frmstatus', 'update')
                            // แสดง modal
                            o.show();
                        }
                    }
                });

            }))
        }));
    };
    let del = () => {
        news.querySelectorAll('[data-btn-toggle="delete"]').forEach((t => {
            t.addEventListener("click", (function (t) {
                t.preventDefault();
                const n = t.target.closest("div");
                r = n.querySelectorAll("a")[0].innerText
                id = n.getAttribute('data-new-id');

                Swal.fire({
                    text: "ลบข้อมูล! โปรดกดปุ่มบันทึกอีกครั้ง",
                    icon: "warning",
                    buttonsStyling: !1,
                    showCancelButton: !0,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    confirmButtonText: "ลบ",
                    cancelButtonText: "ยกเลิก",
                    customClass: {
                        confirmButton: "btn btn-danger",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function (n) {
                    if (n.isConfirmed) {
                        $.ajax({
                            type: "get",
                            url: "/backend/admin/news/delete/" + id,
                            success: function (response) {
                                if (response.success) {
                                    toastr.success('ลบข้อมูลสำเร็จ');
                                    window.location.reload();
                                } else {
                                    toastr.warning('ลบข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                }
                            }
                        });
                    }
                }))
            }))
        }))
    };

    return {
        init: function () {
            edit(), del(),
                (a = document.querySelector("#kt_modal_new_ticket")) && (o = new bootstrap.Modal(a), i = document.querySelector("#kt_modal_new_ticket_form"), t = document.getElementById("kt_modal_new_ticket_submit"), e = document.getElementById("kt_modal_new_ticket_cancel"), myDropzone = new Dropzone("#kt_modal_create_ticket_attachments", {
                    url: "https://keenthemes.com/scripts/void.php",
                    paramName: "file",
                    maxFiles: 1,
                    maxFilesize: 5,
                    addRemoveLinks: true,
                    autoProcessQueue: false,
                    dictDefaultMessage: "อัปโหลดรูปภาพ",
                    dictFallbackMessage: "เบราว์เซอร์ของคุณไม่รองรับการอัปโหลดไฟล์ด้วยการลากและวาง",
                    dictFileTooBig: "ไฟล์มีขนาดใหญ่เกินไป ({{filesize}}MB). ขนาดสูงสุด: {{maxFilesize}}MB.",
                    dictInvalidFileType: "ไฟล์ประเภทนี้ไม่รองรับ",
                    dictResponseError: "เซิร์ฟเวอร์ตอบกลับด้วยรหัส {{statusCode}}.",
                    dictCancelUpload: "ยกเลิกการอัปโหลด",
                    dictCancelUploadConfirmation: "คุณแน่ใจหรือไม่ว่าต้องการยกเลิกการอัปโหลดนี้?",
                    dictRemoveFile: "ลบไฟล์",
                    dictMaxFilesExceeded: "คุณสามารถอัปโหลดไฟล์ได้สูงสุด {{maxFiles}} ไฟล์เท่านั้น.",
                    accept: function (file, done) {
                        if (file.name === "justinbieber.jpg") {
                            done("Naha, you don't.");
                        } else {
                            done();
                        }
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
                }), 
                t.addEventListener("click", (function (e) {
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
                                    let formData = new FormData(i);

                                    // ดึงไฟล์จาก Dropzone
                                    let dropzoneFiles = Dropzone.forElement("#kt_modal_create_ticket_attachments").getAcceptedFiles();
                                    if (dropzoneFiles.length > 0) {
                                        formData.append("image", dropzoneFiles[0]);
                                    }

                                    let frmStatus = $('#kt_modal_new_ticket_form').data('frmstatus')
                                    let url = "";
                                    if (frmStatus != "update") {
                                        url = "/backend/admin/news/create";
                                    } else {
                                        formData.append("news_id", $('#kt_modal_new_ticket_form').data('newid'));
                                        url = "/backend/admin/news/update";
                                    }

                                    $.ajax({
                                        url: url,
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
                                            i.reset();
                                            o.hide();
                                            t.removeAttribute("data-kt-indicator")
                                            t.disabled = !1
                                        },
                                        error: function () {
                                            toastr.error('เกิดข้อผิดพลาดในการบันทึกข้อมูล');
                                            t.removeAttribute("data-kt-indicator")
                                            t.disabled = !1
                                        }
                                    });
                                }
                            }))

                        } else {
                            Swal.fire({
                                text: "โปรดกรอกข้อมูลให้ครบถ้วน",
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
            a.addEventListener('hidden.bs.modal', function () {
                $('#kt_modal_new_ticket_form').data('newid', '')
                $('#kt_modal_new_ticket_form').data('frmstatus', '')
                i.reset();
                myDropzone.removeAllFiles(true); // ลบไฟล์จาก Dropzone
            });
        }
    }
}();

// var BtnEvents = function () {
//     let r, id, o = document.getElementById("news"),
//         modal = document.getElementById("#kt_modal_new_ticket"),
//         del = () => {
//             o.querySelectorAll('[data-btn-toggle="delete"]').forEach((t => {
//                 t.addEventListener("click", (function (t) {
//                     t.preventDefault();
//                     const n = t.target.closest("div");
//                     r = n.querySelectorAll("a")[0].innerText
//                     id = n.getAttribute('data-new-id');
//                     
//                 }))
//             }))
//         };
//     return {
//         init: function () {
//             del()
//         }
//     }
// }();

var Daterangepicker = function () {
    let start, end
    return {
        init: function () {
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
    KTModalNewTicket.init();
    // BtnEvents.init();
    Daterangepicker.init();
}));
