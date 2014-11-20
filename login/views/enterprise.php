<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ColheJá</title>

    <!-- Bootstrap -->
    <link href="/TopComm/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Colha Já</a>
            <a class="navbar-brand" href="#">Olá, <?php echo $_SESSION['user_name']; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Perfil</a></li>
            <li><a href="#">Suas propostas</a></li>
            <li><a href="#">Mensagens <span class="badge">42</span></a></li>
              <li><a style="float: right;" href="/TopComm/index.php?logout">Sair</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

      <ul id="myTab" class="nav nav-tabs" role="tablist"> <!-- Cabecalho com as abas -->
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Produtores</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Propostas</a></li>
            <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">Mensagens</a></li>
        </ul>
        <div style="width=70%;" id="myTabContent" class="tab-content"> <!-- Conteudo -->
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="jumbotron" style="background-color: #fff; width=75%;">
                    <h2>Encontre produtores</h2>
                    <p>Procure procure os produtores e suas áreas de plantio!</p>
                    <p><h3>Tipo de produção</h3></p>
                    <table class="table">
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Cana de Açúcar
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Batata
                                  </label>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Milho
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Trigo
                                  </label>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Café
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Outros
                                  </label>
                              </div>
                          </td>
                      </tr>
                  </table>

                <p><h3>Serviço</h3></p>
                  <table class="table">
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Plantação
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Colheita
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Transporte
                                  </label>
                              </div>
                          </td>
                      </tr>
                  </table>
                <h3>Produtores encontrados</h3>
                    <select style="width=50%;" multiple class="form-control">
                      <option>Fernando - Milho - SP</option>
                      <option>José - Trigo - SP</option>
                      <option>Augusto - Trigo - MS</option>
                      <option>Monteiro - Cana de Açúcar - PE</option>
                      <option>Roberto - Café - PA</option>
                    </select>
                <p></p>
                <p></p>
                <p></p>
            </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="jumbotron" style="background-color: #fff">
                    <h2>Suas propostas atuais são:</h2>
                    <p>
                        <div class="panel-heading">Propostas pendentes</div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    May 20
                                </td>
                                <td>Fernando Plantador</td>
                                <td>1000he</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-heading">Histórico de propostas</div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    May 20
                                </td>
                                <td>Fernando Plantador</td>
                                <td>Fechado</td>
                            </tr>
                            <tr>
                                <td>
                                    May 20
                                </td>
                                <td>Fernando Plantador</td>
                                <td>Fechado</td>
                            </tr>
                            <tr>
                                <td>
                                    May 20
                                </td>
                                <td>Fernando Plantador</td>
                                <td>Cancelado</td>
                            </tr>
                            <tr>
                                <td>
                                    May 20
                                </td>
                                <td>Fernando Plantador</td>
                                <td>Fechado</td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <div class="jumbotron" style="background-color: #fff">
                        <h2>Veja suas mensagens</h2>
                    <p>Veja se algum produtor está interessado em seus serviços e entre em contato com aqueles que já fecharam negocio.</p>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>


        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
