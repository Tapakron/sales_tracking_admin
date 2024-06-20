"use strict";

    var KTAppInvoicesCreate = function () {
        var initDatePickers = function() {
            var today = new Date();
            var formattedDate = today.getDate().toString().padStart(2, '0') + '/' + 
                                (today.getMonth() + 1).toString().padStart(2, '0') + '/' + 
                                today.getFullYear();
            
            $(document.querySelector('[name="invoice_date"]')).flatpickr({
                enableTime: !1,
                dateFormat: "d/m/Y"
            });
            $(document.querySelector('[name="invoice_due_date"]')).flatpickr({
                enableTime: !1,
                dateFormat: "d/m/Y"
            });

            return formattedDate;
        };

        var formatNumber = function(num) {
            return new Intl.NumberFormat('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(num);
        };

        var calculateTotals = function(itemsTable, grandTotalElement) {
            let grandTotal = 0;
            const rows = itemsTable.querySelectorAll('tr:not([data-kt-element="item-template"])');
            rows.forEach(row => {
                const quantityInput = row.querySelector('[data-kt-element="item-quantity"]');
                const priceInput = row.querySelector('[data-kt-element="item-price"]');
                const quantity = parseFloat(quantityInput.value) || 0;
                const price = parseFloat(priceInput.value) || 0;
                const total = quantity * price;

                row.querySelector('[data-kt-element="item-total"]').textContent = formatNumber(total);
                grandTotal += total;

                // Add event listener to set empty input to 0
                quantityInput.addEventListener('blur', function() {
                    if (!this.value) {
                        this.value = 0;
                    }
                });
                priceInput.addEventListener('blur', function() {
                    if (!this.value) {
                        this.value = 0;
                    }
                });
            });
            grandTotalElement.textContent = formatNumber(grandTotal);
        };

        var addItem = function(itemsTable, itemTemplate, grandTotalElement) {
            const newRow = itemTemplate.cloneNode(true);
            newRow.classList.remove('d-none');
            newRow.removeAttribute('data-kt-element');

            itemsTable.appendChild(newRow);

            $(newRow.querySelector('[data-kt-element="item-name"]')).select2({
                placeholder: "โปรดระบุ",
                allowClear: false,
                width: '100%'
            });

            $(newRow.querySelector('[data-kt-element="item-expiry"]')).flatpickr({
                enableTime: !1,
                dateFormat: "d/m/Y",
                defaultDate: initDatePickers()
            });

            newRow.querySelector('[data-kt-element="remove-item"]').addEventListener('click', function() {
                newRow.remove();
                calculateTotals(itemsTable, grandTotalElement);
            });

            newRow.querySelector('[data-kt-element="item-quantity"]').addEventListener('input', function() {
                calculateTotals(itemsTable, grandTotalElement);
            });
            newRow.querySelector('[data-kt-element="item-price"]').addEventListener('input', function() {
                calculateTotals(itemsTable, grandTotalElement);
            });

            calculateTotals(itemsTable, grandTotalElement);
        };

        var initFormRepeater = function() {
            const invoiceForm = document.getElementById('kt_invoice_form');
            const itemsTable = invoiceForm.querySelector('tbody');
            const itemTemplate = itemsTable.querySelector('tr[data-kt-element="item-template"]');
            const grandTotalElement = document.getElementById('grand-total');

            invoiceForm.querySelector('[data-kt-element="add-item"]').addEventListener('click', () => {
                addItem(itemsTable, itemTemplate, grandTotalElement);
            });

            // Initialize the first row
            addItem(itemsTable, itemTemplate, grandTotalElement);
        };

        return {
            init: function () {
                const defaultDate = initDatePickers();
                initFormRepeater(defaultDate);
            }
        }
    }();

    KTUtil.onDOMContentLoaded((function () {
        KTAppInvoicesCreate.init();
    }));