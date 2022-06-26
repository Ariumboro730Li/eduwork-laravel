function alertMessageSuccess() {
    messageSuccess = false;
    $('#alertMessages').attr("hidden", false);
    $('#messageSuccess').attr("hidden", false);
    $('#messageSuccess').empty();
    setTimeout(() => {
        messageSuccess = true;
        $('#alertMessages').attr("hidden", true);
        $('#messageSuccess').attr("hidden", true);
    }, 5000);
    return false;
}

function alertMessageError() {
    messageError = false;
    $('#alertMessages').attr("hidden", false);
    $('#messageError').attr("hidden", false);
    $('#messageError').empty();
    setTimeout(() => {
        messageError = true;
        $('#alertMessages').attr("hidden", true);
        $('#messageError').attr("hidden", true);
    }, 5000);

    return false;
}