<?php
	$tipo = $_POST['tipoParte'];
	$entidade_id = $_POST['carregar_entidade_id'];
	$representante_id = $_POST['carregar_representante_id'];
	$justGratuita = $_POST['justGratuita'];
	$reuPreso = $_POST['reuPreso'];

	include_once 'conexao.php';
	$sql = mssql_query("EXEC SP_INSERE_PARTES '$tipo', $entidade_id, $representante_id, $justGratuita, $reuPreso, $ref");
	$ref = mssql_result();
	echo $ref;

?>


