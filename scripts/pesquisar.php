<?php

$p = $_GET['i_pesquisa'];

$link = "http://bpixel.com.br/teste/itens.json";
$jsonData = file_get_contents($link);
$jsonObj = json_decode($jsonData);
$itens = $jsonObj->itens;

$exibir = 0;

foreach ( $itens as $e )
{
if ((strpos(strtoupper($e->nome), strtoupper($p)) !== false) || (strpos(strtoupper($e->descricao), strtoupper($p)) !== false)) {
$id = str_replace(' ', '_', $e->nome);
echo "<tr id='".$id."' name='".$e->nome."'><th><input type='checkbox' onchange='selecionou(\"".$id."\");' value='".$e->nome."'></th><th scope='row'><img width='45px' height='45px' class='img-thumbnail' src='".$e->foto."' onerror=\"javascript:this.src='img/SemAvatar.png'\"></th><td>".$e->nome."</td><td>".$e->descricao."</td><td id='data_selecinou_".$id."'> </td></tr>"; 
$exibir++;
}

}

sleep(1);
if ($exibir <= 0){
    echo 'VAZIO ';
}
?>