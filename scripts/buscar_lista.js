

buscar_lista();

function buscar_lista() {
    $('#Alertas').html('<div class="alert alert-info"><i class="fa fa-spinner fa-pulse fa-fw"></i>Carregando...</div>');
    $.post("scripts/buscar_lista.php").done(function (buscado) {
        $('#R_Lista').html(buscado);
        $('#Alertas').html('');
    });
}
