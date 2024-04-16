

// Seleccionar todos los elementos <select> con la clase 'miClaseSelect'
var selectElements = document.querySelectorAll('.selects');

// Añadir un manejador de evento 'change' a cada elemento <select>
selectElements.forEach(function(selectElement) {
    selectElement.addEventListener('change', function() {
        // Obtener el ID del elemento a controlar desde el atributo data-target
        var targetId = this.getAttribute('data-target');
        //var targetElement = document.getElementById(targetId);
        var ids = targetId.split("_");
        var element = document.getElementById(ids[0]);
        var element2 = document.getElementById(ids[1]);


        // Mostrar el div asociado si la opción seleccionada es 'Otro'
        if (this.options[this.selectedIndex].text === 'Otro' || this.options[this.selectedIndex].text === 'Otra') {
            element.style.display = 'flex';
            element2.style.display = 'flex';

        } else {
            element.style.display = 'none';
            element2.style.display = 'none';
        }
    });
});

