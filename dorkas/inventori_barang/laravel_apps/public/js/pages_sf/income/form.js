const submitIncome = () => {
    let data = $(`#formIncome`).serializeArray();
    let idForm = data[0].value;
    if(idForm == ""){
        addIncome();
    } else {
        editIncome();
    }
}

function addIncome(){
    let data = $(`#formIncome`).serializeArray();
    $.ajax({
        url : `${configView.url}/income/add-ajax`,
        type : "get",
        data : data,
        success : function(response){
            $(`#alertSuccess`).attr("hidden", false);
            $(`#alert-heading-success`).empty();
            Object.keys(response.message).forEach(element => {
                $(`#alert-heading-success`).append(response.message[element]);
            })
            sourceData();
            getGraph();
            $(`#modalIncome`).modal("hide");
            $(`#formIncome`).trigger("reset");
            setTimeout(() => {
                $(`#alertSuccess`).attr("hidden", true);
            }, 4000);
        },
        error : function(response){
            let objResp = response.responseJSON.message
            $(`#alertDanger`).attr("hidden", false);
            $(`#alert-heading-danger`).empty();
            Object.keys(objResp).forEach(element => {
                console.log(objResp[element]);
                $(`#alert-heading-danger`).append(`<h4>${objResp[element]}</h4>`);
            })
            setTimeout(() => {
                $(`#alertDanger`).attr("hidden", true);
            }, 4000);
        }
    })
}

function editIncome(){
    let data = $(`#formIncome`).serializeArray();
    $.ajax({
        url : `${configView.url}/income/edit-ajax`,
        type : "post",
        data : data,
        success : function(response){
            $(`#alertSuccess`).attr("hidden", false);
            $(`#alert-heading-success`).empty();
            Object.keys(response.message).forEach(element => {
                $(`#alert-heading-success`).append(response.message[element]);
            })
            sourceData();
            getGraph();
            $(`#modalIncome`).modal("hide");
            $(`#formIncome`).trigger("reset");
            setTimeout(() => {
                $(`#alertSuccess`).attr("hidden", true);
            }, 4000);
        },
        error : function(response){
            let objResp = response.responseJSON.message
            $(`#alertDanger`).attr("hidden", false);
            $(`#alert-heading-danger`).empty();
            Object.keys(objResp).forEach(element => {
                console.log(objResp[element]);
                $(`#alert-heading-danger`).append(`<h4>${objResp[element]}</h4>`);
            })
            setTimeout(() => {
                $(`#alertDanger`).attr("hidden", true);
            }, 4000);
        }
    })
}

function formSucces(){

}
