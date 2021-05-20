// Form Cadastro
const avancar = document.querySelector('#avancar')
const voltar = document.querySelector('#voltar')
const slide = document.querySelector('.etapa')

avancar.addEventListener('click', () => {
    slide.style.marginLeft = '-50%'
})

voltar.addEventListener('click', () => {
    slide.style.marginLeft = '0%'
})

// Form Cadastro - Endereco
const cep = document.querySelector('#cep')
cep.addEventListener('blur', async () => {
	const value = cep.value 
	try{
        const cep = await fetch(`https://viacep.com.br/ws/${value}/json/`)
        const apiCEp = await cep.json()

		document.querySelector('#endereco').value = (apiCEp.logradouro)
		document.querySelector('#bairro').value = (apiCEp.bairro)
		document.querySelector('#cidade').value = (apiCEp.localidade)
		document.querySelector('#uf').value = (apiCEp.uf)
    }
    catch(error){
        console.log(error);
    }
})

