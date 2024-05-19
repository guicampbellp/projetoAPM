<?php
include('conexao.php'); //inclusão da conexão

if(isset($_GET['turmas'])) { //verificamos
$lista = getTurma($_GET['turmas']); //passamos o codigo para buscar as turmas do curso
$retorno = '';

while($turma = $lista->fetch_array())
{
    $retorno.='<option value="'.$turma['cd'].'">'.$turma['nome'].'</option>';
}
echo $retorno; //exibimos os resultados
}
if($_POST) {
    //verificamos se recebemos algum dos campos do cadastro
    if(isset($_POST['rm']) && isset($_POST['nome'])) {
    cadastrarAluno($_POST['id_turma'], $_POST['rm'], $_POST['nome'], $_POST['dt_nasc']);
    }
}
?>

