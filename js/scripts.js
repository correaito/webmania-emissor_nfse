/**************************** Scripts em JS **********************************/


//Chamar essa função para mascarar os numeros digitados nos campos de valores, através de jquery.mask.min.js 
$(document).ready(function(){
// valores de serviços e impostos
$('#valor_servico').mask('#.##0,00', {reverse: true});
$('#deducao_servico').mask('#.##0,00', {reverse: true});
$('#iss_servico').mask('#.##0,00', {reverse: true});
$('#ir_servico').mask('#.##0,00', {reverse: true});
$('#pis_servico').mask('#.##0,00', {reverse: true});
$('#inss_servico').mask('#.##0,00', {reverse: true});
$('#cofins_servico').mask('#.##0,00', {reverse: true});
$('#contrsocial_servico').mask('#.##0,00', {reverse: true});
// valores totais da nota fiscal
$('#vtotalnfe').mask('#.##0,00', {reverse: true});
$('#vliquidonfe').mask('#.##0,00', {reverse: true});
$('#vdescontonf').mask('#.##0,00', {reverse: true});
//mascara o cep
$('#cep').mask('#####-###', {reverse: true});

});



/*função para fechar o panel-heading (recolher os campos dos dados do contribuinte, nota fiscal, etc...) */
$(document).on('click', '.panel-heading span.clicavel', function(e){

    var $this = $(this); 

  if(!$this.hasClass('panel-collapsed')) {

    $this.parents('.panel').find('.panel-body').slideUp();

    $this.addClass('panel-collapsed');

    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    
  } else {

    $this.parents('.panel').find('.panel-body').slideDown();

    $this.removeClass('panel-collapsed');

    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    
  }
})



/* Relatório dos tomadores de serviço cadastrados para consulta na janela modal com id buscatomador - DataTables */
$(document).ready(function(){

  $('#paneltomador').DataTable({

    "order": [], // segue o ordenamento da consulta sql em qry_tomad.php

    "ajax":'queries/qry_tomad.php', //o arquivo qry_tomad.php gera um arquivo json a ser lido pelo Datatables

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // paginacao de resultados

    colReorder: true, // colunas podem ser reordenadas

    // posição dos elementos da tabela
    dom: "<'row'<'col-md-1'f>><'row'<'col-md-12't>><'row'<'col-md-4'l><'col-md-8'p>>",

    buttons: [

    {

      columns: ':visible',
// botoes para copiar e salvar em diversos formatos
      extend: 'copy', text: 'Copiar'},
      {extend: 'csv', text: 'CSV'},
      {extend: 'excel', text: 'Excel',
      messageTop: 'Lista de Tomadores de Serviço.'},
      {extend: 'pdf', text: 'PDF',



    },
    {extend: 'print', text: 'Imprimir'}

    ],

    "language": {    
 // tradução dos elementos do DataTables para portugues
      "lengthMenu": "Mostrando _MENU_ resultados por página",
      "zeroRecords": "Nada encontrado - desculpe",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Sem resultados avaliados",
      "infoFiltered": "(filtrado de _MAX_ total registros)",
      "paginate": {
        "first":      "Primeiro",
        "last":       "Anterior",
        "next":       "Próximo",
        "previous":   "Anterior"
      },
      "search":         "Buscar:",
    },

  });
});



