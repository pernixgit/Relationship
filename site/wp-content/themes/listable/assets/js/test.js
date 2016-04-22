function change_state() {
    jQuery.post(MyAjax.url, {action : 'actualizar_estado', estado:1}, function(response) {
        alert("actualizado");
    });
}