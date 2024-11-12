<?php
$listaValores = [];
$listaCampos = [];

$listaCampos = explode("," ,$_GET['listaCampos']);


for ($i = 0; $i < count($_GET) - 2; $i++){
    $listaValores[$i] = $_GET["$i"];
}

include "../crud/adicionar.php";

echo adicionar($_GET['tabela'], $_GET["listaCampos"], $listaValores) ? "Adicionado" : "Não adicionado";
?>