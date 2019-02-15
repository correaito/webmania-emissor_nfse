<?php

// este arquivo retorna informações de consulta que autocompletam campos do formulario da nota fiscal
// neste caso, as aliquotas calculadas sobre o serviço selecionado na nota fiscal, conf tabela servico do bd

include('../config.php');

$servico = $_POST['servico'];

$consulta = $pdo->query("SELECT * FROM aliquotas WHERE servico='$servico'")->fetch(PDO::FETCH_OBJ);

$dados = 
$consulta->aliquota."*". /*0*/
$consulta->tribmunprest."*"./*1*/

/*consulta os impostos federais*/
$consulta->ir."*". /*2*/
$consulta->pis."*". /*3*/
$consulta->inss."*". /*4*/
$consulta->cofins."*". /*5*/
$consulta->contrbsind."*". /*6*/
$consulta->deducao."*". /*7*/
$consulta->issretido; /*8*/

echo $dados;

?> 