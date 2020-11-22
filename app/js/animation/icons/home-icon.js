const iconCloudHome1 = $("#cloud-home-vector");
const iconCloudHome2 = $("#cloud-home-vector2");
const iconCasaHome = $("#casa-home");
const btnHome = $("#btn-home");

var home_animate_now = false;
var click_home = false;

atual_page == "home" ? animate_home() : animate_home_dismiss();
control.home.animate = animate_home; 
control.home.dismiss = animate_home_dismiss; 

btnHome.on("mouseenter", animate_home)
    .on("mouseleave", animate_home_dismiss);

btnHome.on("click",function (){
    if(atual_page != "home"){
        move_to("home")
    }
});

function animate_home(){

    if(!home_animate_now){

        home_animate_now = true;

        iconCasaHome.addClass("linked");
        btnHome.addClass("linked");

        var obj1 = {
            
            cx:54,
            cy:18,
            r:2,
            o:1,

            mcx:70, // 16 -> 2
            mcy:5, // 8 -> 1
            mr:4, // 2 -> 0.25

        }

        var obj2 = {
            
            cx:54,
            cy:18,
            r:2,
            o:1,

            mcx:60, // 16 -> 2
            mcy:2, // 8 -> 1
            mr:6, // 2 -> 0.25

        }

        var clonedObj1 = { ...obj1 };
        var clonedObj2 = { ...obj2 };

        var anime = setInterval(() => {
            if(!home_animate_now){
                clearInterval(anime);
                return;
            }
            if(
                clonedObj1.cx >= clonedObj1.mcx &&
                clonedObj1.cy >= clonedObj1.mcy &&
                clonedObj1.r >= clonedObj1.mr 
            ) {
                clonedObj1 = { ...obj1 };
            }

            if(
                clonedObj2.cx >= clonedObj2.mcx &&
                clonedObj2.cy >= clonedObj2.mcy &&
                clonedObj2.r >= clonedObj2.mr 
            ) {
                clonedObj2 = { ...obj2 };
            }

            iconCloudHome1.attr("cx", clonedObj1.cx);
            iconCloudHome1.attr("cy", clonedObj1.cy);
            iconCloudHome1.attr("r", clonedObj1.r);
            iconCloudHome1.css({ opacity: clonedObj1.o });

            iconCloudHome2.attr("cx", clonedObj2.cx);
            iconCloudHome2.attr("cy", clonedObj2.cy);
            iconCloudHome2.attr("r", clonedObj2.r);
            iconCloudHome2.css({ opacity: clonedObj2.o });

            clonedObj1.cx += 1;
            clonedObj1.cy -= 0.5;
            clonedObj1.r  += 0.20;
            clonedObj1.o  -= 0.06;

            clonedObj2.cx += 1;
            clonedObj2.cy -= 0.5;
            clonedObj2.r  += 0.20;
            clonedObj2.o  -= 0.06;
            
        }, 50);
    }

}

function animate_home_dismiss(){
    
    // verificar se a página é a atual
    if(atual_page != "home"){
        home_animate_now = false;
        iconCasaHome.removeClass("linked");
        btnHome.removeClass("linked");
        iconCloudHome1.css({ opacity: 0 });
        iconCloudHome2.css({ opacity: 0 });
    }
}