$(document).ready(function(){
	$('#formCadastro').submit(function(e){	
		e.preventDefault()
		let nome = $('#nome').val()
        let dataNasc = $('#dataNasc').val()
        let rg = $('#cpf').val()
        let cpf = $('#rg').val()
        let tel = $('#tel').val()
		let sexo = $('#sexo').val()
		let email = $('#email').val()
        let senha = $('#senha').val()
		let confirmSenha = $('#confirmSenha').val()
		
		$.ajax({
			method: 'POST', 
			url: 'http://localhost/tgi/app/cadastro/cadastro.controller.php', 
			data: {
				nome: nome, 
				dataNasc: dataNasc, 
				rg: rg, 
				cpf: cpf, 
				tel: tel,
				sexo: sexo, 
				email: email, 
				senha: senha, 
				confirmSenha: confirmSenha},
			dataType: 'json', 
			success: function(data){
				alert( data);
			}   
		}).done(function(res){
			console.log(res)
		})
	})
})

$(document).ready(function(){
	$('#formEndereco').submit(function(e){	
		e.preventDefault()
		let cep = $('#cep').val()
		let endereco = $('#endereco').val()
		let numero = $('#numero').val()
		let bairro = $('#bairro').val()
		let uf = $('#uf').val()
		let cidade = $('#cidade').val()
		let complemento = $('#complemento').val()
		$.ajax({
			method: 'POST', 
			url: 'http://localhost/tgi/app/cadastro/endereco.controller.php', 
			data: { 
				cep: cep, 
				endereco: endereco, 
				numero: numero, 
				bairro: bairro, 
				uf: uf, 
				cidade: cidade, 
				complemento: complemento },
			dataType: 'json', 
			success: function(data){
				alert( data);
			}   
		}).done(function(res){
			console.log(res)
		})
	})
})
$(document).ready(function () { 
	$("#rg").mask("99.999.999-9");
	$("#cpf").mask("999.999.999-99");
	$("#tel").mask("(99)99999-9999");
});
