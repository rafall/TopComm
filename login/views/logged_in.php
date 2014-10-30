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
      
      <!-- Barra de navegacao  -->
        <ul id="myTab" class="nav nav-tabs" role="tablist"> <!-- Cabecalho com as abas -->
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Empresas</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Áreas</a></li>
            <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">Mensagens</a></li>
        </ul>
        <div id="myTabContent" class="tab-content"> <!-- Conteudo -->
            
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="jumbotron" style="background-color: #fff">
                    <h1>Encontre as empresas</h1>
                    <p>Procure as empresas que ajudarão o seu negócio!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Buscar empresas</a></p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="jumbotron" style="background-color: #fff">
                    <h1>Suas áreas atuais são</h1>
                    <p>
                        <ul>
                            <li><strong>Milho:</strong>Douradina/MS</li>
                        </ul>
                    </p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Marcar novo território</a></p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <div class="jumbotron" style="background-color: #fff">
                    <h1>Veja suas mensagens</h1>
                    <p>Não esqueça de verificar suas mensagens. Pode ser uma empresa fazendo uma oferta!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Ler mensagens<span class="badge">42</span></a></p>
                </div>
            </div>
        </div>
      
      <!-- Carrosel com as empresas cadastradas -->
      <div class="panel panel-success">
            <div class="panel-body">
                <h3>Veja as empresas cadastradas!</h3>
            </div>
            <div class="panel-footer">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <img src="/TopComm/img/stara-resized.png" alt="..." style="display: block;margin-left: auto;margin-right: auto;">
                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                      <img src="/TopComm/img/stara2.png" alt="..." style="display: block;margin-left: auto;margin-right: auto;">
                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                 
                </div>

                <!-- Controls -->
                <a style="background-image: 0;" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
      
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
