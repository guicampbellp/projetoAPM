<?php
session_start();
//dados da conexão
$server = 'localhost';
$user = 'root';
$pass = '462263';
$db = 'secretaria';

//implementando a conexão
$conexao = new mysqli($server,$user,$pass,$db);

//verificando a conexão
if(!$conexao){
	echo "Erro ao conectar: ".$conexao->error;
}



function Login($usuario,$senha){
	//comando que será enviado ao banco
	$comando ='SELECT * FROM aluno
				WHERE rm = '.$usuario.'
				AND dt_nasc = "'.$senha.'"';
	//comando que efetivamente se comunica com o banco e retorna
	$retorno = $GLOBALS['conexao']->query($comando);
	//verificamos se foi encontrado 
	if($retorno->num_rows > 0){
		//achou alguem
		$quem = $retorno->fetch_array();
		//guardando os dados do usuario encontrado
		$_SESSION['entrou'] = "sim";
		$_SESSION['quem'] = $quem['nome'];
		$_SESSION['rm'] = $quem['rm'];
		$_SESSION['dt_nasc'] = $quem['dt_nasc'];
		$_SESSION['turma'] = $quem['id_turma'];
		//redirecionando o usuario
		header('location: dash.php');

	}else{
		//não existe
		echo "Dados inválidos";
	}				

}

function armariosLoad(){
	$comando = 'SELECT * FROM armario';
	$retorno = $GLOBALS['conexao']->query($comando);
	return $retorno;
}

function getCurso($cd)
{
	$sql =	'SELECT * FROM curso';
	if($cd != null)
		{
			$sql.='WHERE cd=' .$cd;
		}
	$retorno = $GLOBALS['conexao']->query($sql);
	return $retorno;
}


function getTurma($curso)
{
	$sql =	'SELECT * FROM turma';
	if($curso != null)
		{
			$sql.=' WHERE id_curso=' .$curso;
		}
	$retorno = $GLOBALS['conexao']->query($sql);
	return $retorno;
}

function cadastrarAluno($id_turma, $rm, $nome, $dt_nasc) {
	//a senha inicial do aluno será seu RM
	$sql='INSERT INTO aluno VALUES('.$rm.',"'.$nome.'","'.$dt_nasc.'","'.$rm.'",'.$turma.')';
	$retorno = $GLOBALS['conexao']->query($sql);
	if($retorno){
	echo "Cadastrado com sucesso";
	}else{
	echo "Erro ao cadastrar: ".$GLOBALS['conexao']->error;
	}
}
?>