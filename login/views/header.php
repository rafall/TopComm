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
