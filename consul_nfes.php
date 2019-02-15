<!DOCTYPE html>
<html>
<head>
	<title>Consulta NFes Emitidas</title>

</head>

<!-- Estilos -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>


<body>

	<!-- barra flutuante (navbar) no topo do site -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Conteudo abrangente para menores resoluções -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand visible-md visible-lg" href="index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> WebMania - Emissor de Nota Fiscal</a>       
				<a class="navbar-brand visible-xs visible-sm " href="javascript:void(0)">Webmania</a>
			</div>  
			
			<!-- Conteudo abrangente para maiores resoluções -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
						<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Nota Fiscal <span class="caret"></span></a>

							<ul class="dropdown-menu">

								<li><a href="index.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Emissão</a></li>

								<li><a href="consul_nfes.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Consulta</a></li>									

							</ul>
						</li>
					</ul> 
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cadastros <span class="caret"></span></a>

							<ul class="dropdown-menu">

								<li><a href="cad_tomador.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Tomador</a></li>

								<li><a href="cad_contribuinte.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Contribuinte</a></li>									

							</ul>
						</li>
					</ul>

				</div><!-- /.navbar-collapsado -->
			</div><!-- /.container-fluido -->
		</nav> 




		<div class="panel panel-primary principal" style="margin-top: 65px;">
			<div class="panel-heading"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Nota Fiscal » Consulta de Notas Emitidas</div>
			<div class="panel-body">


				<table id="consulnfes" class="table table-hover table-condensed" cellspacing="0" width="100%">  
					<thead>
						<tr>
							<th>Data</th>
							<th>Número</th>
							<th>Serie</th>
							<th>Contribuinte</th> 
							<th>Tomador</th>   
							<th>Valor bruto</th>
							<th>Desconto</th>
							<th>V. Liquido</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>


			</div> 
		</div> <!-- fechamento de panel panel-primary principal -->


	</body>


	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.colReorder.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="js/jszip.min.js"></script>
	<script type="text/javascript" src="js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="js/buttons.print.min.js"></script>
	<script type="text/javascript" src="js/dataTables.colReorder.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>  



	</html>