/* Relatório dos contribuintes cadastrados para consulta na janela modal com id buscacontrib - DataTables */
$(document).ready(function(){

  $('#panelcontrib').DataTable({

    "order": [[ 0, "asc" ]], // segue o ordenamento em ordem crescente na primeira coluna "0"

    "ajax":'queries/qry_contrib.php', //o arquivo qry_contrib.php gera um arquivo json a ser lido pelo Datatables

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // paginacao de resultados

    colReorder: true, // colunas podem ser reordenadas

// posição dos elementos da tabela
    dom: "<'row'<'col-md-1'f>><'row'<'col-md-12't>><'row'<'col-md-4'l><'col-md-8'p>>",

    buttons: [

    {

      columns: ':visible',
// botoes para copiar e salvar em diversos formatos
      extend: 'copy', text: 'Copiar'},
      {extend: 'csv', text: 'CSV'},
      {extend: 'excel', text: 'Excel',
      messageTop: 'Lista de Contribuintes Cadastrados.'},
      {extend: 'pdf', text: 'PDF',



    },
    {extend: 'print', text: 'Imprimir'}

    ],
 // tradução dos elementos do DataTables para portugues
    "language": {    

      "lengthMenu": "Mostrando _MENU_ resultados por página",
      "zeroRecords": "Nada encontrado - desculpe",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Sem resultados avaliados",
      "infoFiltered": "(filtrado de _MAX_ total registros)",
      "paginate": {
        "first":      "Primeiro",
        "last":       "Anterior",
        "next":       "Próximo",
        "previous":   "Anterior"
      },
      "search":         "Buscar:",
    },

  });
});


/* Relatório das cidades cadastradas para consulta na janela modal (id buscacidade) - DataTables */
$(document).ready(function(){

  $('#panelcidades').DataTable({

    "order": [[ 0, "asc" ]], // segue o ordenamento em ordem crescente na primeira coluna "0"

    "ajax":'queries/qry_cidade.php', //o arquivo qry_cidade.php gera um arquivo json a ser lido pelo Datatables

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // paginacao de resultados

    colReorder: true, // colunas podem ser reordenadas

    // posição dos elementos da tabela
    dom: "<'row'<'col-md-1'f>><'row'<'col-md-12't>><'row'<'col-md-4'l><'col-md-8'p>>", 

    buttons: [

    {

      columns: ':visible',
 // botoes para copiar e salvar em diversos formatos
      extend: 'copy', text: 'Copiar'},
      {extend: 'csv', text: 'CSV'},
      {extend: 'excel', text: 'Excel',
      messageTop: 'Lista de Cidades Cadastradas.'},
      {extend: 'pdf', text: 'PDF',

    },
    {extend: 'print', text: 'Imprimir'}

    ],
 // tradução dos elementos do DataTables para portugues
    "language": {    

      "lengthMenu": "Mostrando _MENU_ resultados por página",
      "zeroRecords": "Nada encontrado - desculpe",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Sem resultados avaliados",
      "infoFiltered": "(filtrado de _MAX_ total registros)",
      "paginate": {
        "first":      "Primeiro",
        "last":       "Anterior",
        "next":       "Próximo",
        "previous":   "Anterior"
      },
      "search":         "Buscar:",
    },

  });
});



/* Relatório das notas fiscais emitidas em consul_nfes.php - DataTables */
$(document).ready(function(){

  $('#consulnfes').DataTable({

    "order": [], 

    "ajax":'queries/qry_nfesmiss.php', //o arquivo qry_nfesmiss.php gera um arquivo json a ser lido pelo Datatables

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // paginacao de resultados

    colReorder: true, // colunas podem ser reordenadas

    // posição dos elementos da tabela
    dom: "r<'row'<'col-md-3'B><'col-md-9'f>>t<'row'<'col-md-4'l><'col-md-8'p>>", 

    buttons: [

    {

      columns: ':visible',
 // botoes para copiar e salvar em diversos formatos
      extend: 'copy', text: 'Copiar'},
      {extend: 'csv', text: 'CSV'},
      {extend: 'excel', text: 'Excel',
      messageTop: 'Lista de NFSe emitidas.'},
      {extend: 'pdf', text: 'PDF',

    },
    {extend: 'print', text: 'Imprimir'}

    ],

 // tradução dos elementos do DataTables para portugues
    "language": {    

      "lengthMenu": "Mostrando _MENU_ resultados por página",
      "zeroRecords": "Nada encontrado - desculpe",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Sem resultados avaliados",
      "infoFiltered": "(filtrado de _MAX_ total registros)",
      "paginate": {
        "first":      "Primeiro",
        "last":       "Anterior",
        "next":       "Próximo",
        "previous":   "Anterior"
      },
      "search":         "Buscar:",
    },

  });
});



