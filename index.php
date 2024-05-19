<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        display:flex;
        height: 100vh;
        justify-content:center ;
        align-items: center;
      }

    </style>
</head>
<body>
  <div class="login">
    <form class="form1" method="post">
        <input type="text" id="usuar" placeholder="Email" name="email"><br>
        <input type="password" id="sen" placeholder="Senha" name="senha"><br>

        <?php
          include('conexao.php');
          if($_POST) {
          Login($_POST['email'] , $_POST['senha']);
          }
        ?>
        <input type="submit" id="botao" value="Entrar"><br>
        <a href="menu.html">Esqueceu a senha?</a>

    </form>
  </div>
</body>
</html>