<!DOCTYPE html>
<html lang="pt-br">
  
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
          <a class="navbar-brand" href="index.php">Simulador de Processos Judiciais Eletrônicos</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <p class="navbar-right navbar-text">(Beta)</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6" draggable="true" style="">
          <form class="form-horizontal" role="form" style="" action="sessao_autenticar.php" name="fazerlogin" method="post">
            <div class="form-group">
              <div class="col-sm-2">
                <label for="user" class="control-label">Usuário:</label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="user" name= "usuario" placeholder="Usuário">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="usersenha" class="control-label">Senha:</label>
              </div>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="usersenha" name= "senhausuario" placeholder="Senha">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Logar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="well well-lg">
            <h2 class="text-danger">Atenção!</h2>
            <p class="text-danger">Se ainda não tiver seu cadastro realizado, ou não souber os seus dados
              de login, entre em contato com o professor responsável pelo módulo.</p>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>