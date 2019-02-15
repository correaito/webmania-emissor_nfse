<? 
include("../config.php"); // conexão com o BD


// consulta no BD sem limite
$consulta = $pdo->query("SELECT * FROM notafiscal ORDER BY data desc");

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
				$row .= '"'.$linha['cnpj_contrib'].'",'; 
				$row .= '"'.$linha['cod_tomador'].'",'; 
				$row .= '"'.$linha['totalnfe'].'",'; 
				$row .= '"'.$linha['desconto'].'",'; 
				$row .= '"'.$linha['valorliquido'].'"'; 
				
				$row .= ']';

				$i++;

				if ($i == $numero) { $row .= "";} else {$row .= ",";}


			}

			$row .= ']';
			$row .= "}";


			echo $row;


			?>