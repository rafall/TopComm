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
            <button type="submit" class="btn btn-default">Search</button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
      <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            
            <div role="tabpanel" class="tab-pane active" id="home">
                <?php include("/TopComm/src/home_text.html"); ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <?php include("/TopComm/src/profile_text.html"); ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <?php include("/TopComm/src/message_text.html"); ?>
            </div>
        </div>
      
      
      
      
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
