<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ColheJá</title>

    <!-- Bootstrap -->
    <link href="/TopComm/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>
    
    <script>
        function initialize()
        {
        var mapProp = {
          center:new google.maps.LatLng(51.508742,-0.120850),
          zoom:5,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };
        var map=new google.maps.Map(document.getElementById("googleMap")
          ,mapProp);
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
          <a class="navbar-brand" href="#">ColheJá</a>
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
            <div id="googleMap" style="width:95%;height:380px;"></div>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Adicionar ponto</a></p>
        </div>
    </div>
      
      <script>
        google.maps.event.addListener(map, 'click', function(event) {
          placeMarker(event.latLng);
        });

        function placeMarker(location) {
          var marker = new google.maps.Marker({
            position: location,
            map: map,
          });
          var infowindow = new google.maps.InfoWindow({
            content: 'Latitude: ' + location.lat() +
            '<br>Longitude: ' + location.lng()
          });
          infowindow.open(map,marker);
        }
      </script>
      
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
