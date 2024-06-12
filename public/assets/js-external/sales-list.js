"use strict";
var FetchAllSalesList = function () {
    let tbodyString, data;
    return {
        init: function () {
            $.ajax({
                type: "get",
                url: "/api/admin/sales/fetch",
                success: function (response) {
                    console.log(response.data);
                    if (response.success) {
                        if (response.data.length > 0) {
                            data.forEach(function (item, index) {
                                
                            });
                        }
                    }
                }
            });
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    FetchAllSalesList.init();
}));
