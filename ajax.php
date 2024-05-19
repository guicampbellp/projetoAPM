<?php
include('conexao.php'); //inclusão da conexão

if(isset($_GET['turmas'])) { //verificamos
    $lista = getTurma($_GET['turmas']); //passamos o codigo para buscar as turmas do curso
    $retorno = '';

    while($turma = $lista->fetch_array()) {
        $retorno .= '<option value="'.$turma['cd'].'">'.$turma['nome'].'</option>';
    }
    echo $retorno; //exibimos os resultados
}

if($_POST) {
    //verificamos se recebemos algum dos campos do cadastro
    if(isset($_POST['rm']) && isset($_POST['nome']) && isset($_POST['dt_nasc']) && isset($_POST['turma'])) {
        cadastrarAluno($_POST['turma'], $_POST['rm'], $_POST['nome'], $_POST['dt_nasc']);
    }
}

if(isset($_GET['alunos'])) {
    $lista = getAlunos($_GET['alunos']);
    $retorno = '';
    while($aluno = $lista->fetch_array()) {
        $retorno .= '<tr>
            <td>'.$aluno['rm'].'</td>
            <td>'.$aluno['nome'].'</td>
            <td>'.$aluno['dt_nasc'].'</td>
            <td>'.$aluno['turma'].'</td>
            <td>#</td>
        </tr>';
    }
    echo $retorno; //exibimos os resultados
}
?>