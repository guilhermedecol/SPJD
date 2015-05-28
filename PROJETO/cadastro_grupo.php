<?php
	include_once 'sessao_validar.php';
	$user = 			$_POST['user'];
	$usersenha 	= 		$_POST['usersenha'];
	$usersenhaconf = 	$_POST['usersenha_conf'];
	$aluno1 = 			$_POST['aluno1'];
	$matricula1 = 		$_POST['matricula1'];
	$aluno2 = 			$_POST['aluno2'];
	$matricula2 = 		$_POST['matricula2'];
	$aluno3 = 			$_POST['aluno3'];
	$matricula3 = 		$_POST['matricula3'];
	$aluno4 = 			$_POST['aluno4'];
	$matricula4 = 		$_POST['matricula4'];
	$aluno5 = 			$_POST['aluno5'];
	$matricul51 = 		$_POST['matricula5'];

	$usersenha = md5($usersenha);
	include_once 'conexao.php';
			
	$query = "SELECT NOME_USUARIO FROM USUARIOS WHERE NOME_USUARIO = '$user'";
	$result = mssql_query ($query) or die ("Query da busca do usuário não executou");
	
	$row = mssql_fetch_array($result);
	$login  = $row['NOME_USUARIO'];

	if ($login <> "") {
		echo "Usuário já cadastrado!";
		mssql_close ($conexao);
	} else {
		mssql_query ("EXEC SP_INSERE_GRUPO '$user', '$usersenha', '$aluno1', $matricula1, $aluno2, '$matricula2', '$aluno3', '$matricula3',	'$aluno4', '$matricula4', '$aluno5', '$matricula5'")
		or die ("Ocorreu erro na insersao de usuario.");

		mssql_close ($conexao);
		header("Location:cadastrargrupo.php");
		}	
?>

