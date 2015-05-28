<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'sessao_validar.php';?>  
  <head>
    <meta charset="utf-8">
    <title>Simulador PROJUDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
            <li class="active">
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
        <div class="col-md-7">
          <h2 class="text-left">
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            <spam></spam>Mesa do Advogado</h2>
          <hr>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <a class="active btn btn-block btn-default btn-lg" data-toggle="modal" href="#"><span class="glyphicon glyphicon-refresh" draggable="true"></span>Atualizar</a>
        </div>
      </div>
      <div class="row">
          <div class="form-group">
            <label class="col-md-9 control-label" for="prependedtext"></label>
            <div class="col-md-3">
              <div class="input-group">
                <span class="form-control disabled">Total de Registros encontrados</span>
                <span class="input-group-addon">3</span>
              </div>
              
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Processo</th>
                <th>Partes</th>
                <th>Tipo da Ação</th>
                <th>Inserida em</th>
                <th>Vencimento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>

</html>