<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TopComm Project</title>

    <!-- Bootstrap -->
    <link href="/TopComm/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">TopComm</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Machines</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Where <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Brazil</a></li>
                <li><a href="#">EUA</a></li>
                <li><a href="#">SP</a></li>
                <li class="divider"></li>
                <li><a href="#">RS</a></li>
                <li class="divider"></li>
                <li><a href="#">FIM</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <form class="form-inline" role="form" style="padding-top:8px;" method="post" action="index.php" name="loginform">
                  <div class="form-group">
                    <div class="input-group">
                      <input class="form-control" type="email" d="login_input_username" name="user_name" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                    <input type="password" id="login_input_password" name="user_password" autocomplete="off" class="form-control" placeholder="Password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                  <button type="submit" name="login" class="btn btn-default">Sign in</button>
            </form> 
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
    
      <div style="width: 450px; margin: 0px auto 0px auto;">
        <h1>Sign Up Today!</h1>
        <form role="form" method="post" action="login/register.php" name="registerform">
          <div class="form-group">
            <input type="text" class="form-control" id="login_input_username" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
          </div>
          <div class="form-group">
            <input type="email" id="login_input_email" class="form-control" name="user_email" requiredclass="form-control" placeholder="Email adress">
          </div>
          <div class="form-group">
            <input type="password" id="login_input_password_new" name="user_password_new" pattern=".{6,}" required autocomplete="off" class="form-control" placeholder="Password">
          </div>
            <div class="form-group">
            <input type="password" id="login_input_password_repeat" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" class="form-control" placeholder="Repeat Password">
          </div>
          <br>
          <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
      </div>
      
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
