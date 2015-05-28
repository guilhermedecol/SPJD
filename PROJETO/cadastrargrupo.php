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
        <form class="form-horizontal" action="cadastro_grupo.php" name="dados_novo_usario" method="post">
          <fieldset>

            <!-- Form Name -->
            <legend>Cadastrar Grupo de Alunos</legend>

            <!-- Prepended text-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedtext"></label>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-addon">*</span>
                  <span class="form-control disabled">Informações obrigatórias</span>
                </div>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="user">Usuário:</label>  
              <div class="col-md-2">
                <div class="input-group">
                  <input id="user" name="user" type="text" placeholder="usuário" class="form-control input-md" required="">
                  <span class="input-group-addon">*</span>
                </div>
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="usersenha">Senha:</label>
              <div class="col-md-2">
                <div class="input-group">
                  <input id="usersenha" name="usersenha" type="password" placeholder="senha" class="form-control input-md" required="">
                  <span class="input-group-addon">*</span>
                </div>
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="usersenhaconf">Confirmação da senha:</label>
              <div class="col-md-2">
                <div class="input-group">
                  <input id="usersenhaconf" name="usersenhaconf" type="password" placeholder="confirmação da senha" class="form-control input-md" required="">
                  <span class="input-group-addon">*</span>
                </div>
              </div>
            </div>

            <!-- Appended Input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="aluno1">Aluno 1:</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input id="aluno1" name="aluno1" class="form-control" placeholder="nome" type="text" required="">
                  <span class="input-group-addon"></span>
                  <input id="aluno1" name="matricula1" type="text" placeholder="número da matricula" class="form-control input-md" required="">
                </div> 
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="aluno2">Aluno 2:</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input id="aluno2" name="aluno2" class="form-control" placeholder="nome" type="text">
                  <span class="input-group-addon"></span>
                  <input id="aluno2" name="matricula2" type="text" placeholder="número da matricula" class="form-control input-md" required="">
                </div> 
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="aluno3">Aluno 3:</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input id="aluno3" name="aluno3" class="form-control" placeholder="nome" type="text">
                  <span class="input-group-addon"></span>
                  <input id="aluno3" name="matricula3" type="text" placeholder="número da matricula" class="form-control input-md" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="aluno4">Aluno 4:</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input id="aluno4" name="aluno4" class="form-control" placeholder="nome" type="text">
                  <span class="input-group-addon"></span>
                  <input id="aluno4" name="matricula4" type="text" placeholder="número da matricula" class="form-control input-md" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="alun52">Aluno 5:</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input id="aluno5" name="aluno5" class="form-control" placeholder="nome" type="text">
                  <span class="input-group-addon"></span>
                  <input id="aluno5" name="matricula5" type="text" placeholder="número da matricula" class="form-control input-md" required="">
                </div> 
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success" type="submit">Cadastrar</button>
                <button id="button2id" name="button2id" class="btn btn-inverse" type="reset">Cancelar</button>
              </div>
            </div>

          </fieldset>
        </form>


      </div>
    </div>
  </body>

</html>