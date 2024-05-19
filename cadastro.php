<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
    <label for="nome">Nome</label> 
    <input type="text" name="nome"><br>
    <label for="email">Email</label>
    <input type="text" name="email"><br>
    Assunto:<br>
    <select name="assunto">
        <option>Dúvidas</option>
        <option>Criticas</option>
        <option>Sugestões</option>
    </select>
    <br>
    Mensagem: <br>
    <textarea name="msg"></textarea>
    <br>
    <button>Enviar</button>
</form>

<?php
    if($_POST) {
        $nome = $_POST['name'];
        $email=$_POST['email'];
        $assunto = $_POST['assunto'];
        $msg =$_POST['msg'];
        $texto .= "Nome: $name.";
        $texto .= "Email: $email.";
        $texto .= "Assunto: $assunto.";
        $texto .= "Mensagem: $msg.";
        $para= 'seu@email.com';
        if (mail ($para, $assunto, $texto)) {
        echo "Mensagen enviada.";
        }else{
        echo "Erro ao enviar Mensagem";
        }
    }
?>

</body>
</html>