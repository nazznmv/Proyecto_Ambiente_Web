
$(document).ready(function(){
    $("#mostrarFormulario").click(function(){
        $("#formularioConsejo").toggle();
    });
     // Mostrar el formulario al hacer clic en Editar
     $("#btnEliminar").click(function() {
        $("#formularioEliminar").toggle();
    });
    // Mostrar el formulario al hacer clic en Editar
    $("#btnEditar").click(function() {
        $("#formularioEditar").toggle();
    });

    // Ocultar el formulario al hacer clic en cualquier otro lugar de la página
    $(document).click(function(event) {
        if (!$(event.target).closest("#formularioEliminar, #btnEditar,#btnEliminar").length) {
            $("#formularioEliminar").hide();
        }
    });
});