/* Relatório dos tomadores de serviço cadastrados para consulta na janela modal com id buscatomador - DataTables */
$(document).ready(function(){

  $('#panelnfes').DataTable({

    "order": [], // segue o ordenamento da consulta sql em qry_tomad.php

    "ajax":'queries/qry_notaemiss.php', //o arquivo qry_tomad.php gera um arquivo json a ser lido pelo Datatables

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // paginacao de resultados

    colReorder: true, // colunas podem ser reordenadas

    // posição dos elementos da tabela
    dom: "t",

    buttons: [

    {

      columns: ':visible',
// botoes para copiar e salvar em diversos formatos
      extend: 'copy', text: 'Copiar'},
      {extend: 'csv', text: 'CSV'},
      {extend: 'excel', text: 'Excel',
      messageTop: 'Lista de Tomadores de Serviço.'},
      {extend: 'pdf', text: 'PDF',



    },
    {extend: 'print', text: 'Imprimir'}

    ],

    "language": {    
 // tradução dos elementos do DataTables para portugues
      "lengthMenu": "Mostrando _MENU_ resultados por página",
      "zeroRecords": "Nada encontrado - desculpe",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Sem resultados avaliados",
      "infoFiltered": "(filtrado de _MAX_ total registros)",
      "paginate": {
        "first":      "Primeiro",
        "last":       "Anterior",
        "next":       "Próximo",
        "previous":   "Anterior"
      },
      "search":         "Buscar:",
    },

  });
});





// Envio dos dados cadastrais do tomador de serviços para a tabela 'tomador' no bd
$(document).ready(function(){
  $('#cadtomador').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "post",
      url: "inputs/bd_cadtomador.php",
      data: dados,
      success: function(data) {
        $('#cadtomadorsucess').modal(); /*abre o modal de id cadtomadorsucess*/
        $('#aviso').text(data); /*envia a mensagem do callback para o id 'aviso'*/        
      }
    });      
    return false;
  });
});


// Envio dos dados cadastrais do contribuinte para a tabela 'contribuinte' no bd
$(document).ready(function(){
  $('#cadcontrib').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "post",
      url: "inputs/bd_cadcontrib.php",
      data: dados,
      success: function(data) {
        $('#cadcontribsucess').modal(); /*abre o modal de id cadtomadorsucess*/
        $('#aviso').text(data); /*envia a mensagem do callback para o id 'aviso'*/        
      }
    });      
    return false;
  });
});



/*importa os dados do contribuinte para a campos da nota fiscal assim que clicado no botão incluir na janela de 
consulta de contribuinte*/
function incluircontrib(codigo) { 

  $.post("queries/dat_contrib.php", {codigo: codigo}, function(retorno) {

    dados = retorno.trim().split("*");

    var cnpj = dados[6];

    $('#razao').val(dados[1]);
    $('#endereco').val(dados[0]);
    $('#cep').val(dados[2]);
    $('#bairro').val(dados[3]);
    $('#cidade').val(dados[4]);
    $('#codigo').val(dados[5]);
    $('#prazo').val('Dia 15 em relação ao mês subsequente à emissão.');
    $('#cnpj').val(cnpj);

  $('#buscacontrib').modal('hide'); /*fecha janela modal de consulta do contribuinte (id buscacontrib)*/


});
}


/*importa os dados do tomador de serviços para a campos da nota fiscal assim que clicado no botão incluir na janela de 
consulta de tomador*/
function incluirtomad(codigo) { 

  $.post("queries/dat_tomad.php", {codigo: codigo}, function(retorno) {

    dados = retorno.trim().split("*");

    $('.panel_tomador').show();

    $('#nome_tomador').text(dados[1]);
    $('#razao_tomador').val(dados[1]);
    $('#codigo_tomador').val(dados[5]);
    $('#endereco_tomador').text(dados[0]);
    $('#bairro_tomador').text(dados[3]);
    $('#cidadeuf_tomador').text(dados[4]);
    $('#codigo').text(dados[5]);
    $('#cnpj_tomador').text(dados[6]);
    $('#email_tomador').text(dados[7]);

  $('#buscatomador').modal('hide'); /*fecha janela modal com id buscatomador*/


});
}

