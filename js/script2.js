$(document).ready(function(){
    cargarConsejos(); // Llamada inicial para cargar los consejos al cargar la página

    // Función para cargar los consejos desde mostrar_consejos.php
    function cargarConsejos() {
        $("#mostrar-consejos").load("mostrar_consejos.php");
    }

    // Ejemplo de recargar los consejos cada X segundos
    setInterval(cargarConsejos, 5000); // Actualizar cada 5 segundos (5000 milisegundos)
});