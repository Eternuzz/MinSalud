function habilitarElemento(id,elemento) {
    // Obtiene el valor de la opción seleccionada
    var seleccion = document.getElementById(""+id).value;
  
    // Obtiene el elemento a habilitar
    var elemento = document.getElementById(""+elemento);
  
    // Comprueba si la opción seleccionada es la que habilita el elemento
    if(seleccion === "otro") {

      elemento.disabled = false; 

    } else {

      elemento.disabled = true; 

    }

    //Mostrar  el elemento 
    if(seleccion === "Otro") {

        elemento.style.display = "flex"; 

      } else {

        elemento.style.display = "none"; 

      }
  }