<?php
  session_start();
  if (!(isset($_SESSION['NOME_USUARIO']) AND isset($_SESSION['ID_USUARIO']))) {
    header("location: index.php");
  }
?>