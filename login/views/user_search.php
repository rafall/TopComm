<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colha Já</title>

    <!-- Bootstrap -->
    <link href="/TopComm/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
      <!-- Navbar que fica no topo da tela-->
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
                <li><a href="#">Suas áreas</a></li>
                <li><a href="#">Mensagens <span class="badge">42</span></a></li>
                  <li><a style="float: right;" href="/TopComm/index.php?logout">Sair</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

      <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Busque uma empresa pelo nome">
            </div>

          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Platanção</h3>
              </div>
              <div class="panel-body">
                  <table>
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
              </div>
              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Serviço</h3>
              </div>
              <div class="panel-body">
                  <table>
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
              </div>
          </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Estado</h3>
              </div>
              <div class="panel-body">
                  <select name="estado">
                    <option value="estado">Selecione o Estado</option>
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="am">Amazonas</option>
                    <option value="ap">Amapá</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="ro">Rondônia</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="se">Sergipe</option>
                    <option value="sp">São Paulo</option>
                    <option value="to">Tocantins</option>
                </select>
                </div>
              </div>


            <br><button type="submit" class="btn btn-primary btn-lg btn-block">Buscar</button>
        </form>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
