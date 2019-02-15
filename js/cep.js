// Completa CEP em cad_tomador.php

function completa_cep() {

	var cep_inputado = $('#cep').val();

	$.getJSON('https://webmaniabr.com/api/1/cep/'+cep_inputado+'/?app_key=8rOCThMZwSXi7zP5A438fYgshIuevmSH&app_secret=zl427Jno2HfyNta4GijZinssLrLvsXiFpdLvn0FeNKg8V8FP', function(data) {

		data = data;

		var cidade = data.cidade;
		var uf = data.uf;
		var espaco = " - ";

		var localuf = cidade.concat(espaco, uf);

		$('#endereco').val(data.endereco);
		$('#cidadeuf').val(localuf);
		$('#bairro').val(data.bairro);
		$('#complemento').val(data.complemento);

		$('#numero').focus();

	});
}