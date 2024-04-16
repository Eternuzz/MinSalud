function mostrarSeccion(id) {
    // Ocultar todas las subsecciones
    document.querySelectorAll('.sub_section1_1').forEach(function(section) {
        section.style.display = 'none';
    });

    // Mostrar solo la subsección requerida
    document.getElementById(id).style.display = 'flex';

    // Opcional: Ajustar la ventana al inicio de la sección visible
   // window.scrollTo(0, document.getElementById(id).offsetTop);
}
