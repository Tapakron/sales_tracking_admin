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
    initEmpty: false,
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
