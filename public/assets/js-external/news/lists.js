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
                    subject: {
                        validators: {
                            notEmpty: {
                                message: "Ticket subject is required"
                            }
                        }
                    },
                    user: {
                        validators: {
                            notEmpty: {
                                message: "Ticket user is required"
                            }
                        }
                    },
                    due_date: {
                        validators: {
                            notEmpty: {
                                message: "Ticket due date is required"
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: "Target description is required"
                            }
                        }
                    },
                    "notifications[]": {
                        validators: {
                            notEmpty: {
                                message: "Please select at least one notifications method"
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
            }), t.addEventListener("click", (function (e) {
                e.preventDefault(), n && n.validate().then((function (e) {
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function () {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function (t) {
                            t.isConfirmed && o.hide()
                        }))
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.addEventListener("click", (function (t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function (t) {
                    t.value ? (i.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
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
    Daterangepicker.init()
    // $("#kt_daterangepicker_4").daterangepicker();
}));
