/* Función encargada de la animación del header */

// Función que detecta el scroll del navegador
window.onscroll = function(){

    //Guarda el scroll en la variable scroll
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;
    var header = document.getElementsByClassName("header");

    if(scroll >10){
        console.log("Pasaste la posisión 50");

        for(var i = 0; i< header.length; i++){
            header[i].className = "headerAnimation";
        }
    }else{
        console.log("Estás antes de la posisión 50");
        for(var i = 0; i< header.length; i++){
            header[i].className = "header";
        }
    }
}