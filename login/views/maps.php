<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colha Já</title>

    <!-- Bootstrap -->
    <link href="/TopComm/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>

    <script>
        var map;
        var myCenter=new google.maps.LatLng(-22.0055948,-47.8933842);
        var points = [];
        var flightPath;
        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
          });
        }

        function placeMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
            });

            //Adiciona o ponto para o vetor de pontos.
            points.push(marker.position);
//                //Se já tiver mais que dois pontos, ele desenha o poligono.
//                if(points.length > 2)
//                    drawPolygon();

        }

        function drawPolygon() {

            //ERRADO CRIA TODA VEZ UM NOVO POLIGONO
            flightPath = new google.maps.Polygon({
              paths:points,
              strokeColor:"#0000FF",
              strokeOpacity:0.8,
              strokeWeight:2,
              fillColor:"#0000FF",
              fillOpacity:0.4
            });

            //desenha de novo, com os pontos novos
            flightPath.setMap(map);
        }

        //Apaga o poligono, mas nao apaga os pontos
        function erasePolygon() {
            //apaga o poligono
            flightPath.setMap(null);
        }

        //Calcula a area. AINDA PRECISA TESTAR
        function calculate() {
            var area = google.maps.geometry.spherical.computeArea(flightPath.getPath());
            valor.innerHTML = "<h3>Area igual a: " + area + " m2</h3>";
        }


        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

      
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
            <a class="navbar-brand" href="#" style="float: right;">Olá, <?php echo $_SESSION['user_name']; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Perfil</a></li>
            <li><a href="#">Suas áreas</a></li>
            <li><a href="#">Mensagens <span class="badge">42</span></a></li>
              <li><a href="index.php?logout">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
   <div role="tabpanel" class="tab-pane" id="messages">
        <div class="jumbotron" style="background-color: #fff">
            <h1>Marque sua região</h1>
            <p>Clique no botão para adicionar um ponto</p>

            <!-- Aqui é o mapa etetetete-->
            <button class="btn btn-primary" onclick="drawPolygon()">Desenhar</button><button class="btn btn-primary" onclick="erasePolygon()">Apagar</button><br>
            <button class="btn btn-primary" onclick="calculate()">Calcular</button>
            <br><span id="valor"></span>
            <div id="googleMap" style="width:95%;height:380px;"></div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Salvar área
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                        <form role="form">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nome da área</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                          </div>
                            <div class="form-group">
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
                          <div class="form-group">
                            <label for="exampleInputPassword1">Plantio</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                        </form>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
      
      
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
