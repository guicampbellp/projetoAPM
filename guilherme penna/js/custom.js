// Receber o seletor do formulário
const cadForm = document.getElementById("cad-usuario-form");

// Salvar os dados do formulário no localStorage
cadForm.addEventListener("submit", async (e) => {

    // Não recarregar a página
    e.preventDefault();
    
    // Receber os dados do formulário
    var nome_usuario = document.getElementById("nome_usuario").value;
    var email_usuario = document.getElementById("email_usuario").value;
    var senha_usuario = document.getElementById("senha_usuario").value;


    // Salvar no localStorage
    localStorage.setItem("nome", JSON.stringify({nome_usuario}));
    localStorage.setItem("email", JSON.stringify({email_usuario}));
    localStorage.setItem("senha", JSON.stringify({senha_usuario}));
    

    // Recuperar a informações do registro do localStorage
    var nome_localstorage = localStorage.getItem("nome");
    var email_localstorage = localStorage.getItem("email");
    var senha_localstorage = localStorage.getItem("senha");

    // Converte a string JSON em um objeto JavaScript
    var nome_usuario = JSON.parse(nome_localstorage);
    var email_usuario = JSON.parse(email_localstorage);
    var senha_usuario = JSON.parse(senha_localstorage);
    

    // Enviar para o HTML os dados salvo no localStorage
    document.getElementById("conteudo").innerHTML = "Nome: " + nome_usuario.nome_usuario + "<br>E-mail: " + email_usuario.email_usuario + "<br> Senha: " + senha_usuario.senha_usuario + "<br>";

    // para remover uma key, trocar a key "senha" por outra caso deseje excluir outra
    localStorage.removeItem("senha");

    // para modificar um dado ou atualizar, exemplo está pegando a key senha e colocando o valor dela de 123
    localStorage.setItem("senha",123)

});