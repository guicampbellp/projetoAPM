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
                <form class="form1" id="cadastrarAluno" action="ajax.php" method="post">
                    <div class="curso">
                        <select name="curso" id="curso" class="curso" type="text">
                            <option value=""></option>
                            <?php 
                                $lista = getCurso(null);
                                while($curso = $lista->fetch_array()) {
                                    echo '<option value="'.$curso['cd'].'">'.$curso['nome'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="turma">
                        <select name="turma" id="turma" class="turma" type="text">
                            <option value=""></option>
                            <?php 
                                $lista = getTurma(null);
                                while($turma = $lista->fetch_array()) {
                                    echo '<option value="'.$turma['cd'].'">'.$turma['nome'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="rm">
                        <input placeholder="RM" name="rm" id="rm" class="rm" type="text">
                    </div>
                    <div class="nome">
                        <input placeholder="NOME" name="nome" id="nome" class="nome" type="text">
                    </div>
                    <div class="dt_nasc">
                        <input placeholder="Data de Nascimento" name="dt_nasc" id="dt_nasc" class="dt_nasc" type="date">
                    </div>
                    <div class="arquivo">
                        <label class="arquivo1" for="arquivo">Arquivo</label>
                        <input type="file" placeholder="arquivo" name="arquivo" id="arquivo">
                    </div> 
                    <div class="enviar">
                        <input type="submit" value="Enviar" name="importar" id="importar">
                    </div> 
                </form>
            </div>
        </div>
        <div class="pesquisar">
            <form action="pesquisar" method="get">
                <div class="curso1">
                    <input type="search" placeholder="Curso" name="curso" id="curso1">
                </div>
                <div class="turma1">
                    <input type="search" placeholder="Turma" name="turma" id="turma1">
                </div>
                <div class="botao2">
                    <input type="submit" value="Listar" name="listar" id="listar">
                </div>
            </form>
        </div>
        <div class="tabela">
            <table id="alunos">
                <caption>
                    <h1>Alunos importados | Alunos encontrados</h1>
                </caption>
                <thead>
                    <tr>
                        <th>RM</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody id="tb_alunos">
                    <!-- Linhas serão preenchidas via AJAX -->
                </tbody>
            </table>
        </div>
        <div class="promover">
            <form class="form1" action="promover" method="post">
                <input type="submit" value="Promover aluno" name="promover" id="promover">
            </form>
        </div>
    </div>
    <script src="api.js"></script>
</body>
</html>