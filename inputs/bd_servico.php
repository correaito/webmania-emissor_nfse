<?php
include("../config.php"); // Configuração do BD

$servico = $_POST['servico'];
$numeronfse = $_POST['nfe_number'];
$cidade = $_POST['cidade'];
$tribmunicprest = $_POST['tribmunicprest'];
$aliquota = $_POST['aliquota'];
$sittribut = $_POST['sittribut'];
$vservico = $_POST['vservico'];
$deduservico = $_POST['deduservico'];
$issservico = $_POST['issservico'];
$descservico = $_POST['descservico'];


// grava os dados na tabela servico
$sql_inclu = $pdo->query("INSERT INTO servico (

	cidade, servico, tribmunicprest, sittribut, aliquota, descservico, vservico, deduservico, issservico, nfse

	) VALUES (

	'$cidade', '$servico', '$tribmunicprest', '$sittribut', '$aliquota', '$descservico', '$vservico', 
	'$deduservico', '$issservico', '$numeronfse')"); 


?>

 