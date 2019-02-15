<?php
include("../config.php"); // Configuração do BD

date_default_timezone_set('America/Sao_Paulo'); // Estabelece a data/hora de Brasilia 

$cnpj_contrib = $_POST['cnpj_contrib'];
$prazo_contrib = $_POST['prazo'];
$iss_compt_contrib = $_POST['iss_compt'];
$serienfe = $_POST['serienfe'];
$cod_tomador = $_POST['codigo_tomador'];
$observacoes = $_POST['observacoes'];
$totalnfe = $_POST['totalnfse'];
$desconto = $_POST['desconto'];
$valorliquido = $_POST['vliquidonfse'];
$numeronfse = $_POST['nfe_number'];
$serie = "U";

$data = date('Y-m-d'); // data da emissão da nota fiscal

// grava os dados na tabela notafiscal
$sql_inclu = $pdo->query("INSERT INTO notafiscal (

	cnpj_contrib,
	prazo_contrib,
	iss_compt_contrib,
	serienfe,
	cod_tomador,
	observacoes,
	totalnfe,
	desconto,
	valorliquido,
	numeronfse, 
	data,
	serie

	) VALUES (

	'$cnpj_contrib',
    '$prazo_contrib', 
    '$iss_compt_contrib', 
    '$serienfe', 
    '$cod_tomador', 
    '$observacoes', 
    '$totalnfe', 
    '$desconto', 
    '$valorliquido', 
    '$numeronfse',
    '$data',
    '$serie'

     )");

// mensagem de sucesso que será disparada via callback na janela modal em index.php
echo "Nota Fiscal emitida com sucesso!"; 

?>

 