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
            <legend>Listagem de Usuários</legend>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="checkboxes">Tipo de Usuário:</label>
              <div class="col-md-2">
                <div class="checkbox">
                  <label for="checkboxes-0">
                    <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                    Grupo Alunos
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkboxes-1">
                    <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                    Professor /Juiz
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkboxes-2">
                    <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
                    Secretária
                  </label>
                </div>
              </div>
              <div class="col-md-1">
                <label class="control-label" for="checkboxes">Senha:</label>
              </div>
              <div class="col-md-1">
                <label class="checkbox-inline" for="checkboxes-0">
                  <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                  Ativo
                </label>
              </div>

              <div class="col-md-4">
                <button id="button1id" name="button1id" class="btn btn-inverse">
                  <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>
                  Filtrar</button>
                <button id="button2id" name="button2id" class="btn btn-inverse">
                  <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  Imprimir</button>
              </div>
            </div>
            <div class="row"></div><br>
            <div class="row">
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Cód.</th>
                      <th>Proprietários</th>
                      <th>Usuário</th>
                      <th>Senha</th>
                      <th>Ativo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Mark /
                        Anna</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><input type='checkbox' CHECKED/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>