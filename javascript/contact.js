/* Esta función se encarga de la animació del header según su posisión */

$(document).ready(function(){       //Indica que su contenido se utilizará sólo si el documento ha cargado completamente
    $(window).scroll(function(){    //Detecta el scroll de la pantalla

        if($(window).scrollTop()> 50){
            $(".header").addClass("headerAnimation");
           // $(".buttonTeam").addClass("buttonTeamAnimation");
           // $(".buttonPrices").addClass("buttonPricesAnimation");
        }else{
            console.log("Estamos antes de la posisión 50");
            $(".header").removeClass("headerAnimation");
           // $(".buttonTeam").removeClass("buttonTeamAnimation");
           // $(".buttonPrices").removeClass("buttonPricesAnimation");
        }

    })
});