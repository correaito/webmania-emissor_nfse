<?php
// este arquivo retorna informações de consulta que autocompletam campos do formulario da nota fiscal
// neste caso, os dados do contribuinte da nota fiscal

include('../config.php');

$codigo = $_POST['codigo'];

$consulta = $pdo->query("SELECT * FROM contribuinte WHERE codigo='$codigo'")->fetch(PDO::FETCH_OBJ);

$dados = 
$consulta->endereco."*". /*0*/
$consulta->nome."*".  /*1*/
$consulta->cep."*".  /*2*/
$consulta->bairro."*".  /*3*/
$consulta->municipio."*". /* 4*/
$consulta->codigo."*".  /*5*/
$consulta->cnpj;  /*6*/


echo $dados;

?> 