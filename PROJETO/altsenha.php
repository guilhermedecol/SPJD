<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'sessao_validar.php';?> 
  <head>
    <meta charset="utf-8">
    <title>Simulador PROJUDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css"
    rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="icon" href="img/favicon.ico">
  </head>
  
  <body>
    <div class="navbar navbar-default navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></a>
          <span class="sr-only">Simulador de Processos Judiciais Eletrônicos</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <a class="navbar-brand" href="mesa.php">Simulador de Processos Judiciais Eletrônicos</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <p class="navbar-right navbar-text">(Beta)</p>
        </div>
      </div>
    </div>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></a>
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-left navbar-nav">
            <li>
              <a href="mesa.php">Início</a>
            </li>
          </ul>
          <ul class="nav navbar-left navbar-nav">
            <li>
              <a href="acoes.php">Cadastrar Ações 1º Grau</a>
            </li>
          </ul>
          <ul class="lead nav navbar-nav navbar-right">
            <div class="btn-group btn-group-lg">
              <a class="btn btn-link btn-xs dropdown-toggle" data-toggle="dropdown"> Painel <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="cadastrarusuario.php">Cadastrar usuário</a>
                </li>
                <li>
                  <a href="cadastrargrupo.php">Cadastrar grupo</a>
                </li>
                <li>
                  <a href="listausuarios.php">Relatório de usuários</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li>
                  <a href="altsenha.php">Alterar senha</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li>
                  <a href="sair.php">Sair</a>
                </li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">       
        <form class="form-horizontal">
          <fieldset>

          <!-- Form Name -->
          <legend>Editar Usuários</legend>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Usuário:</label>  
            <div class="col-md-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
              
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Nova senha:</label>
            <div class="col-md-4">
              <input id="passwordinput" name="passwordinput" type="password" placeholder="*******" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Confirmar senha:</label>
            <div class="col-md-4">
              <input id="passwordinput" name="passwordinput" type="password" placeholder="*******" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Ativo:</label>
            <div class="col-md-4"> 
              <label class="radio-inline" for="radios-0">
                <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                Sim
              </label> 
              <label class="radio-inline" for="radios-1">
                <input type="radio" name="radios" id="radios-1" value="2">
                Não
              </label>
            </div>
          </div>

          <!-- Button (Double) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
              <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
              <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
            </div>
          </div>

          </fieldset>
          </form>





      </div>
    </div>
  </body>

</html>