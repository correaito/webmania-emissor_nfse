<? 
include("../config.php"); // conexão com o BD


// consulta no BD sem limite
$consulta = $pdo->query("SELECT * FROM cidades ORDER BY id desc");

// Captura o número do total de registros no nosso banco a partir da nossa consulta ilimitada
$numero = $consulta->rowCount();


// aqui inicia a execucao do arquivo em formato json a ser lido pelo script DataTables em scripts.js
$i = 0;

$row = '{';

$row .= '"data": [';


while ($linha = $consulta->fetch())

{
                $id = $linha['id'];
						
				$row .= '[';
				$row .= '"'.$linha['cidade'].'",'; 
				
				$row .= '"<a href=\'javascript:void(0);\'><span title=\'Incluir Cidade\' onclick=\'incluircidade('.$id.');\' class=\'glyphicon glyphicon-download\'></span></a>"';


				$row .= ']';

				$i++;

				if ($i == $numero) { $row .= "";} else {$row .= ",";}


			}

			$row .= ']';
			$row .= "}";


			echo $row;


			?>