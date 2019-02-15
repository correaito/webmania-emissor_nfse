<? 
include("../config.php"); // conexão com o BD

date_default_timezone_set('America/Sao_Paulo'); // Estabelece a data/hora de Brasilia 

$hoje = date('Y-m-d');

// consulta no BD sem limite
$consulta = $pdo->query("SELECT * FROM notafiscal where data = '$hoje' order by data desc");

// Captura o número do total de registros no nosso banco a partir da nossa consulta ilimitada
$numero = $consulta->rowCount();


// aqui inicia a execucao do arquivo em formato json a ser lido pelo script DataTables em scripts.js
$i = 0;

$row = '{';

$row .= '"data": [';


while ($linha = $consulta->fetch())

{
                $id = $linha['id'];

                $novadata = implode('/', array_reverse(explode( '-', $linha['data'] ))); 
						
				$row .= '[';
				$row .= '"'.$novadata.'",'; 
				$row .= '"'.$linha['numeronfse'].'",'; 
				$row .= '"'.$linha['serie'].'",'; 
				$row .= '"'.$linha['valorliquido'].'",';		
				$row .= '"'.$linha['cod_tomador'].'",';  	

				$row .= '"<a href=\'javascript:void(0);\'><span onclick=\'\' class=\'glyphicon glyphicon-print\'></span></a>",';
				$row .= '"<a href=\'javascript:void(0);\'><span onclick=\'\' class=\'glyphicon glyphicon-download-alt\'></span></a>",';
				$row .= '"<a href=\'javascript:void(0);\'><span onclick=\'\' class=\'glyphicon glyphicon-file\'></span></a>",';
				$row .= '"<a href=\'javascript:void(0);\'><span onclick=\'\' class=\'glyphicon glyphicon-envelope\'></span></a>"';
				
				$row .= ']';

				$i++;

				if ($i == $numero) { $row .= "";} else {$row .= ",";}


			}

			$row .= ']';
			$row .= "}";


			echo $row;


			?>