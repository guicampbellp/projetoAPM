<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alunos</title>
</head>
<body>
    <div class="paizao">
        <div class="tudo">
            <div class="importe">
                <form class="form1" action="">
                <div class="curso">
                    <select name="curso" id="curso" class="curso" type="text">
                        <option></option>
                    <?php 
                            $lista = getCurso(null);
                            while($curso = $lista->fetch_array())
                            {
                                echo '<option value="'.$curso['cd'].'">'.$curso['nome'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="turma">
                <select name="turma" id="turma" class="turma" type="text">
                <option></option>
                    <?php 
                            $lista = getTurma(null);
                            while($turma = $lista->fetch_array())
                            {
                                echo '<option value="'.$turma['cd'].'">'.$turma['nome'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="rm">
                <input placeholder="RM" name="rm" id="turma" class="rm" type="text">
                </div>
                <div class="rm">
                <input placeholder="NOME" name="nome" id="turma" class="nome" type="text">
                </div>
                <div class="rm">
                <input placeholder="Data" name="data" id="turma" class="data" type="date">
                </div>
                <div class="arquivo">
                    <label class="arquivo1" for="arquivo">Arquivo</label><input type="file" placeholder="arquivo" name="arquivo" id="arquivo">
                </div> 
                <div class="enviar">
                    <input type="submit" value="Enviar" name="importar" id="importar">
                </div> 
                </form>
            </div>
        </div>
        <div class="pesquisar">
            <form action="pesquisar">
                <div class="curso1">
                    <input type="search" placeholder="Curso" name="curso" id="curso1">
                </div>
                <div class="turma1">
                    <input type="search" placeholder="Turma" name="turma" id="turma1">
                </div>
                <div class="botao2">
                    <input type="submit" value="Listar" name="listar" id="listar">
            </form>
        </div>
        <div class="tabela">
            <table id="alunos">
                <caption>
                    <H1>Alunos importados | Alunos encontrados</H1>
                </caption>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="promover">
            <form class="form1" action="promover">
                <input type="submit" value="Promover aluno" name="promover" id="promover">
                </input>
            </form>
        </div>
    </div>
    <script src="api.js"></script>
</body>
</html>