# webmania-emissor_nfse
Emissor de Nota Fiscal Eletrônica Webmania

Histórico de atualizações 

Data: 01/06/2015	
Autor: Alan Garmatter
Versão: 1.0
Descrição: Versão inicial

1. Introdução

Simulação desenvolvida para atender requisição de teste da WebmaniaBR® utilizando framework Bootstrap e linguagens PHP5, CSS3 e Mysql.

2. Estrutura de diretórios e subdiretórios

A estrutura de diretórios e subdiretórios contendo os arquivos da ferramenta Emissor de NFse - Webmania e os arquivos, contendo o código fonte comentado, da ferramenta Emissor de NFse - Webmania, são descritos nas subseções a seguir.

2.0.0. index.php: formulário de emissão da nota fiscal eletrônica;
2.0.1. cad_contribuinte.php: formulário de cadastro de contribuinte de serviços;
2.0.2. cad_tomador.php: formulário de cadastro do tomador de serviços;
2.0.3. config.php: arquivo de configuração do banco de dados, contendo as credenciais e diretório de acesso;
2.0.4. consul_nfes.php: Exibe a listagem geral de notas fiscais emitidas.

2.1. Diretório css
2.1.1. style.css: folha de estilos com formatações adicionais especificas para campos, componentes e tabelas;
2.1.2. datatables.min.css: Contém formatações do jquery DataTables;
2.1.3. Demais arquivos compõem estilos e formatações default do framework Bootstrap.

2.2 Diretório fonts
Arquivos com a coleção de ícones do Bootstrap;

2.2. Diretório inputs
2.2.1. bd_cadcontrib.php: Recebe via post dados preenchidos no form de cadastro do Contribuinte, e salva no BD;
2.2.2. bd_cadtomador.php: Recebe via post dados preenchidos no form de cadastro do Tomador de Serv., e salva no BD;
2.2.3. bd_emissaonfse.php: Recebe via post dados preenchidos no form de emissão da nota fiscal, e salva no BD;
2.2.4. bd_servico.php: Recebe via post dados de serviço gravados no formulário de emissão da NF, e salva no BD.

2.3. Diretório js
2.3.1. cep.js: aquivo consulta dados CEP/IBGE utilizando o API da WebmaniaBR®.
2.3.2. scripts.js: diversos scripts em javascript e jquery para funcionalidades gerais do sistema (arquivo comentado);
2.3.3. validacaoCNPJ.js: arquivo de validação e mascara de CPF/CNPJ;
2.3.4. bootstrap.js: arquivo essencial para a funcionalidade dos componentes interativos como tooltips, popovers, modais, e mais;
2.3.5. bootstrap.min.js: arquivo mimeografado essencial para a funcionalidade dos componentes interativos como tooltips, popovers, modais, e mais;
2.3.6. jquery.min.js: arquivo mimeografado com biblioteca de funções JavaScript;
2.3.7. jquery.mask.min.js: arquivo jquery contendo funções para mascarar campos como CEP, CPF, CNPJ, etc.
2.3.8. dataTables.buttons.min.js, buttons.flash.min.js, buttons.html5.min.js, jszip.min.js: contem funcionalidades botões do jquery DataTables para salvar em diversos formados e empacotar via zip;
2.3.9. buttons.print.min.js: contem funcionalidades botão imprimir do jquery DataTables;
2.3.10. dataTables.colReorder.min.js: contem funcionalidades para reordenação colunas do jquery DataTables;

2.4 Diretório queries
2.4.1. dat_aliquota.php: retorna informações de consulta p/ autocompletar dados aliquota no form nota fiscal;
2.4.2. dat_cidade.php: retorna informações de consulta p/ autocompletar dados cidade no form nota fiscal;
2.4.3. dat_contrib.php: retorna informações de consulta p/ autocompletar dados contribuinte no form nota fiscal;
2.4.4. dat_tomad.php: retorna informações de consulta p/ autocompletar dados tomador serviços no form nota fiscal;
2.4.5. qry_cidade.php: gera arquivo em formato json a ser lido pelo jquery Datatables em js/scripts.js;
2.4.6. qry_contrib.php: gera arquivo em formato json a ser lido pelo jquery Datatables em js/scripts.js;
2.4.7. qry_nfesmiss.php: gera arquivo em formato json a ser lido pelo jquery Datatables em js/scripts.js;
2.4.8. qry_notaemiss.php: gera arquivo em formato json a ser lido pelo jquery Datatables em js/scripts.js;
2.4.8. qry_tomad.php: gera arquivo em formato json a ser lido pelo jquery Datatables em js/scripts.js;

2.5 Diretório sql
corre034_webmania.sql: arquivo contendo bd e tabelas do sistema.

3. Instalação de Emissor de NFse - Webmania
A ferramenta Emissor de NFse - Webmania está disponível para download e contribuição livremente. Esta seção mostra passo a passo como instalar e configurar uma instância desta ferramenta.

3. Requisitos:
• PHP 5 (o desenvolvimento foi realizado com a versão 5.2.17 e nenhum teste foi realizado com outra versão);
• MYSQL 5 (o desenvolvimento foi realizado com a versão 5.6.41-84.1 e nenhum teste foi realizado com outra versão)

4. Instalação
1. Fazer o Upload de todos os arquivos para a raiz da unidade destino.
2. Fazer a importação do BKP completo do BD para o servidor Mysql disponivel em sql/corre034_webmania.sql
3. Configurar os parâmetros de conexão para acessar a base de dados.

Editar o arquivo config.php para inserir as informações da base de dados:

username = root ou usuario padrão de acesso ao bd
host = ns primario
database = nome do bd
senha = password de acesso ao bd


