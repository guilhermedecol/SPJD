<?php
	include_once 'sessao_validar.php';
	$user = 			$_POST['user'];
	$usersenha 	= 		$_POST['usersenha'];
	$usersenhaconf = 	$_POST['usersenha_conf'];
	$tipouser = 		$_POST['tipouser'];
	$registro = 		$_POST['registro'];
	$nomeuser = 		$_POST['nomeuser'];
	$sobrenomeuser = 	$_POST['sobrenomeuser'];
	$sexo = 			$_POST['sexo'];
	$idade = 			$_POST['idade'];
	$fone = 			$_POST['fone'];
	
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
		mssql_query ("EXEC SP_INSERE_USUARIO '$user', '$usersenha', $tipouser, '$registro', '$nomeuser', '$sobrenomeuser', $sexo, $idade, '$fone'")
		or die ("Ocorreu erro na insersao de usuario.");

		mssql_close ($conexao);
		header("Location:cadastrarusuario.php");
		}	
?>

