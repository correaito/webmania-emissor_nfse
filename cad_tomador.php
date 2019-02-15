<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Tomador de Serviço</title>

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



	<div class="panel panel-primary principal" style="margin-top: 65px;margin-left: 15px;margin-right: 15px;">
		<div class="panel-heading"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Nota Fiscal » Cadastro de Tomador de Serviço</div>
		<div class="panel-body">


          <!--   aqui inicia o formulario de cadastro do tomador de serviço -->

			<form id="cadtomador" method="post">


			<div class="col-xs-12 col-md-12">


					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label">Tipo</label>						
							<select class="form-control" name="tpessoa" id="tipopessoa" autofocus>
								<option></option>
								<option value="Física">Pessoa Física</option>
								<option value="Jurídica">Pessoa Jurídica</option>
							</select>					
						</div>
					</div>



				</div> <!-- fechamento de col-xs-12 col-md-12 -->



				<div class="col-xs-12 col-md-12">


					<div class="col-md-3 djuridica">
						<div class="form-group">
							<label class="control-label">CNPJ/CPF</label>						
							<input type="text" name="cnpj" onblur="validar(this);" class="form-control" required />						
						</div>
					</div>

					
					<div class="col-xs-12 col-md-5">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Nome/Razão Social</label>
							<input type="text" name="razao" class="form-control" required />
						</div>
					</div>


				</div> <!-- fechamento de col-xs-12 col-md-12 -->

				<div class="col-xs-12 col-md-12">


					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">CEP</label>						
							<input type="text" onkeyup="" id="cep" onblur="completa_cep();" name="cep" class="form-control cep" required />				
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Endereço</label>
							<input type="text" id="endereco" name="endereco" class="form-control" required />
						</div>
					</div>


					<div class="col-md-2">
						<div class="form-group">
							<label class="control-label">Número</label>						
							<input type="text" id="numero" name="numero" class="form-control" required />						
						</div>
					</div>


				</div> <!-- fechamento de col-xs-12 col-md-12 -->

				<div class="col-xs-12 col-md-12">


					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Complemento</label>
							<input type="text" id="complemento" name="complemento" class="form-control" />
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Bairro</label>
							<input type="text" id="bairro" name="bairro" class="form-control" required />
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Cidade/Estado</label>
							<input type="text" id="cidadeuf" name="cidadeuf" class="form-control" required />
						</div>
					</div>



				</div> <!-- fechamento de col-xs-12 col-md-12 -->


				<div class="col-xs-12 col-md-12">


					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">Telefone</label>
							<input type="text" name="telefone" class="form-control" />
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="form-control-label" for="form1-l-name">E-mail</label>
							<input type="text" name="email" class="form-control"/>
						</div>
					</div>

 

				</div> <!-- fechamento de col-xs-12 col-md-12 -->


				<div class="col-xs-12 col-md-12">

					<button type="submit" class="btn btn-success">Gravar</button>		
					<button type="reset" class="btn btn-info">Limpar Campos</button>

				</form>


			</div> <!-- fechamento de col-xs-12 col-md-12 -->


		</div> 
	</div> <!-- fechamento de panel panel-primary principal -->


		<!-- janela modal com avisos retornando pelo callback -->

	<div class="modal fade" id="cadtomadorsucess" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Aviso!</h4>
				</div>
				<div class="modal-body">
					<p id="aviso"></p> <!-- callback será retornado aqui -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



</body>


<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/cep.js"></script>
<script type="text/javascript" src="js/validacaoCNPJ.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>  




</html>