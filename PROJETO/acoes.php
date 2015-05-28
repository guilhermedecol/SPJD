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
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/ajax/ajax_cdn_entidade.js"></script>
    <script type="text/javascript">
      function alimentarCampoPart() {
          var carrIdEnt = document.getElementById("ID_ENTIDADE");
          var carrNomeEnt = document.getElementById("NOMEENTIDADE");
          document.getElementById("carregar_entidade_id").value = carrIdEnt.value;
          document.getElementById("carregar_entidade_nome").value = carrNomeEnt.value;
      }

      function alimentarCampoRep() {
          var carrIdEnt = document.getElementById("ID_ENTIDADE");
          var carrNomeEnt = document.getElementById("NOMEENTIDADE");
          document.getElementById("carregar_representante_id").value = carrIdEnt.value;
          document.getElementById("carregar_representante_nome").value = carrNomeEnt.value;
      }
    </script>

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
            <li class="active">
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
          <h3 class="text-left">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  <span>Cadastrar Ações 1º Grau</span>
          </h3>
        </div>
        <div class="col-md-10"><hr></div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" id="myTabs">
          <li class="active" draggable="true">
            <a href="#iniciais">1. Dados Iníciais</a>
          </li>
          <li>
            <a href="#processuais">2. Dados Processuais</a>
          </li>
          <li>
            <a href="#partes">3. Partes</a>
          </li>
          <li>
            <a href="#advogados">4. Advogados</a>
          </li>
          <li>
            <a href="#adicionais">5. Informações Adicionais</a>
          </li>
          <li>
            <a href="#documentos">6. Documentos</a>
          </li>
        </ul>
      </div>
      <div class="col-md-9">
        <form class="form-horizontal" action="cadastro_acoes.php" name="dados_nova_acao" method="post">
          <!-- Content -->
          <div class="col-md-auto" draggable="true">
            <div class="tab-content">
              <div class="tab-pane active" id="iniciais">
                <div class="col-md-12">
                  <p class="text-warning">* Informações obrigatórias</p>
                </div>


                  <div class="row"></div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="col-sm-2">
                        <label for="estado" class="control-label">* Localidade:</label>
                      </div>
                      <div class="col-sm-4">
                        <select class="form-control" id="estado" name="estado"></select>
                      </div>
                      <div class="col-sm-4">
                        <select class="form-control" id="cidade" name="cidade"></select>
                      </div>
                        <script type="text/javascript" src="js/cidades-estados.js"></script>
                        <script type="text/javascript">
                          $(function() {
                            new dgCidadesEstados({
                              estado: $('#estado').get(0),
                              cidade: $('#cidade').get(0)
                            });
                          });
                        </script> 
                      <div class="row"></div><br>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-2">
                            <label for="competencia" class="control-label">* Competencia:</label>
                          </div>
                          <div class="col-sm-8">
                            <select class="form-control" id = "competencia" name="competencia">
                              <option disabled="disabled" selected="" class = "dropdown-header">Selecione</option>
                              <option value="0" disabled="disabled">Juizado Especcial Cível de Pato Branco</option>
                              <option value="1" disabled="disabled">Juizado Especcial Criminal de Pato Branco</option>
                              <option value="2" disabled="disabled">Juizado Especcial da Fazenda Pública de Pato Branco</option>
                              <option value="3" disabled="disabled">Vara Civel de Pato Branco</option>
                              <option value="4" disabled="disabled">Vara da Fazenda Pública de Pato Branco</option>
                              <option value="5" disabled="disabled">Vara da infância e da Juventude - Seção Cível - de Pato Branco</option>
                              <option value="6" disabled="disabled">Vara da Infância e da Juventude - Seção Infracional - de Pato Branco</option>
                              <option value="7" disabled="disabled">Vara de Acidentes de Trabalho de Pato Branco</option>
                              <option value="8">Vara de Família e Sucessões de Pato Branco</option>
                              <option value="9" disabled="disabled">Vara de Registros Públicos e Corregedoria do Foro Extrajudicial de Pato Branco</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-10">
                    <!--<ul class="nav nav-pills nav-stacked" id="myTabs2">
                      <li class="active" draggable="true"> -->  
                        
                        <nav>
                          <ul class="pager">
                            <li class="next"><a href="#processuais" >Próximo <span aria-hidden="true">&rarr;</span></a></li>
                          </ul>
                        </nav>
                      <!--</li>
                    </ul>-->
                  </div>
             
              </div>


              <div class="tab-pane" id="processuais">
                <div class="col-md-12">
                  <p class="text-warning">* Informações obrigatórias</p>
                </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-3">
                            <label for="classeProcessual" class="control-label">* Classe processual:</label>
                          </div>
                          <div class="col-sm-9">
                            <select class="form-control" id = "classeProcessual" name="classeProcessual">
                              <option disabled="disabled" selected="">Selecione</option>
                              <optgroup label="JUIZADOS DA INFÂNCIA E DA JUVENTUDE">
                                <optgroup label="1- Seção Cível">
                                  <option value="1.1">1.1. Guarda</option>
                                </optgroup>
                              </optgroup>

                              <optgroup label="2 - PROCEDIMENTOS ADMINISTRATIVOS">
                                <option value="2.1">2.1. Pedido de Providências</option>
                                <option value="2.2">2.2. Processo Administrativo</option>
                                <option value="2.3">2.3. Processo Administrativo Disciplinar</option>
                                <option value="2.4">2.4. Reclamação Disciplinar</option>
                                <option value="2.5">2.5. Sindicãncia</option>
                              </optgroup>

                              <optgroup label="3 - PROCESSO CÍVEL E DO TRABALHO">
                                <optgroup label="3.1. Cartas">
                                  <option value="3.1.1">3.1.1. Carta Precatória Cível</option>
                                </optgroup>
                             
                                <optgroup label="3.2. Incidentes">
                                  <optgroup label="3.2.1. Exceções">
                                    <option value="3.2.1.1">3.2.1.1. Exceção de Impedimento</option>
                                    <option value="3.2.1.2">3.2.1.2. Exceção de Incompetência</option>
                                    <option value="3.2.1.3">3.2.1.3. Exceção de Suspeição</option>
                                  </optgroup>

                                  <optgroup label="">
                                    <option value="3.2.2">3.2.2. Exibição de Documento ou Coisa</option>
                                    <option value="3.2.3">3.2.3. Impugnação ao Pedido de Assistência Litisconsorcial ou Simples</option>
                                    <option value="3.2.4">3.2.4. Impugnação ao Valor da Causa</option>
                                    <option value="3.2.5">3.2.5. Impugnação de Assistência Jurídica</option>
                                    <option value="3.2.6">3.2.6. Incidente de Falsidade</option>
                                    <option value="3.2.7">3.2.7. Oposição</option>
                                    <option value="3.2.8">3.2.8. Remoção de Inventariante</option>
                                  </optgroup>
                                </optgroup>

                                <optgroup label="3.3. Processo Cautelar">
                                  <option value="3.3.1">3.3.1. Alimentos - Provisionais</option>
                                  <option value="3.3.2">3.3.2. Arrolamento de Bens</option>
                                  <option value="3.3.3">3.3.3. Cautelar Inomínada</option>
                                  <option value="3.3.4">3.3.4. Regulamentação de Visitas</option>
                                  <option value="3.3.5">3.3.5. Separação de Corpos</option>
                                </optgroup>

                                <optgroup label="3.4. Processo de Conhecimento">
                                  <optgroup label="3.4.1. Procedimento de Conhecimento">
                                    <option value="3.4.1.1">3.4.1.1. Proocedimento Ordinário</option>
                                    
                                    <optgroup label="3.4.1.2. Procedimentos Especiais">
                                      <option value="3.4.1.2.1">3.4.1.2.1. Procedimentos Especiais de Jurisdição Contenciosa</option>                          
                                      <option value="3.4.1.2.2">3.4.1.2.2. Procedimentos Especiais de Jurisdição Voluntária</option>  
                                      <option value="3.4.1.2.3">3.4.1.2.3. Procedimentos Regidos por Outros Códigos, Leis Esparsas e Regimentos</option>  
                                    </optgroup>
                                  </optgroup>

                                  <optgroup label="3.4.2. Procedimento de Cumprimento de Sentença/Decisão">
                                    <option value="3.4.2.1">3.4.2.1. Cumprimento de Sentença</option>                          
                                  </optgroup>
                                </optgroup>
                                
                                <optgroup label="3.5. Processo de Execução">
                                  <optgroup label="3.5.1. Embargos">
                                    <option value="3.5.1.1">3.5.1.1. Execução de Título Extrajudicial</option>                          
                                  </optgroup>   
                                  <option value="3.5.2">3.5.2. Exceção de Título Judicial</option>                      
                                </optgroup>

                                <optgroup label="3.6. Recursos">
                                  <option value="3.6.1">3.6.1. Embargos</option>                          
                                </optgroup>   
                              </optgroup>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row"></div><br>
                    </div>                    
     
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-12">
                            <label for="descricaoD" class="control-label">Detalhes / Descriçao:</label>
                          </div>
                          <div class="col-sm-12">
                            <textarea class="form-control" rows="6" cols="79" id="descricaoD" name = "descricaoD"></textarea>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>

                <div class="col-md-12">
                  <nav>
                    <ul class="pager">
                      <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Voltar</a></li>
                      <li class="next"><a href="#">Próximo <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div class="tab-pane" id="partes">
                <div class="col-md-12">
                  <p class="text-warning">* Informações obrigatórias</p>
                </div>

                <form class="form-horizontal" action="cadastro_partes.php" id= "dados_nova_parte" name="dados_nova_parte" method="post">
                  <div class="row"></div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="col-sm-2">
                        <label for="tipoParte" class="control-label">* Tipo da parte:</label>
                      </div>
                      <div class="col-sm-7">
                        <select class="form-control" id = "tipoParte" name= "tipoParte">
                          <option disabled="disabled" selected="">Selecione</option>
                          <option value = "Polo Ativo">Polo Ativo</option>
                          <option value = "Polo Passivo">Polo Passivo</option>
                          <option value = "Vítima">Vítima</option>
                          <option value = "Testemunha">Testemunha</option>
                          <option value = "Terceiro">Terceiro</option>
                          <option value = "Sentenciado">Sentenciado</option>
                        </select>
                      </div> 
                      <div class="row"></div><br>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-2">
                            <label for="entidade" class="control-label">* Entidade:</label>
                          </div>
                          <div class="col-md-7">
                            <div class="input-group">
                              <input type="hidden" class="form-control" id="carregar_entidade_id" name="carregar_entidade_id" disabled="disabled">
                              <input type="text" class="form-control" id="carregar_entidade_nome" name="carregar_entidade_nome" disabled="disabled" placeholder="Selecione uma entidade">
                              <span class="input-group-btn">
                                <a class="btn btn-default" type="button" href="#modEntidadeParte" data-toggle = "modal">
                                  <span class="glyphicon glyphicon-search"></span>
                                </a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row"></div><br>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-2">
                            <label for="representante" class="control-label">Representante:</label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                              <input type="hidden" class="form-control" id="carregar_representante_id" name="carregar_representante_id" disabled="disabled">
                              <input type="text" class="form-control" id="carregar_representante_nome" name="carregar_representante_nome" disabled="disabled" placeholder="Selecione um representante">
                              <span class="input-group-btn">
                                <a class="btn btn-default" type="button" href="#modEntidadeRep" data-toggle = "modal">
                                  <span class="glyphicon glyphicon-search"></span>
                                </a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row"></div><br>
                    </div>
                  
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-md-2">
                            <label for="justGratuita" class="control-label">* Just. gratuita:</label>
                          </div>
                          <div class="col-md-9">
                            <label class="radio-inline" for="radios-0" id="justGratuita">
                              <input type="radio" name="justGratuita" id="radios-0" value="0" CHECKED>Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="justGratuita" id="radios-1" value="1">Não
                            </label>
                          </div>
                          <div class="row"></div><br>
                        </div>
                        <div class="col-sm-12">
                          <div class="col-md-2">
                            <label for="reuPreso" class="control-label">* Réu Preso:</label>
                          </div>
                          <div class="col-md-5">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="reuPreso" id="radios-0" value="0">Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="reuPreso" id="radios-1" value="1" CHECKED>Não
                            </label>
                          </div>
                          <div class="col-md-2">
                            <button id="botaoPartes" name="botaoPartes" class="active btn btn-block btn-default btn-sm" type="submit" aria-hidden="true" value = "Adicionar">
                              <span class="glyphicon glyphicon-check">  Adicionar</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>

                      <div class="row"></div><br>
                      <div class="col-md-9">
                        <hr>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-12">
                          <div class="col-md-7">
                            <div class="panel panel-default">
                              <div class="panel-heading">Resumo das Partes vinculadas</div>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Representante</th>
                                    <th>Sel.</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Mariana Zutenberg</td>
                                    <td>Vítima</td>
                                    <td></td>
                                    <td><input type='checkbox'  /></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Polo Ativo</td>
                                    <td>Ana</td>
                                    <td><input type='checkbox'  /></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>                        
                          <div class="col-md-2">
                            <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                              <span class="glyphicon glyphicon-share">  Desvincular</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
     
                <div class="col-md-9">
                  <nav>
                    <ul class="pager">
                      <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Voltar</a></li>
                      <li class="next"><a href="#">Próximo <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div class="tab-pane" id="advogados">
                <div class="col-md-12">
                  <p class="text-warning">* Informações obrigatórias</p>
                </div>
              
           
                  <div class="row"></div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-2">
                            <label for="inputComp1" class="control-label">* Advogado:</label>
                          </div>
                          <div class="col-sm-5">
                            <?php 
                              echo "<input type='text' class='form-control' disabled='disabled' value='". $_SESSION["NOME_USUARIO"]."'>
                                    <input type='hidden' class='form-control' disabled='disabled' value='". $_SESSION["ID_USUARIO"]."'>"
                            ?>  
                          </div>
                          <div class="col-md-2">
                            <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                              <span class="glyphicon glyphicon-check">  Confirmar</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
               
                <div class="col-md-9">
                  <nav>
                    <ul class="pager">
                      <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Voltar</a></li>
                      <li class="next"><a href="#">Próximo <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div class="tab-pane" id="adicionais">
                <div class="col-md-12">
                  <p class="text-warning">* Informações obrigatórias</p>
                </div>
                
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="col-sm-2">
                        <label for="inputComp1" class="control-label">Valor da causa:</label>
                      </div>
                      <div class="col-sm-2">
                        <input class="form-control" tipe="text"></input>
                      </div>
                      <div class="row"></div>
                    </div>
            
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-3">
                            <label for="inputComp1" class="control-label">Detalhes / Descriçao:</label>
                          </div>
                          <div class="row"></div>
                          <div class="col-sm-9">
                            <textarea class="form-control" rows="3"></textarea>  
                          </div> 
                        </div>                   
                      </div>
                    </div>
                  </div>
              

                <div class="col-md-9">
                  <nav>
                    <ul class="pager">
                      <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Voltar</a></li>
                      <li class="next"><a href="#">Próximo <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              <div class="tab-pane" id="documentos">
            
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="col-sm-1">  
                        <label class="control-label" for="filebutton">Carregar:</label>
                      </div>
                      <div class="col-md-8">
                        <input id="filebutton" name="filebutton" class="input-file form-control" type="file">
                      </div>
                      <div class="col-md-1">
                        <button class="btn btn-default" type="button">
                          <span class="glyphicon glyphicon-plus-sign"></span>
                        </button>
                      </div>
                      <div class="row"></div> 
                    </div>
                    <div class="row"></div><br>
              
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-12">
                          <div class="col-sm-10">
                            <div class="panel panel-default">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Arquivo </th>
                                    <th>Tamanho (Kb)</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
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
                        </div> 
                       
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="col-md-10">
                                <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">Assinar e vincular</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <nav>
                            <ul class="pager">
                              <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Voltar</a></li>
                            </ul>
                          </nav>
                        </div> 
                        <div class="row"></div><hr>               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                          <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-check">  Cadastrar</span>
                          </a>
                        </div>
                        <div class="col-md-2">
                          <a class="active btn btn-block btn-default btn-sm" data-toggle="modal" href="#">
                          <span class="glyphicon glyphicon-share">  Cancelar</span>
                          </a>
                        </div>
                      </div>
                      <div class="row"></div><br>
                    </div>
                  </div>
              </div>
              
            </div><!--/tab-content-->
          </div>
        </form>
      </div>
      <div class="modal fade" id="modEntidadeParte" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body">
              <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Listagem de Entidades cadastradas
                    <a class="btn btn-inverse" type="button" href="#modNEntidade" data-toggle = "modal">
                      <button name="button2id" class="btn-sm btn-default" href="">Cadastrar nova entidade</button>
                    </a>                               
                </div>
                <!-- Table -->
                <table class="table table-striped table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>                 
                    <?php 
                      include_once 'conexao.php';
                    
                      $result = mssql_query("SELECT * FROM VW_ENTIDADES_CADASTRADAS");
                      while ($row = mssql_fetch_array($result)) 
                      {echo "
                            <tr>
                              <td><input type='hidden' id='ID_ENTIDADE' name='ID_ENTIDADE' value='$row[ID_ENTIDADE]'>$row[ID_ENTIDADE]</input></td>
                              <td><input type='hidden' id='NOMEENTIDADE' name='NOMEENTIDADE' value='$row[NOMEENTIDADE]'>$row[NOMEENTIDADE]</input></td>
                              <td><input type='hidden' id='CPF' name='CPF' value='$row[CPF]'>$row[CPF]</input></td>
                              <td>
                                <button id='sel_entidade' name='sel_entidade' class='btn-xs btn-success' placeholder='' type='submit' onclick='javascript:alimentarCampoPart();' data-dismiss='modal' aria-hidden='true'>
                                    Selecionar
                                </button>
                               </td>
                              <td><button id='edit_entidade' name='edit_entidade' class='btn-xs btn-danger' placeholder=''>Editar</button></td>
                            </tr>";}
                      mssql_close ($conn);
                    ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  
      </div>

      <div class="modal fade" id="modEntidadeRep" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body">
              <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Listagem de Entidades cadastradas
                    <a class="btn btn-inverse" type="button" href="#modNEntidade" data-toggle = "modal">
                      <button name="button2id" class="btn-sm btn-default" href="">Cadastrar nova entidade</button>
                    </a>                               
                </div>
                <!-- Table -->
                <table class="table table-striped table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>                 
                    <?php 
                      include_once 'conexao.php';
                    
                      $result = mssql_query("SELECT * FROM VW_ENTIDADES_CADASTRADAS");
                      while ($row = mssql_fetch_array($result)) 
                      {echo "
                            <tr>
                              <td><input type='hidden' id='ID_ENTIDADE' name='ID_ENTIDADE' value='$row[ID_ENTIDADE]'>$row[ID_ENTIDADE]</input></td>
                              <td><input type='hidden' id='NOMEENTIDADE' name='NOMEENTIDADE' value='$row[NOMEENTIDADE]'>$row[NOMEENTIDADE]</input></td>
                              <td><input type='hidden' id='CPF' name='CPF' value='$row[CPF]'>$row[CPF]</input></td>
                              <td>
                                <button id='sel_entidade' name='sel_entidade' class='btn-xs btn-success' placeholder='' type='submit' onclick='javascript:alimentarCampoRep();' data-dismiss='modal' aria-hidden='true'>
                                    Selecionar
                                </button>
                               </td>
                              <td><button id='edit_entidade' name='edit_entidade' class='btn-xs btn-danger' placeholder=''>Editar</button></td>
                            </tr>";}
                      mssql_close ($conn);
                    ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  
      </div>

      <div class="modal fade" id="modNEntidade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form class="form-horizontal" action="cadastro_entidade.php" id= "dados_nova_entidade" name="dados_nova_entidade" method="post">
              <fieldset>
                <div class="modal-header">
                  <!-- Form Name -->
                  <h3>Cadastrar nova entidade</h3>
                </div>
                <div class="modal-body">
                  <!-- Prepended text-->
                  <div class="form-group">
                    <label class="col-md-5 control-label" for="prependedtext"></label>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">*</span>
                        <span class="form-control disabled">Informações obrigatórias</span>
                      </div>
                      
                    </div>
                  </div>
                  
                  <legend><h6>Dados pessoais</h6></legend>
                  <!--<input type="hidden" id="action" name="action" /> -->
                  
                  <!-- Appended Input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="nome">Nome:</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <input id="nome" name="nome" class="form-control" placeholder="nome" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                      
                    </div>
                  </div>
                  <!-- Appended Input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="sobrenome">Sob. N:</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <input id="sobrenome" name="sobrenome" class="form-control" placeholder="sobrenome" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                      
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="idade">Idade:</label>  
                    <div class="col-md-2">
                      <input id="idade" name="idade" type="text" placeholder="anos" class="form-control input-md"> 
                    </div>

                    <label class="col-md-3 control-label" for="sexo">Sexo:</label>
                    <div class="col-md-4">
                      <select id="sexo" name="sexo" class="form-control">
                        <option disabled="" selected>Selecione</option>
                        <option value="0">Feminino</option>
                        <option value="1">Masculino</option>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="fone">Telefone:</label>  
                    <div class="col-md-4">
                    <input id="fone" name="fone" type="text" placeholder="contato" class="form-control input-md">
                      
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="profissao">Profissão:</label>  
                    <div class="col-md-9">
                    <input id="profissao" name="profissao" type="text" placeholder="descrição" class="form-control input-md">
                      
                    </div>
                  </div>

                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="cpf">CPF:</label>
                    <div class="col-md-4">
                      <div class="input-group">
                        <input id="cpf" name="cpf" class="form-control" placeholder="" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                    </div>

                    <label class="col-md-1 control-label" for="rg">RG:</label>  
                    <div class="col-md-4">
                      <div class="input-group">
                        <input id="rg" name="rg" class="form-control" placeholder="" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>  
                    </div>
                  </div>

                  <br>
                  <hr></hr>
                  <legend><h6>Dados residenciais</h6></legend>

                  <!-- Appended Input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="cep">CEP:</label>
                    <div class="col-md-4">
                      <div class="input-group">
                        <input id="cep" name="cep" class="form-control" placeholder="" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label" for="estadoE">Local:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <select class="form-control" id="estadoE" name="uf"></select><span class="input-group-addon">*</span>
                        <select class="form-control" id="cidadeE" name="cidade"></select>
                        <script type="text/javascript" src="js/cidades-estados.js"></script>
                        <script type="text/javascript">
                          $(function() {
                            new dgCidadesEstados({
                              estado: $('#estadoE').get(0),
                              cidade: $('#cidadeE').get(0)
                            });
                          });
                        </script>
                      </div>
                    </div>
                  </div>

                  <!-- Appended Input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="endereco">Endereço:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input id="endereco" name="endereco" class="form-control" placeholder="logradouro" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label" for="nro">Numero:</label>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input id="nro" name="nro" class="form-control" placeholder="" type="text" required="">
                        <span class="input-group-addon">*</span>
                      </div>
                    </div>
 
                    <div class="col-md-7">
                      <input id="complemento" name="complemento" class="form-control" placeholder="Complemento" type="text">
                    </div>
                  </div>

                </div>
                <div class="recebeDados"></div>
                <div class="modal-footer">
                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id"></label>
                    <div class="col-md-8">
                      <!--<input type="button" value="Salvar" class="botao" onclick="java script:doPost('dados_nova_entidade', 'salvar');" />  -->
                      <button id="button1id" name="button1id" class="btn btn-success" type="submit" aria-hidden="true" value = "Salvar">Salvar</button>
                      <button id="button2id" name="button2id" class="btn btn-warning" type="reset" aria-hidden="true">Limpar</button>
                      <button id="button2id" name="button2id" class="btn btn-defaut" type="button" data-dismiss="modal" aria-hidden="true">Fechar</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>  
      </div>

        <!-- Enable the tabs -->
      <script type="text/javascript">
        $('#myTabs a').click(function (e) {
      			e.preventDefault()
      			$(this).tab('show')
      		  });
      </script>
    </div>
  </body>

</html>