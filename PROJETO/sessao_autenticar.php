<?php
	$usuario = $_POST['usuario'];
	$senhausuario = $_POST['senhausuario'];
	
	$senhausuario = md5($senhausuario);
	include_once 'conexao.php';
			
	$result = mssql_query ("SELECT ID_USUARIO, NOME_USUARIO FROM USUARIOS WHERE NOME_USUARIO = '$usuario' AND SENHA = '$senhausuario'") 
	or die ("Nao foi encontrado o usuario informado");
		
	$row = mssql_fetch_array($result);

	$id_usuario = $row['ID_USUARIO'];
	$login  = $row['NOME_USUARIO'];

	// Se achou usuário, faz o login
	if ($login <> "") {

		// Inicializa a sessão
		session_start();

		// Usuário existe -> registra as informações na sessão
		$_SESSION['NOME_USUARIO'] = $row['NOME_USUARIO'];
		$_SESSION['ID_USUARIO']  = $row['ID_USUARIO'];

		mssql_close ($conexao);
		header("Location:mesa.php");
	} else {
		// Combinação usuário+senha não existe
		header("Location: index.php");
	}	
?>

