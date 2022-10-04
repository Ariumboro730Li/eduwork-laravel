const submitOutcome = () => {
    let data = $(`#formOutcome`).serializeArray();
    let idForm = data[0].value;
    if (idForm == "") {
        addOutcome();
    } else {
        editOutcome();
    }
};

function addOutcome() {
    let data = $(`#formOutcome`).serializeArray();
    $.ajax({
        url: `${configView.url}/outcome/add-ajax`,
        type: "get",
        data: data,
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
}

function editOutcome() {
    let data = $(`#formOutcome`).serializeArray();
    $.ajax({
        url: `${configView.url}/outcome/edit-ajax`,
        type: "post",
        data: data,
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
}

function formSucces() {}
