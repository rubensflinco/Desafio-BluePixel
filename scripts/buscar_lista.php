<?php

$link = "http://bpixel.com.br/teste/itens.json";
$jsonData = file_get_contents($link);
$jsonObj = json_decode($jsonData);
$itens = $jsonObj->itens;

foreach ( $itens as $e )
{
$id = str_replace(' ', '_', $e->nome);
echo "<tr id='".$id."' name='".$e->nome."'><th><input type='checkbox' onchange='selecionou(\"".$id."\");' value='".$e->nome."'></th><th scope='row'><img width='45px' height='45px' class='img-thumbnail' src='".$e->foto."' onerror=\"javascript:this.src='img/SemAvatar.png'\"></th><td>".$e->nome."</td><td>".$e->descricao."</td><td id='data_selecinou_".$id."'> </td></tr>"; 
}
?>