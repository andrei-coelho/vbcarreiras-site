
const btnServicos = $("#btn-servicos");

control.servicos.animate = animate_servicos; 
control.servicos.dismiss = animate_servicos_dismiss; 

btnServicos.on("mouseenter", animate_servicos)
    .on("mouseleave", function(){
        if(atual_page != "servicos"){
            animate_servicos_dismiss();
        }
    })

btnServicos.on("click",
   function (){
        if(atual_page != "servicos"){
            animate_servicos();
            move_to("servicos")
        }
   }
)

function animate_servicos(){
    btnServicos.addClass("linked");
    $("#servicos-outside").addClass("linked");
    $("#servicos-inner").addClass("linked");
}

function animate_servicos_dismiss(){
    btnServicos.removeClass("linked");
        $("#servicos-outside").removeClass("linked");
        $("#servicos-inner").removeClass("linked");
}