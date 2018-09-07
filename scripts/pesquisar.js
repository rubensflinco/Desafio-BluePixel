
function pesquisar() {
    $('#Alertas').html('<div class="alert alert-info"><i class="fa fa-spinner fa-pulse fa-fw"></i>Carregando...</div>');
    $.get("scripts/pesquisar.php", $("#f_pesquisa").serialize() ).done(function (buscado) {
        if (buscado.includes("VAZIO")){
        $('#Alertas').html('<div class="alert alert-danger"><i class="fa fa-times fa-fw"></i>Não achamos nada no banco.</div>');
        $('#R_Lista').html("");
        }else{
        $('#R_Lista').html(buscado);
        $('#Alertas').html('');
        }
    });
}
