<?php
	include_once 'sessao_validar.php';
	$conn = mssql_connect("WIN-M6ED5FDKOS5", "sa", "SPJD2015") or die ("Erro ao conectar");

	$db_select = mssql_select_db ("SPJDADOS") or die ("Nao conseguiu selecionar a base de dados");
?>
