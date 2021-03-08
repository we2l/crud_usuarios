$(document).ready(function() {
    $("#cpf").mask("000.000.000-00")
    $("#telefone").mask("(00) 0000-00009")
    $("#telefone").blur(function() {
        if($(this).val().length === 15) {
            $("#telefone").mask("(00) 00000-0009")
        } else {
            $("#telefone").mask("(00) 0000-00009")
        }
    })
})