<?php ob_start();  

// Este é o arquivo de configuração do banco de dados de nosso servidor 

$host = ""; //Servidor do mysql
$user = ""; //Usuario do banco de dados
$senha = ""; //senha do banco de dados
$db = ""; //banco de dados
$nome_site = ""; //Nome do site
$site = ""; // Dominio website

$pdo = new PDO('mysql:host=;dbname=', $user, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>



      