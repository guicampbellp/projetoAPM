<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <style>
.dash{
    background-color: white;
    color: black;
    display: flex;
    width: 1000px;
    height: 600px;
    background-color: rgb(255, 255, 255);
}

.quadrado {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.opcao {
    display: flex;
    flex-direction: row;
}

.opcao-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 5px;
    background-color: rgb(255, 255, 255);
    height: 80px;
    width: 85px;
}

.opcao-item img {
    width: 40px;
    height: 40px;
}

.opcao-item .texto {
    font-size: 9px; /* Tamanho da fonte ajustado */
    margin-top: 5px;
}

.opcao-2 textarea {
    width: 100%;
    height: 100%;
}
   </style>
    <title>Dashboard</title>
</head>
<body>
    <div class="pai">
        <div class="dash">
            <div class="dadosUser">
                <img src="imagens/login.png" width="200" height="200">
                <br>
                <p class="dadosp">
                    RM:<?php echo $_SESSION['rm'] ?> <br>
                    Nome:<?php echo $_SESSION['quem'] ?> <br>
                    Curso: <br>
                    Turma:<?php echo $_SESSION['turma'] ?> <br>
                </p>
                <div class="pai-2">
                    <div class="trocar">
                        <label for="trocarfoto">Trocar foto</label>
                        <input type="file" placeholder="trocarfoto" name="trocarfoto" ></input>
                    </div>
                    <div class="trocarsenha">
                        <input type="button" value="Trocar senha" name="trocarsenha" id="trocarsenha"></input>
                    </div> 
                </div>
            </div>
            <div class="quadrado">
                <div class="opcao">
                    <div class="opcao-item">
                        <a href="pedidos.html">
                            <img src="imagens/pedido-online.png" alt="Realizar Pedido">
                        </a>
                        <div class="texto">Realizar Pedido</div>
                    </div>
                    <div class="opcao-item">
                        <a href="pedidos.html">
                            <img src="imagens/internet-banking.png" alt="Internet Banking">
                        </a>
                        <div class="texto">Comprar Internet</div>
                    </div>
                    <div class="opcao-item">
                        <a href="pedidos.html">
                            <img src="imagens/armarioc.png" alt="Armário">
                        </a>
                        <div class="texto">Comprar armário</div>
                    </div>
                    <div class="opcao-item">
                        <a href="pedidos.html">
                            <img src="imagens/entrega-de-pedido.png" alt="Pedidos Realizados">
                        </a>
                        <div class="texto">Pedidos Realizados</div>
                    </div>
                    <div class="opcao-item">
                        <a href="pedidos.html">
                            <img src="imagens/historia.png" alt="Histórico de Pedidos">
                        </a>
                        <div class="texto">Histórico</div>
                    </div>
                </div>
                <div class="opcao-2">
                    <textarea name="" id="" cols="50" rows="27"></textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>