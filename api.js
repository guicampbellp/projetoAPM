let curso = document.querySelector('#curso');
let turma =document.querySelector('#turma');

curso.addEventListener('change', function(){
BuscarTurmas(this.value);
});

function BuscarTurmas (curso) {
	fetch('ajax.php?turmas='+curso)

	.then(function(retorno) {
return retorno.text(); // Retorna o conteúdo como texto
})
.then(function(texto) {
turma.innerHTML = texto;
})
.catch(function() {
console.log("Erro");
});
}

let f1 = document.querySelector('.form1');

f1.addEventListener('submit', function(event) {
event.preventDefault(); // Evita o envio padrão do formulário que faz recarregar ou direcionar a página
// Captura os dados do formulário
let formData = new FormData(this);
// Envia a solicitação POST usando fetch
fetch('ajax.php', {
method: 'POST',
body: formData
})
.then(response => {
return response.text();
})
.then(mensagem => {
console.log(mensagem);
alert(mensagem); // Exibe a resposta do servidor
});
});