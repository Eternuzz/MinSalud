
function MostrarDiv(elemento1,elemento2,validacion) {
    var elemento_1 = document.getElementById(''+elemento1);
    var elemento_2 = document.getElementById(''+elemento2);
    if (validacion === 'SI') {
        elemento_1.style.display = 'flex'; 
        elemento_2.style.display = 'flex'; 
    } else {
        elemento_1.style.display = 'none'; 
        elemento_2.style.display = 'none'; 
    }
}


//onclick="MostrarDiv('26_t','26_v','SI')"