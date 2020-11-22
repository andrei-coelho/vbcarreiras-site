
const lineContato1 = $("#contato-line1");
const lineContato2 = $("#contato-line2");
const phoneContato = $("#phone-contato");
const btnContato   = $("#btn-contato");

control.contato.animate = animate_contato; 
control.contato.dismiss = animate_contato_dismiss; 
var click_contato = false;


btnContato.on("mouseenter", animate_contato)
    .on("mouseleave", function(){
        if(atual_page != "contato"){
            animate_contato_dismiss();
        }
    });

btnContato.on("click", function (){
    if(atual_page != "contato"){
        animate_contato();
        move_to("contato");
    }
});

function animate_contato(){
    btnContato.addClass("linked");
    phoneContato.addClass("linked");
    lineContato1.addClass("linked");
    setTimeout(() => {
        lineContato2.addClass("linked");
    }, 500);
}

function animate_contato_dismiss(){
    // verificar se a página é a atual
    btnContato.removeClass("linked");
    phoneContato.removeClass("linked");
    lineContato1.removeClass("linked");
    lineContato2.removeClass("linked");
    setTimeout(() => {
        lineContato2.removeClass("linked");
    }, 500)
}