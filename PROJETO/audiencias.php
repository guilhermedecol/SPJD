<!DOCTYPE html>
<html>
<?php include_once 'sessao_validar.php';?> 
  <head>
    <meta type="text/php" charset="utf-8">
    <title>Simulador PROJUDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
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
          <ul class="nav navbar-left navbar-nav">
            <li class="active">
              <a href="audiencias.php">Audiências</a>
            </li>
          </ul>
          <ul class="nav navbar-left navbar-nav">
            <li>
              <a href="buscas.php">Buscas</a>
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
          <h3 class="text-left">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
            <span>Audiência</span>
          </h3>
        </div>
        <div class="col-md-10">
          <hr>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- Navigation Buttons -->
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked" id="myTabs">
            <li class="active" draggable="true">
              <a href="#nova_audiencia">Nova Audiência</a>
            </li>
            <li>
              <a href="#movimentar">Movimentar</a>
            </li>
          </ul>
        </div>
        <div class="col-md-10">
          <!-- Content -->
          <div class="col-md-9" draggable="true">
            <div class="tab-content">
              <div class="tab-pane active" id="nova_audiencia">
                <div class="col-md-12">
                  <p class="text-warning">Vincular Ações 1º Grau</p>
                </div>
                <form class="form-horizontal" role="form">
                  <div class="row"></div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="col-sm-2">
                        <label for="inputLoc1" class="control-label">Intimação:</label>
                      </div>
                      <div class="col-sm-3">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>
                          </span>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <button class="btn btn-default" type="button">
                          <span class="glyphicon glyphicon-plus-sign"></span>
                        </button>
                      </div>
                      <div class="row"></div><br><hr>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-md-12">
                            <p class="text-warning">Datas</p>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-md-4">
                                <label for="inputLoc1" class="control-label">(assinar)):</label>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">
                                  <input id="appendedtext" name="appendedtext" class="form-control" placeholder="15" type="text">
                                  <span class="input-group-addon">dias</span>
                                </div>
                              </div>
                            </div>
                            <div class="row"></div><br>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-md-4">
                                <label for="inputLoc1" class="control-label">Data de vencimento:</label>
                              </div>
                              <div class="col-sm-4">
                                <input type="date" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="row"></div><br><hr><br>
                    </div>

                    <div class="col-md-12">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">Resumo das Intimações vinculadas </div>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Aud.</th>
                                <th>Competencia</th>
                                <th>Classe</th>
                                <th>Tipo</th>
                                <th>Entidade</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Vara da Família</td>
                                <td>Guarda</td>
                                <td>Vítima</td>
                                <td>Jacob</td>
                                <td>
                                  <button class="btn btn-inverse" type="button">
                                    <span class="glyphicon glyphicon-remove-circle"></span>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td>255</td>
                                <td>Vara da Família</td>
                                <td>Guarda</td>
                                <td>Vítima</td>
                                <td>Jacob</td>
                                <td>
                                  <button class="btn btn-inverse" type="button">
                                    <span class="glyphicon glyphicon-remove-circle"></span>
                                  </button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>                        
                      <div class="row"></div><br> 
                    </div> 

                    <div class="col-md-12">
                      <div class="col-md-8"></div>
                      <div class="col-md-2">
                        <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-check">  Marcar</span>
                        </a>
                      </div>
                      <div class="col-md-2">
                        <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-share">  Cancelar</span>
                        </a>
                      </div>
                    </div>

                  </div>
                </form>
              </div>

              <div class="tab-pane" id="movimentar">
                <div class="col-md-12">
                  <p class="text-warning">Vincular Ações 1º Grau</p>
                </div>
                <form class="form-horizontal" role="form">
                  <div class="row"></div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="col-sm-4">
                        <label for="inputLoc1" class="control-label">Tipo de Movimentação:</label>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>
                          </span>
                        </div>
                      </div>
                      <div class="row"></div><br>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-md-12">
                            <p class="text-warning">Ação</p>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-md-3">
                                <label for="inputLoc1" class="control-label">Movimentar para:</label>
                              </div>
                              <div class="col-sm-4">
                                <select class="form-control">
                                  <option disabled="disabled" selected="" class = "dropdown-header " placeholder="Selecione"></option>
                                  <option>Em Processo</option>
                                  <option>Finalizadas</option>
                                  <option>Prorrogadas</option>
                                </select>
                              </div>
                            </div>
                            <div class="row"></div><br>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-md-3">
                                <label for="inputLoc1" class="control-label">Justificativa:</label>
                              </div>
                              <div class="col-sm-9">
                                <textarea  class="form-control" rows="3"></textarea>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="row"></div><br><hr><br>
                    </div>

                    <div class="col-md-12">
                      <div class="col-md-8"></div>
                      <div class="col-md-2">
                        <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-check">  Confirmar</span>
                        </a>
                      </div>
                      <div class="col-md-2">
                        <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-share">  Cancelar</span>
                        </a>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $('#myTabs a').click(function (e) {
              e.preventDefault()
              $(this).tab('show')
              });
        </script>
        
      </div>
    </div>
  </body>

</html>