<!DOCTYPE html>
<html>
<head>
	<title>WebMania - Emissor de Nota Fiscal Eletrônica
	</title>
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

		<!-- barra da titulo da nav tab -->
		<ul class="nav nav-tabs" role="tablist" style="margin-top: 70px;margin-left: 15px;margin-right: 15px; ">
			<li role="presentation" class="active"><a href="#contrib_tab" aria-controls="home" role="tab" data-toggle="tab"><strong><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Nota Fiscal » Gerenciamento de Notas » Emitir NFSe</a></strong></li>
		</ul>

		<div class="tab-content" style="background-color: white; margin-bottom:15px;margin-left: 15px;margin-right: 15px;">
			<div role="tabpanel" class="tab-pane active" id="contrib_tab" >  <!--  Inicio do conteudo da tab 1 -->

				<br>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Dados do Contribuinte</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">

						<!-- aqui inicia os campos do formulário dos dados da nota fiscal -->

						<div class="row row-sm-offset">

							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">CPF/CNPJ</label>
									<div class="vert-icon horiz-icon">
										<i data-toggle="modal" data-target="#buscacontrib" class="glyphicon glyphicon-search"></i>
										<input type="text" value="" class="form-control" placeholder="" id="cnpj" autofocus />
									</div>
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Endereço</label>
									<input type="text" value="" class="form-control" name="" id="endereco">
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">CEP</label>
									<input type="text" value="" class="form-control" name="" id="cep">
								</div>
							</div>



						</div> <!-- fechamento de row row-sm-offset -->


						<div class="row row-sm-offset"> 

							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Nome/Razão Social</label>
									<input type="text" value="" class="form-control" name="" id="razao">
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Bairro</label>
									<input type="text" value="" class="form-control" name="" id="bairro">
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Prazo de Cancelamento da NFS-e</label>
									<input type="text" value="" class="form-control" name="" id="prazo">
								</div>
							</div>



						</div> <!-- fechamento de row row-sm-offset -->


						<div class="row row-sm-offset"> 


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Cadastro</label>
									<input type="text" value="" class="form-control" name="" id="codigo">
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Cidade</label>
									<input type="text" value="" class="form-control" name="" id="cidade">
								</div>
							</div>


							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Total ISS Competência Atual</label>
									<input type="text" value="" class="form-control" name="" id="iss_compt" disabled="">
								</div>
							</div>



						</div> <!-- fechamento de row row-sm-offset -->


					</div>
				</div> <!-- fechamento de panel panel-default -->



				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Dados do Nota Fiscal</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">

						<!-- aqui inicia os campos do formulário dos dados do emissor da nota fiscal -->


						<div class="row row-sm-offset">


							<div class="col-xs-12 col-md-2">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Série [NFS-e]</label>
									<select class="form-control" id="serienfse">
										<option>NFS-e</option>
									</select>
								</div>
							</div>

						</div> <!-- fechamento de row row-sm-offset -->



						<div class="row row-sm-offset">

							<div class="col-xs-12 col-md-2">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name">Tomador</label>
									<select class="form-control" id="">
										<option>Jurídica</option>
										<option>Física</option>
										<option>Estrangeiro</option>
									</select>
								</div>
							</div>


							<div class="col-xs-12 col-md-2">

								<div class="form-group">
									<label class="control-label">CNPJ do Tomador</label>
									<div class="vert-icon horiz-icon">
										<i data-toggle="modal" data-target="#buscatomador" class="glyphicon glyphicon-search"></i>
										<input type="text" value="" class="form-control" id="codigo_tomador" />
									</div>
								</div>
							</div>


							<div class="col-xs-12 col-md-4" style="margin-top: 5px;">
								<div class="form-group">
									<label class="form-control-label" for="form1-l-name"></label>
									<input type="text" class="form-control" name="" id="razao_tomador" readonly>
								</div>
							</div>



						</div> <!-- fechamento de row row-sm-offset -->


						<!-- painel com os dados do tomador do serviço -->
						<div class="well well-sm col-md-6 panel_tomador" style="display:none;">

							CPF/CNPJ: <span id="cnpj_tomador"></span><br>
							Nome:	<span id="nome_tomador"> </span><br>
							Email:	<span id="email_tomador"> </span><br>
							Endereço: <span id="endereco_tomador"></span><br>
							Bairro:	<span id="bairro_tomador"> </span><br>
							Cidade:	<span id="cidadeuf_tomador"></span><br>

						</div> <!-- fechamento de well well-sm -->



					</div>
				</div> <!-- fechamento de panel panel-default -->



				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Serviços</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">


						<div class="col-xs-12 col-md-12">

							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Local de prestação do serviço</label>
									<div class="vert-icon horiz-icon">
										<i data-toggle="modal" data-target="#buscacidade" class="glyphicon glyphicon-search"></i>
										<input type="text" value="" id="idcidadeprest" class="form-control" placeholder="" />
									</div>
								</div>
							</div>


							<div class="col-md-9" style="margin-top: 5px;">
								<div class="form-group">
									<label class="form-control-label"></label>
									<input type="text" value="" class="form-control" name="" id="cidadeprestserv" readonly>
								</div>
							</div>

						</div> <!-- fechamento da col-xs-12 col-md-12 -->



						<div class="col-xs-12 col-md-12">

							<div class="col-md-8">
								<div class="form-group">
									<label class="control-label">Lista de serviço </label>
									<select class="form-control" onclick="aliquota();" id="listserv">
										<option></option>
										<option value="106">106 - Assessoria e Consultoria em Informatica</option>
										<option value="107">107 - Suporte técnico em Informática, Inclusive Instalação, Configuração e Manutenção de Programas e Computação</option>
										<option value="802">802 - Instrução, Treinamento, Orientação Pedagógica e Educacional, Avaliação de Conhecimentos de Qualquer Natureza</option>
										<option value="1401">1401 - Lubrificação, Limpeza, Lustração, Revisão, Carga e Recarga, Conserto, Restauração, Blindagem, Manutenção e Conserto</option>

									</select>
								</div>
							</div>


							<div class="col-md-4" style="margin-top: 5px;">
								<div class="form-group">
									<label class="form-control-label">Trib. no Munic. do Prestador?</label>
									<select class="form-control" id="tribmunicprest">
										<option></option>
										<option>Sim</option>
										<option>Não</option>
									</select>
								</div>
							</div>

						</div> <!--  fechamento da col-xs-12 col-md-12 -->



						<div class="col-xs-12 col-md-12">

							<div class="col-md-8">
								<div class="form-group">
									<label class="control-label">Situação Tributária</label>
									<select class="form-control" id="sittribut">
										<option></option>
										<option>TI - Tributada Integralmente</option>
										<option>TIST - Tributada Integralmente e sujeita à Substituição Tributária</option>			
									</select>
								</div>
							</div>


							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Alíquota</label>
									<input type="text" value="" class="form-control" name="" id="aliquota" disabled="">
								</div>
							</div>

						</div>


						<div class="col-xs-12 col-md-12">


							<div class="col-md-12">
								<div class="form-group">
									<label class="form-control-label">Descrição do Serviço</label>
									<textarea type="text" value="" class="form-control" name="" id="descservico"></textarea>
								</div>
							</div>

						</div> <!-- fechamento da col-xs-12 col-md-12 -->


						<div class="col-xs-12 col-md-12">


							<div class="col-md-3">
								<div class="form-group">
									<label class="form-control-label">Valor do Serviço</label>
									<input type="text" class="form-control" name="" id="valor_servico">
								</div>

							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label class="form-control-label">Dedução</label>
									<input type="text" onkeyup="moeda(this);" class="form-control" id="deducao_servico" readonly>
								</div>

							</div>


							<div class="col-md-3">
								<div class="form-group">
									<label class="form-control-label">Valor do ISS Retido</label>
									<input type="text" onkeyup="moeda(this);" class="form-control" id="iss_servico" readonly>
								</div>
							</div>

						</div>  <!-- fechamento da col-xs-12 col-md-12 -->


						<div class="col-xs-12 col-md-12">


							<button type="button" id="add_linha" class="btn btn-success">Salvar/ Adicionar Serviço</button>
							<button type="button" onclick="limparcamposserv();" class="btn btn-info pull-right">Limpar Campos</button>


						</div> <!-- fechamento da col-xs-12 col-md-12 -->



					</div> <!-- fechamento da panel-body  -->
				</div> <!-- fechamento de panel panel-default -->


				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Serviços da NFs-e</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">

					  <!-- tabela com a lista de todas as notas fiscais emtidas  -->
							<table class="table table-condensed" id="tab_logic">
								<thead>
									<tr> 
										<td class="text-center">
											Serviço
										</td>
										<td class="text-center">
											Local Prestação
										</td>
										<td class="text-center">
											Trib. Mun. Prestador
										</td>
										<td class="text-center">
											Alíquota
										</td>
										<td class="text-center">
											Sit. Trib.
										</td>
										<td class="text-center">
											Valor Serviço
										</td>
										<td class="text-center">
											Dedução
										</td>
										<td class="text-center">
											Valor ISS Retido
										</td>
										<td class="text-center">
										</td>
									</tr>
								</thead>

								<tbody>     
									<tr id="addr0" class="text-center tablet"> <!-- aqui vão ser exibidas as linhas dinamicamente dos servidos gravados/salvos -->
									</tr>
									<tr id="addr1" class="text-center tablet">
								</tbody>
							</table>			

					</div>
				</div> <!-- fechamento de panel panel-default  -->

				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Tributos Federais</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">

						<div class="col-xs-12 col-md-12">

							<div class="col-md-2">
								<div class="form-group">
									<label class="form-control-label">IR</label>
									<input type="text" value="" class="form-control" name="" id="ir_servico">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label class="form-control-label">PIS</label>
									<input type="text" value="" class="form-control" name="" id="pis_servico">
								</div>
							</div>


							<div class="col-md-2">
								<div class="form-group">
									<label class="form-control-label">INSS</label>
									<input type="text" value="" class="form-control" name="" id="inss_servico">
								</div>
							</div>


							<div class="col-md-2">
								<div class="form-group">
									<label class="form-control-label">COFINS</label>
									<input type="text" value="" class="form-control" name="" id="cofins_servico">
								</div>
							</div>



							<div class="col-md-2">
								<div class="form-group">
									<label class="form-control-label">Contrib. Social</label>
									<input type="text" value="" class="form-control" name="" id="contrsocial_servico">
								</div>
							</div>



						</div> <!-- fechamento da col-xs-12 col-md-12 -->

					</div>
				</div> <!-- fechamento do panel panel-info -->



				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Observações</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">



						<div class="col-xs-12 col-md-12">

							<div class="col-md-12">
								<div class="form-group">
									<label class="form-control-label">Observações</label>
									<textarea type="text" value="" class="form-control" name="" id="textarea"></textarea>
									<h6>* As informações inseridas no campo "Observações" serão impressas no rodapé da NFS-e.</h6>
								</div>
							</div>

						</div> <!-- fechamento da col-xs-12 col-md-12 -->


					</div> <!-- fechamento da panel-body  -->
				</div> <!-- fechamento do panel panel-info  -->





				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Valores da Nota Fiscal</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">

						<div class="col-xs-12 col-md-12">


							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Valor Total da NFS-e</label>
									<input type="text" value="" onblur="valor_liquido();" class="form-control" name="" id="vtotalnfe">
									<h6>(Soma dos Itens - Calculado Automaticamente)</h6>
								</div>
							</div>

						</div> <!-- fechamento do col-xs-12 col-md-12 -->


						<div class="col-xs-12 col-md-12">

							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Valor Desconto</label>
									<input type="text" value="" onblur="valor_liquido();" class="form-control" name="" id="vdescontonf">
									<h6>(O valor do desconto não implica sobre o valor tributável da NFs-e)</h6>
								</div>
							</div>


						</div> <!-- fechamento do col-xs-12 col-md-12 -->


						<div class="col-xs-12 col-md-12">

							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Valor Líquido </label>
									<input type="text" value="" class="form-control" name="" id="vliquidonfe">
								</div>
							</div>

						</div> <!-- fechamento do col-xs-12 col-md-12 -->


					</div> <!-- fechamento da panel-body  -->
				</div> <!-- fechamento do panel panel-info  -->


				<div class="panel panel-info secundario" style="border: 1px solid transparent;box-shadow: 0 0px 0px;">
					<button type="button" class="btn btn-success emitir_nfe" onclick="emitenota();"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> Emitir NFs-e</button>
				</div>

           		<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">NFS-e Geradas</h3>
						<span class="pull-right clicavel"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</div>
					<div class="panel-body">
                <!-- tabela com a lista de todas as notas fiscais emtidas  -->
						<table id="panelnfes" class="table table-hover table-condensed" cellspacing="0" width="100%">  
							<thead>
								<tr><th class="text-center">Data</th> 
									<th class="text-center">Nº</th>   
									<th class="text-center">Série</th>
									<th class="text-center">Valor</th>
									<th class="text-center">Cadastro</th>
									<th class="text-center">Imprimir</th>
									<th class="text-center">Download NFs-e</th>
									<th class="text-center">Download XML</th>
									<th class="text-center">E-mail</th>
								</tr>
							</thead>
							<tbody class="text-center">
					     </tbody>
						</table>

					</div>
			   	</div> <!-- fechamento do panel panel-info  -->

				<br>


			</div> 
		</div>


		<!-- Janelas Modais Bootstrap -->

		<!-- Modal para consulta do contribuinte da NF -->

		<div class="modal fade bs-example-modal-lg" id="buscacontrib" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Buscar Contribuinte</h4>
					</div>
					<div class="modal-body">
						<table id="panelcontrib" class="table table-hover table-condensed" cellspacing="0" width="100%">  
							<thead>
								<tr>
									<th>Cod.</th>
									<th>CPF/CNPJ</th>   
									<th>Nome/R.Social</th>
									<th>Cidade</th>
									<th></th>							
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal para consulta do tomador de serviços da NF -->

		<div class="modal fade bs-example-modal-lg" id="buscatomador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Buscar Tomador de Serviços</h4>
					</div>
					<div class="modal-body"> 
						<table id="paneltomador" class="table table-hover table-condensed" cellspacing="0" width="100%">  
							<thead>
								<tr>
									<th>Cod.</th>
									<th>CPF/CNPJ</th>   
									<th>Nome/R.Social</th>
									<th>Cidade</th>
									<th></th>							
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

         <!-- Modal para consulta das cidades cadastradas -->

		<div class="modal fade bs-example-modal-lg" id="buscacidade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Buscar Cidade</h4>
					</div>
					<div class="modal-body">    

						<table id="panelcidades" class="table table-hover table-condensed" cellspacing="0" width="100%">  
							<thead>
								<tr>
									<th>Cidade</th>
									<th></th>							
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

      <!-- Modal para exibir a msg de callback de emissão da nota fiscal -->

		<div class="modal fade" id="avisos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Aviso!</h4>
					</div>
					<div class="modal-body">     
						<span id="callback_msg">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>


		</body>


		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/datatables.min.js"></script>
		<script type="text/javascript" src="js/dataTables.colReorder.min.js"></script>
		<script type="text/javascript" src="js/jquery.mask.min.js"></script>  



		</html>