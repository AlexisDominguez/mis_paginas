//Esta función se encarga de verificar si se han rellenado los campos obligatorios
function validateForm(){
    if($("#name").val() == ""){
        alert("Por favor, rellena el campo nombre.");
        $("#name").focus();
        return false;
    }

    if($("#phoneNumber").val() == ""){
        alert("Por favor, escribe tu número de teléfono.");
        $("#phoneNumber").focus();
        return false;
    }

    if($("#email").val() == ""){
        alert("Por favor, escribe tu dirección de email.");
        $("#email").focus();
        return false;
    }

    return true;
}

$(document).ready(function(){       //Indica que su contenido se utilizará sólo si el documento ha cargado completamente
    /* Esta función se encarga de la animación del header según su posisión */
    $(window).scroll(function(){    //Detecta el scroll de la pantalla

        if($(window).scrollTop()> 50){
            $(".header").addClass("headerAnimation");
           // $(".buttonTeam").addClass("buttonTeamAnimation");
           // $(".buttonPrices").addClass("buttonPricesAnimation");
        }else{
            $(".header").removeClass("headerAnimation");
           // $(".buttonTeam").removeClass("buttonTeamAnimation");
           // $(".buttonPrices").removeClass("buttonPricesAnimation");
        }

    })

    $("#buttonSubmit").click(function(){
        //validateForm()
    });
});