"use strict";
var customersListAll = function () {
    let t, e, table = document.getElementById("table-01");
    let createInvoice = () => {
        table.querySelectorAll('[data-btn-toggle="createInvoice"]').forEach((t => {

            t.addEventListener("click", (function (t) {
                t.preventDefault();
                console.log(APP_BASE_URL + "/invoices/create");
                let customer_id = $(this).data('customer-id');


                $("#customer_id").val(customer_id)
                $("#frm_redirect_page").submit()

                // $.ajax({
                //     type: "post",
                //     beforeSend: function (xhr) {
                //         xhr.setRequestHeader("XSRF-TOKEN",
                //             $('input:hidden[name="__RequestVerificationToken"]').val());
                //     },
                //     url: APP_BASE_URL + "/invoices/create",
                //     data: customer_id,
                //     success: function (response) {}
                // });
            }))
        }))
    };
    return {
        init: function () {
            createInvoice(),
                table && (table.querySelectorAll("tbody tr").forEach((e => {
                    const t = e.querySelectorAll("td"),
                        n = t[3].innerText.toLowerCase();
                    let r = 0,
                        o = "minutes";
                    n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                    const c = moment().subtract(r, o).format();
                    t[3].setAttribute("data-order", c);
                    // const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                    // t[5].setAttribute("data-order", l)
                })), (e = $(table).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    lengthChange: !1,
                    columnDefs: [{
                        orderable: !1,
                        targets: 0
                    }, {
                        orderable: !1,
                        targets: 4
                    }]
                })).on("draw", (function () {

                })), document.querySelector('[data-kt-ecommerce-order-filter="search"]').addEventListener("keyup", (function (t) {
                    e.search(t.target.value).draw()
                })))
        }
    }
}();
var table02 = function () {
    let e, table = document.getElementById("table-02");
    return {
        init: function () {
            table && (table.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                // const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                // t[5].setAttribute("data-order", l)
            })), (e = $(table).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 4
                }]
            })).on("draw", (function () {

            })), document.querySelector('[data-kt-ecommerce-order-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    customersListAll.init();
    table02.init();
}));
