const form = document.getElementById("modal_sele_target_form");

var validator = FormValidation.formValidation(
    form, {
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
                eleValidClass: ""
            }),
            excluded: new FormValidation.plugins.Excluded({
                excluded: function (field, ele, eles) {
                    if (form.querySelector('[name="' + field + '"]') === null) {
                        return true;
                    }
                },
            }),
        }
    }
);

const addFields = function (index) {
    const namePrefix = "data[" + index + "]";

    validator.addField(namePrefix + "[percent]", {
        validators: {
            notEmpty: {
                message: "% ค่าคอม"
            }
        }
    });

    validator.addField(namePrefix + "[start_sales]", {
        validators: {

            notEmpty: {
                message: "ยอดขายเริ่มต้น"
            }
        }
    });

    validator.addField(namePrefix + "[max_sales]", {
        validators: {
            notEmpty: {
                message: "ยอดขายสูงสุด"
            }
        }
    });
};

const removeFields = function (index) {
    const namePrefix = "data[" + index + "]";

    validator.addField(namePrefix + "[percent]");
    validator.addField(namePrefix + "[start_sales]");
    validator.addField(namePrefix + "[max_sales]");
}



$(form).repeater({
    initEmpty: true,
    isFirstItemUndeletable: false,
    show: function () {
        $(this).slideDown();
        console.log('outer show');
        const index = $(this).closest("[data-repeater-item]").index();
        addFields(index);

    },
    hide: function (deleteElement) {
        if (confirm('คุณต้องการลบข้อมูลชุดนี้?')) {
            $(this).slideUp(deleteElement);
            console.log('outer delete');
        }
    }
});

addFields(0);


function populateForm(data) {
    let targetInput = document.querySelector("[name='card_name']");
    if (targetInput) {
        targetInput.value = data.targetValue;
    }

    var repeaterList = document.querySelector("[data-repeater-list='data']");
    if (repeaterList) {
        repeaterList.innerHTML = '';  // ล้างรายการที่มีอยู่
    }

    data.commissionItems.forEach(function (item) {
        var newItem = repeaterList.appendChild(document.createElement('div'));
        newItem.setAttribute('data-repeater-item', '');
        newItem.innerHTML = `
            <div class="fv-row form-group row mb-5">
                <div class="col-md-3">
                    <label class="form-label">% ค่าคอม</label>
                    <input type="text" class="form-control mb-2 mb-md-0" name="percent" value="${item.percent}" />
                </div>
                <div class="col-md-3">
                    <label class="form-label">ยอดขายเริ่มต้น</label>
                    <input type="number" class="form-control mb-2 mb-md-0" name="start_sales" value="${item.start_sales}" />
                </div>
                <div class="col-md-4">
                    <label class="form-label">ยอดขายสูงสุด</label>
                    <input type="number" class="form-control mb-2 mb-md-0" name="max_sales" value="${item.max_sales}" />
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                        <i class="ki-duotone ki-trash fs-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        </i> 
                    </a>
                </div>
            </div>
        `;
    });
    modal = new bootstrap.Modal(document.querySelector("#modal_sele_target"));
    modal.show();
    // modal.hide();
}
const modalToggleButton = document.getElementById("modal_toggle");
modalToggleButton.addEventListener("click", function (e) {
    let data = {
        targetValue: 50000,
        commissionItems: [{
                percent: 10,
                start_sales: 0,
                max_sales: 10000
            },
            {
                percent: 15,
                start_sales: 10001,
                max_sales: 20000
            },
            {
                percent: 20,
                start_sales: 20001,
                max_sales: 40000
            }
        ]
    };
    populateForm(data)
});

const submitButton = document.getElementById("modal_sele_target_submit");
submitButton.addEventListener("click", function (e) {
    e.preventDefault();

    if (validator) {
        validator.validate().then(function (status) {
            if (status == "Valid") {
                submitButton.setAttribute("data-kt-indicator", "on");
                submitButton.disabled = true;

                setTimeout(function () {
                    submitButton.removeAttribute("data-kt-indicator");
                    submitButton.disabled = false;

                    Swal.fire({
                        text: "Form has been successfully submitted!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }, 2000);
            }
        });
    }
});
