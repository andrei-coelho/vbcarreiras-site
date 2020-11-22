
const btnQuem = $("#btn-quem");

control.quem.animate = animate_quem; 
control.quem.dismiss = animate_quem_dismiss; 
var click_quem = false;

btnQuem.on("mouseenter", animate_quem)
    .on("mouseleave", function(){
        if(atual_page != "quem" && !click_quem){
            animate_quem_dismiss();
        }
        click_quem = false;
    });

btnQuem.on("click", function (){
    click_quem = true;
    if(atual_page != "quem"){
        move_to("quem");
    }
});

function animate_quem(){
    btnQuem.addClass("linked");
    $("#quem-outside").addClass('linked');
    $("#quem-inner").addClass('linked');
}

function animate_quem_dismiss(){
    btnQuem.removeClass("linked");
    $("#quem-outside").removeClass('linked');
    $("#quem-inner").removeClass('linked');
}