<?php
include("../config.php"); // Configuração do BD

$cnpj = $_POST['cnpj'];
$razao = addslashes($_POST['razao']);
$cep = $_POST['cep'];
$endereco = addslashes($_POST['endereco']);
$numero = $_POST['numero'];
$complemento = addslashes($_POST['complemento']);
$bairro = $_POST['bairro'];
$cidadeuf = addslashes($_POST['cidadeuf']);
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$tpessoa = $_POST['tpessoa'];

$codigo = rand(1, 1000);



// Verifica se já não existe um cnpj/cpf cadastrado no bd
$sql_cnpj = $pdo->query("SELECT * FROM contribuinte WHERE cnpj='$cnpj'");
$num_cnpj = $sql_cnpj->rowCount();



if ($num_cnpj == 0)  {   //Se não existir, grava os dados informados na tabela contribuinte	


// Se todas as condições foram atendidas, grava os dados na tabela contribuinte
$sql_inclu = $pdo->query("INSERT INTO contribuinte (cnpj, nome, cep, endereco, numero, complemento, bairro, municipio, telefone, email, tpessoa, codigo) VALUES ('$cnpj', '$razao', '$cep', '$endereco', '$numero', '$complemento', '$bairro', '$cidadeuf', '$telefone', '$email', '$tpessoa', '$codigo')");

echo "Contribuinte de serviços cadastrado com sucesso";

}

else {

// mensagem que será disparada via callback na janela modal em cad_cad_contribuinte.php
echo "Este CPF/CNPJ já foi cadastrado para outro contribuinte de serviços";

}

?>

 