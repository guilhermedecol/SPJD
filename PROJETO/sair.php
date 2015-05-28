<?php include_once 'sessao_validar.php';?>
<?php
	session_start();
	session_destroy();
	header("Location: index.php");
?>