function selecionou(div) {
    var d = new Date();
    dataHora = (d.toLocaleString());

    if ($('#' + div).hasClass('selecionou')) {
        $('#' + div).removeClass("selecionou");
        $('#data_selecinou_' + div).html("");
    } else {
        $('#' + div).addClass("selecionou");
        $('#data_selecinou_' + div).html(dataHora);
    }

}