$(document).ready(function(){
	$('#formCadastro').submit(function(e){	
		e.preventDefault()
		let nome = $('#nome').val()
        let dataNasc = $('#dataNasc').val()
        let rg = $('#rg').val()
        let cpf = $('#cpf').val()
        let tel = $('#tel').val()
		let sexo = $('#sexo').val()
		let email = $('#confirmSenha').val()
        let senha = $('#senha').val()
		let confSenha = $('#confSenha').val()
		$.ajax({
			method: 'POST', 
			url: 'valida.php', 
			data: { nome: nome, dataNasc: dataNasc, rg: rg, cpf: cpf, tel: tel, sexo: sexo, email: email, senha: senha, confSenha: confSenha},
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
			url: 'valida.php', 
			data: { cep: cep, endereco: endereco, numero: numero, bairro: bairro, uf: uf, cidade: cidade, complemento},
			dataType: 'json', 
			success: function(data){
				alert( data);
			}   
		}).done(function(res){
			console.log(res)
		})
	})
})

