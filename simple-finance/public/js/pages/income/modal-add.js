function getModalAdd() {
    $(`#modalForm`).trigger("reset");
    $(`#modalAdd`).modal();
    selectCategory();
    $(`#submitForm`).on("click", function(e) {
        e.stopImmediatePropagation();
        modalForm();
    })
}

function modalForm() {
    let form = $(`#modalForm`).serialize();
    $.ajax({
        type: "get",
        url: `${configView.url}/income/store`,
        data: form,
        success: function(response) {
            table.ajax.reload(false, null);
            $(`#modalAdd`).modal("hide");
            alertMessageSuccess();
            Object.keys(response).forEach(element => {
                $('#messageSuccess').append(`${response[element]}<br>`);
            });

            return false;
        },
        error: function(response) {
            alertMessageError();
            let messages = response.responseJSON.message;
            Object.keys(messages).forEach(element => {
                $('#messageError').append(`${messages[element]}<br>`);
            });
        }
    })
}

function selectCategory() {
    $(`#category_id`).empty();
    $.ajax({
        type: "get",
        url: `${configView.url}/income/category`,
        success: function(response) {
            $('#category_id').append(
                `<option disabled selected>
                        Select Category
                    </option>`
            )
            Object.keys(response).forEach(element => {
                $('#category_id').append(
                    `<option value="${response[element].id}">
                            ${response[element].name}
                        </option>`
                )
            })
        },
        error: function(response) {

        }
    })
}