//atribui uma aliquota e seleciona sim ou não para trib no municipio do prestador conf serviço 
// selecionado no select id listserv//
function aliquota() { 

var servico = $('#listserv').val();

$.post("queries/dat_aliquota.php", {servico: servico}, function(retorno) {

  dados = retorno.trim().split("*");


  $('#tribmunicprest').val(dados[1]);
  $('#aliquota').val(dados[0]);
  $('#deducao_servico').val(dados[7]);
  $('#iss_servico').val(dados[8]);

});
}


/*importa a cidade para o campo "Local de Prestação de Serviço" da nota fiscal assim que clicado no botão incluir na janela de 
consulta de cidade*/
function incluircidade(id) { 

  $.post("queries/dat_cidade.php", {id: id}, function(retorno) {

  dados = retorno.trim().split("*");

  $('#cidadeprestserv').val(dados[0]);
  $('#idcidadeprest').val(dados[1]);

  $('#buscacidade').modal('hide'); /*fecha janela modal de consulta do tomador (id buscatomador)*/


});
}


// apos clicar em Salvar/ Adicionar Serviço cria uma linha e vai tabelando a lista de serviços 
// populados nos campos das área Serviço
$(document).ready(function(){
  var i=0;
  $("#add_linha").click(function(){

    // captura os valores dos campos populados na área Serviços
    var cidade = $('#idcidadeprest').val();
    var servico = $('#listserv').val();
    var tribmunicprest = $('#tribmunicprest').val();
    var sittribut = $('#sittribut').val();
    var aliquota = $('#aliquota').val();
    var descservico = $('#descservico').val();
    var vservico = $('#valor_servico').val();
    var deduservico = $('#deducao_servico').val();
    var issservico = $('#iss_servico').val();

// verifica se todos os campos foram populados antes de tabelar os serviços
if (cidade == '') { 

  alert('Falta incluir um local de prestação de serviço');
}

else if (servico == '') { 

  alert('Falta selecionar um serviço');
}

else if (sittribut == '') { 

 alert('Falta incluir uma situação tributária');
}

else if (descservico == '') {

  alert('Falta incluir uma descrição do serviço');
}

else if (vservico == '') {

  alert('Falta incluir um valor para o serviço');


} else {


   //  importa da tabela 'aliquotas' os impostos respectivos de cada serviço e preenche automaticamente
   // os campos da área Tributos Federais
   $.post("queries/dat_aliquota.php", {servico: servico}, function(retorno) {

     dados = retorno.trim().split("*");

     $('#ir_servico').val(dados[2]);
     $('#pis_servico').val(dados[3]);
     $('#inss_servico').val(dados[4]);
     $('#cofins_servico').val(dados[5]);
     $('#contrsocial_servico').val(dados[6]);

   });


      // cria dinamicamente uma linha com os dados populados nos campos de serviço da nota fiscal //
      $('#addr'+i).html("<td class=\"servico\">"+servico+"</td> <td class=\"cidade\">"+cidade+"</td> <td class=\"tribmunicprest\">"+tribmunicprest+"</td> <td class=\"aliquota\">"+aliquota+"</td> <td class=\"sittribut\">"+sittribut+"</td> <td class=\"vservico\">"+vservico+"</td> <td class=\"deduservico\">"+deduservico+"</td> <td class=\"issservico\">"+issservico+"</td><td style=\"display:none\" class=\"descservico\">"+descservico+"</td><td><button class=\"btn btn-danger remover\"><i class=\"fa fa-trash-o\"></i> Excluir</button></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 



      // apos tabelar os serviços limpa todos os campos //
     $('#idcidadeprest').val('');
     $('#listserv').val('');
     $('#tribmunicprest').val('');
     $('#sittribut').val('');
     $('#aliquota').val('');
     $('#descservico').val('');
     $('#valor_servico').val('');
     $('#deducao_servico').val('');
     $('#iss_servico').val('');
     $('#cidadeprestserv').val('');}

   });
 



//remove dinamicamente a linha criada quando 
    // clicado no botão remover //
    $("#tab_logic").on("click", ".remover", function(e){ 
     
      $(this).closest('tr').remove(); 

       // e zera os impostos federais
       $('#ir_servico').val('');
       $('#pis_servico').val('');
       $('#inss_servico').val('');
       $('#cofins_servico').val('');
       $('#contrsocial_servico').val('');

     });
  });



//essa função ira limpar todos os campos populados na area de Serviço da nfe 
// assim que clicado no botão Limpar Campos//
  function limparcamposserv(){  

      $('#idcidadeprest').val('');
      $('#listserv').val('');
      $('#tribmunicprest').val('');
      $('#sittribut').val('');
      $('#aliquota').val('');
      $('#descservico').val('');
      $('#valor_servico').val('');
      $('#deducao_servico').val('');
      $('#iss_servico').val('');
      $('#cidadeprestserv').val('');

}

// função que vai calcular o valor liquido da nota fiscal na ultima etapa antes da emissão //
function valor_liquido() {

// captura os values dos campos do total da nfe e value do descontoalc

totalnfe = $('#vtotalnfe').val();
vdescontonf = $('#vdescontonf').val();

if (!vdescontonf) {

$('#vliquidonfe').val(totalnfe);

} else {

valor_liq = (parseInt(totalnfe) - parseInt(vdescontonf));

$('#vliquidonfe').val(valor_liq.toFixed(2).replace('.',','));

}
}



// envio dos dados para emissao da nota fiscal eletronica
function emitenota() {  

  var nfe_number = Math.floor(Math.random() * 1000 + 1);
  var cnpj_contrib = $('#cnpj').val();
  var prazo = $('#prazo').val();
  var iss_compt = $('#iss_compt').val();
  var serienfe = $('#serienfse').val();
  var codigo_tomador = $('#codigo_tomador').val();
  var observacoes = $('#textarea').val();
  var totalnfse = $('#vtotalnfe').val();
  var desconto =$('#vdescontonf').val();
  var vliquidonfse = $('#vliquidonfe').val();


  $.post("inputs/bd_emissaonfse.php", {

    cnpj_contrib: cnpj_contrib,
    prazo: prazo,
    iss_compt: iss_compt,
    serienfe: serienfe,
    codigo_tomador: codigo_tomador,
    observacoes: observacoes,
    totalnfse: totalnfse,
    desconto: desconto,
    vliquidonfse: vliquidonfse,
    nfe_number: nfe_number

  }, function(retorno) {

    $('#avisos').modal();
    $('#callback_msg').text(retorno);
    $('#panelnfes').DataTable().ajax.reload();  

  });

// varre as linhas da tabela de serviços gravados e envia os dados para a tabela 'servico' atralados ao nr da nota fiscal
$('.tablet').each(function(){

  var servico = $(this).find('.servico').text();
  var cidade = $(this).find('.cidade').text();
  var tribmunicprest = $(this).find('.tribmunicprest').text();
  var aliquota = $(this).find('.aliquota').text();
  var sittribut = $(this).find('.sittribut').text();
  var vservico = $(this).find('.vservico').text();
  var deduservico = $(this).find('.deduservico').text();
  var descservico = $(this).find('.descservico').text();
  var issservico = $(this).find('.issservico').text();


  // esse metodo if esta sendo usado apenas para impedir que a indexacao da proxima linha .tablet 
// seja gravado no bd com colunas vazias (ainda em analise para modificar esse metodo)
 if (servico == '') {} 

  else {

  $.post("inputs/bd_servico.php", {

    servico: servico,
    cidade: cidade,
    tribmunicprest: tribmunicprest,
    aliquota: aliquota,
    sittribut: sittribut,
    vservico: vservico,
    deduservico: deduservico,
    issservico: issservico,
    nfe_number: nfe_number,
    descservico: descservico


  }, function(retorno) {


  

  });
}
}); 


} // fechamento da function emitenota
