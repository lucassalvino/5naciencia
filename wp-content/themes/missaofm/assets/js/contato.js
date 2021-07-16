$(document).ready(function(){
    $("#form-contato").on('submit', function(event){
        event.preventDefault()
        var dados = {
            action: 'EnviaContato',
            nome: $("#nome").val(),
            email: $("#email").val(),
            telefone: $("#telefone").val(),
            mensagem: $("#mensagem").val()
        };
        $("#container-btn").hide('slow');
        $("#container-load div").show('slow');
        $.post(ajax_object.ajax_url,dados, function(){
            $("#container-btn").show('slow');
            $("#container-load div").hide('slow');
            $("#modalsucesso").modal();
            $("#nome").val(''),
            $("#email").val(''),
            $("#telefone").val(''),
            $("#mensagem").val('')
        });
        return false;
    });
});