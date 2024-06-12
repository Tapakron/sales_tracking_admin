"use strict";
var KTUsersList = function () {
    var e, t, n, r, o = document.getElementById("kt_table_users"),
        c = () => {
            o.querySelectorAll('[data-kt-users-table-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[1].querySelectorAll("a")[1].innerText,
                        id = n.querySelectorAll("td")[1].querySelectorAll("a")[1].getAttribute('data-sale-id');
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
                                url: "/backend/admin/sales/delete/" + id,
                                success: function (response) {
                                    if (response.success) {
                                        // Swal.fire({
                                        //     text: "ลบข้อมูล " + r + " สำเร็จ!.",
                                        //     icon: "success",
                                        //     buttonsStyling: !1,
                                        //     confirmButtonText: "ปิด!",
                                        //     customClass: {
                                        //         confirmButton: "btn fw-bold btn-primary"
                                        //     }
                                        // }).then((function () {
                                        //     e.row($(n)).remove().draw()
                                        // })).then((function () {
                                        //     a()
                                        // })) 

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
        l = () => {
            const c = o.querySelectorAll('[type="checkbox"]');
            t = document.querySelector('[data-kt-user-table-toolbar="base"]'), n = document.querySelector('[data-kt-user-table-toolbar="selected"]'), r = document.querySelector('[data-kt-user-table-select="selected_count"]');
            const s = document.querySelector('[data-kt-user-table-select="delete_selected"]');
            c.forEach((e => {
                e.addEventListener("click", (function () {
                    setTimeout((function () {
                        a()
                    }), 50)
                }))
            })), s.addEventListener("click", (function () {
                Swal.fire({
                    text: "ต้องการลบข้อมูล sales ที่เลือกไว้?",
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
                    t.value ? Swal.fire({
                        text: "You have deleted all selected customers!.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    }).then((function () {
                        c.forEach((t => {
                            t.checked && e.row($(t.closest("tbody tr"))).remove().draw()
                        }));
                        o.querySelectorAll('[type="checkbox"]')[0].checked = !1
                    })).then((function () {
                        a(), l()
                    })) : "cancel" === t.dismiss && Swal.fire({
                        text: "Selected customers was not deleted.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })
                }))
            }))
        };
    const a = () => {
        const e = o.querySelectorAll('tbody [type="checkbox"]');
        let c = !1,
            l = 0;
        e.forEach((e => {
            e.checked && (c = !0, l++)
        })), c ? (r.innerHTML = l, t.classList.add("d-none"), n.classList.remove("d-none")) : (t.classList.remove("d-none"), n.classList.add("d-none"))
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
                    targets: 6
                }]
            })).on("draw", (function () {
                l(), c(), a()
            })), l(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function (t) {
                e.search(t.target.value).draw()
            })), c())
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersList.init();
}));
