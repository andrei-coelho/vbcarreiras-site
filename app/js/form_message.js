function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

const messages = {
    form: "Sua mensagem não foi enviada pois há campos que não foram preenchidos corretamente!",
    email: "Sua mensagem não foi enviada pois o e-mail digitado não é válido!",
    success: "Sua mensagem foi enviada! Obrigado e aguarde nosso contato!"
}


function show_message(slug, type = 'danger'){

    mensagem = messages[slug];
    let str = type != 'danger' ?  'Sucesso' : 'Erro';
    let template = `<div style="position:fixed; z-index: 99999999; width: 90%; margin-left: 4%; margin-top: 50px;" 
    class="alert alert-${type} alert-dismissible fade show text-center" role="alert">
      <strong>${str}!</strong> ${mensagem}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>`;

    $("#mensagem-box").html(template);

}

var fullLoad = $("#full-load");
var form = $("#form-email");

if(ERROR) show_message(ERROR);
if(MESSAGE) show_message(MESSAGE, 'success');

$("#enviar").click(function(e){

    e.preventDefault();

    var email    = $("#email").val().trim(),
        nome     = $("#nome").val().trim(),
        mensagem = $("#mensagem").val().trim();
    
    if(!isValidEmailAddress(email)){
        show_message('email');
        return false;
    }

    if(nome == "" || email == "" || mensagem == ""){
        show_message('form');
        return false;
    }

    fullLoad.removeClass('d-none');
    form.submit();

})