"use strict";
var customersListAll = function () {
    let id, e, t, n, r, o = document.getElementById("table-01"),
        c = () => {
            o.querySelectorAll('[data-customers-all-order-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    r = n.querySelectorAll("td")[0].querySelectorAll("a")[1].innerText
                    id = n.querySelectorAll("td")[0].querySelectorAll("a")[1].getAttribute('data-customer-id');
                    console.log(id);
                    Swal.fire({
                        text: "ต้องการลบข้อมูลของ " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "ใช่, ลบเลย!",
                        cancelButtonText: "ไม่, ยกเลิก",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "/backend/admin/customers/delete/" + id,
                                success: function (response) {
                                    if (response.success) {
                                        if (response.success) {
                                            toastr.success('บันทึกข้อมูลสำเร็จ');
                                            e.row($(n)).remove().draw()
                                        } else {
                                            toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            a()
                                        }
                                    }
                                }
                            });
                        } else {

                        }
                    }))
                }))
            }))
        },
        m = () => {
            o.querySelectorAll('[data-customers-all-order-filter="move_row"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    r = n.querySelectorAll("td")[0].querySelectorAll("a")[1].innerText
                    id = n.querySelectorAll("td")[0].querySelectorAll("a")[1].getAttribute('data-customer-id');
                    Swal.fire({
                        text: "ต้องการย้ายข้อมูลของ " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "ใช่, ย้ายเลย!",
                        cancelButtonText: "ไม่, ยกเลิก",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "/backend/admin/customers/lost/" + id,
                                success: function (response) {
                                    if (response.success) {
                                        if (response.success) {
                                            toastr.success('บันทึกข้อมูลสำเร็จ');
                                            e.row($(n)).remove().draw()
                                        } else {
                                            toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            a()
                                        }
                                    }
                                }
                            });
                        } else {

                        }
                    }))
                }))
            }))
        };
    return {
        init: function () {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                t[5].setAttribute("data-order", l)
            })), (e = $(o).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 5
                }]
            })).on("draw", (function () {
                c(), m()
            })), document.querySelector('[data-customers-all-order-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })), c(), m())
        }
    }
}();
var customersListSucceed = function () {
    let id, e, t, n, r, o = document.getElementById("table-02")
    return {
        init: function () {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                const l = moment(t[3].innerHTML, "DD MMM YYYY, LT").format();
                t[3].setAttribute("data-order", l)
            })), (e = $(o).DataTable({
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
                
            })), document.querySelector('[data-customers-succeed-order-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })))
        }
    }
}();
var customersListLost = function () {
    let id, e, t, n, r, o = document.getElementById("table-03"),
        c = () => {
            o.querySelectorAll('[data-customers-lost-order-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    r = n.querySelectorAll("td")[0].querySelectorAll("a")[1].innerText
                    id = n.querySelectorAll("td")[0].querySelectorAll("a")[1].getAttribute('data-customer-id');
                    console.log(id);
                    Swal.fire({
                        text: "ต้องการลบข้อมูลของ " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "ใช่, ลบเลย!",
                        cancelButtonText: "ไม่, ยกเลิก",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "/backend/admin/customers/delete/" + id,
                                success: function (response) {
                                    if (response.success) {
                                        if (response.success) {
                                            toastr.success('บันทึกข้อมูลสำเร็จ');
                                            e.row($(n)).remove().draw()
                                        } else {
                                            toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            a()
                                        }
                                    }
                                }
                            });
                        } else {

                        }
                    }))
                }))
            }))
        },
        m = () => {
            o.querySelectorAll('[data-customers-lost-order-filter="move_row"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    r = n.querySelectorAll("td")[0].querySelectorAll("a")[1].innerText
                    id = n.querySelectorAll("td")[0].querySelectorAll("a")[1].getAttribute('data-customer-id');
                    console.log(id);
                    Swal.fire({
                        text: "ต้องการย้ายข้อมูลของ " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "ใช่, ย้ายเลย!",
                        cancelButtonText: "ไม่, ยกเลิก",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (t) {
                        if (t.value) {
                            $.ajax({
                                type: "get",
                                url: "/backend/admin/customers/lost/" + id,
                                success: function (response) {
                                    if (response.success) {
                                        if (response.success) {
                                            toastr.success('บันทึกข้อมูลสำเร็จ');
                                            e.row($(n)).remove().draw()
                                        } else {
                                            toastr.warning('บันทึกข้อมูลไม่สำเร็จ กรุณาลองอีกครั้ง');
                                            a()
                                        }
                                    }
                                }
                            });
                        } else {

                        }
                    }))
                }))
            }))
        };
    return {
        init: function () {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                t[5].setAttribute("data-order", l)
            })), (e = $(o).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 5
                }]
            })).on("draw", (function () {
                c(), m()
            })), document.querySelector('[data-customers-lost-order-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })), c(), m())
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    customersListAll.init();
    customersListSucceed.init();
    customersListLost.init();
}));
