let datatable;
const sourceData = () => {
    datatable = $("#datatable").DataTable({
        processing: true,
        serverSide: true,
        destroy: true,
        //ajax: `${configView.url}/outcome/data-table`, // memanggil route yang menampilkan data json
        ajax: {
            url: `${configView.url}/outcome/data-table`,
            type: "get",
            data: {
                category: configView.category,
            },
        },
        columns: [
            {
                // mengambil & menampilkan kolom sesuai tabel database
                data: "id",
            },
            {
                data: "category",
            },
            {
                data: "total",
            },
            {
                data: "created_at",
            },
            {
                data: "updated_at",
            },
            {
                data: "action",
            },
        ],
    });
};
sourceData();
datatable.on("click", "#delete_row", function (e) {
    let id = this.accessKey;
    $.ajax({
        type: "delete",
        url: `${configView.url}/outcome/data-table/delete`,
        data: {
            id: id,
        },
        success: function (response) {
            $(`#alertSuccess`).attr("hidden", false);
            $(`#alert-heading-success`).empty();
            Object.keys(response.message).forEach((element) => {
                $(`#alert-heading-success`).append(response.message[element]);
            });
            sourceData();
            getGraph();
            $(`#modalOutcome`).modal("hide");
            $(`#formOutcome`).trigger("reset");
            setTimeout(() => {
                $(`#alertSuccess`).attr("hidden", true);
            }, 4000);
        },
        error: function (response) {
            let objResp = response.responseJSON.message;
            $(`#alertDanger`).attr("hidden", false);
            $(`#alert-heading-danger`).empty();
            Object.keys(objResp).forEach((element) => {
                console.log(objResp[element]);
                $(`#alert-heading-danger`).append(
                    `<h4>${objResp[element]}</h4>`
                );
            });
            setTimeout(() => {
                $(`#alertDanger`).attr("hidden", true);
            }, 4000);
        },
    });
});
datatable.on("click", "#edit_row", function (e) {
    let id = this.accessKey;
    $.ajax({
        type: "get",
        url: `${configView.url}/outcome/data-table/edit`,
        data: {
            id: id,
        },
        success: function (response) {
            $(`#modalOutcome`).modal("show");
            $(`#input_id`).val(response.id);
            $(`#input_category`).val(response.category);
            $(`#input_total`).val(response.total);
        },
        error: function (response) {},
    });
});
