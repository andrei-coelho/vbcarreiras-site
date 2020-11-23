const pages = [
    "home", "quem", "servicos", "contato"
];

var click_menu = false;
var atual_page = pages[0];

var control = {
    contato:[],
    home:[],
    quem:[],
    servicos:[]
};

var positions = {
    home:0,
    quem:$("#quem-page").offset().top -40,
    servicos:$("#servicos-page").offset().top -40,
    contato:$("#contato-page").offset().top -40,
}

$(window).scroll(function() {
    if(!click_menu){
        let scroll = $(window).scrollTop();
        Object.entries(positions).forEach((element) => {
            if(scroll >= element[1] - 200){
                change_animation(element[0]);
            }
        });
    }
});

function move_to(page) {
    click_menu = true;
    $('html, body').animate({
        scrollTop: positions[page]
    }, 400);
    change_animation(page);
}

function change_animation(page){
    atual_page = page;
    control[page].animate();
    pages.forEach(element => {
        if(element != page)
        control[element].dismiss();
    });
    click_menu = false;
}