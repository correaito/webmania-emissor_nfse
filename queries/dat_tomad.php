<?php

// este arquivo retorna informações de consulta que autocompletam campos do formulario da nota fiscal
// neste caso, importa os dados do tomador de serviço da nota fiscal

include('../config.php');

$codigo = $_POST['codigo'];

$consulta = $pdo->query("SELECT * FROM tomador WHERE codigo='$codigo'")->fetch(PDO::FETCH_OBJ);

$dados = 
$consulta->endereco."*". /*0*/
$consulta->razao."*".  /*1*/
$consulta->cep."*".  /*2*/
$consulta->bairro."*".  /*3*/
$consulta->cidadeuf."*". /* 4*/
$consulta->codigo."*".  /*5*/
$consulta->cnpj."*". /*6*/
$consulta->email;  /*7*/


echo $dados;

?> 