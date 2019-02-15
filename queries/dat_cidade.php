<?php

// este arquivo retorna informações de consulta que autocompletam campos do formulario da nota fiscal
// neste caso, preenche o codigo e nome da cidade selecionada na area de Serviço da nota fiscal

include('../config.php');

$id = $_POST['id'];

$consulta = $pdo->query("SELECT * FROM cidades WHERE id='$id' order by cidade asc")->fetch(PDO::FETCH_OBJ);

$dados = 
$consulta->cidade."*". /*0*/
$consulta->id; /*1*/


echo $dados;

?> 