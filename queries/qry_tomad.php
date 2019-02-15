<? 
include("../config.php"); // conexão com o BD


// consulta no BD sem limite
$consulta = $pdo->query("SELECT * FROM tomador ORDER BY codigo desc");

// Captura o número do total de registros no nosso banco a partir da nossa consulta ilimitada
$numero = $consulta->rowCount();


// aqui inicia a execucao do arquivo em formato json a ser lido pelo script DataTables em scripts.js
$i = 0;

$row = '{';

$row .= '"data": [';


while ($linha = $consulta->fetch())

{

				$codigo = $linha['codigo'];
		
				$row .= '[';
				$row .= '"'.$linha['codigo'].'",'; 
				$row .=	'"'.$linha['cnpj'].'",'; 
				$row .=	'"'.$linha['razao'].'",'; 
				$row .=	'"'.$linha['cidadeuf'].'",'; 
		
				$row .= '"<a href=\'javascript:void(0);\'><span title=\'Incluir contribuinte\' onclick=\'incluirtomad('.$codigo.');\' class=\'glyphicon glyphicon-download\'></span></a>"';


				$row .= ']';

				$i++;

				if ($i == $numero) { $row .= "";} else {$row .= ",";}


			}

			$row .= ']';
			$row .= "}";


			echo $row;


			?>