<?php
  if(isset ($_POST) && !empty($_POST)){
      if(isset($_POST['nome'], $_POST['sobrenome'], $_POST['cpf'], $_POST['rg'], $_POST['cep'], $_POST['uf'], $_POST['cidade'], $_POST['endereco'], $_POST['nro'] )){
        include_once 'conexao.php';

        $nome =       $_POST['nome'];
        $sobrenome  = $_POST['sobrenome'];
        @$idade =      $_POST['idade'];
        @$sexo =       $_POST['sexo'];
        @$fone =       $_POST['fone'];
        @$profissao =  $_POST['profissao'];
        $cpf =        $_POST['cpf'];
        $rg =         $_POST['rg'];
        $cep =        $_POST['cep'];
        $uf =         $_POST['uf'];
        $cidade =     $_POST['cidade'];
        $endereco =   $_POST['endereco'];
        $nro =        $_POST['nro'];
        @$complemento =$_POST['complemento'];
           
        mssql_query ("EXEC SP_INSERE_ENTIDADE '$nome','$sobrenome', '$idade', '$sexo','$fone','$profissao','$cpf','$rg','$cep','$uf','$cidade','$endereco','$nro','$complemento'")
        or die ("Ocorreu erro na insersao de entidade.");

        mssql_close ($conn);
      } 
  }
?>