<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colha Já</title>

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
      <?php
        // show potential errors / feedback (from login object)
        if (isset($login)) {
            if ($login->errors) {
                foreach ($login->errors as $error) {
                    echo $error;
                }
            }
            if ($login->messages) {
                foreach ($login->messages as $message) {
                    echo $message;
                }
            }
        }
        ?>
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
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Colha Já</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <form class="form-inline" role="form" style="padding-top:8px;" method="post" action="index.php" name="loginform">
                  <div class="form-group">
                    <div class="input-group">
                      <input class="form-control" type="email" d="login_input_username" name="user_name" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword2">Senha</label>
                    <input type="password" id="login_input_password" name="user_password" autocomplete="off" class="form-control" placeholder="Senha">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Lembre de mim
                    </label>
                  </div>
                  <button type="submit" name="login" class="btn btn-default">Entrar</button>
            </form> 
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav> 
        <div class="hidden-xs" style="width: 50%; float:left; padding-left: 100px;">
                <h1 style="text-align:center">Cadastre-se agora!</h1>
            <form role="form" method="post" action="/TopComm/login/register.php" name="registerform">
              <div style="margin-left: auto; margin-right: auto">
                
                  <div class="form-group">
                    <input type="text" class="form-control" id="login_input_username" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sobrenome">
                  </div>
                  <div class="form-group">
                    <input type="email" id="login_input_email" class="form-control" name="user_email" requiredclass="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <input type="password" id="login_input_password_new" name="user_password_new" pattern=".{6,}" required autocomplete="off" class="form-control" placeholder="Senha">
                  </div>
                    <div class="form-group">
                    <input type="password" id="login_input_password_repeat" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" class="form-control" placeholder="Repita a senha">
                  </div>
                  <br>
                  <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                  
              </div>
            </form>
        </div>
          <div style="width: 50%; margin: 0px auto 0px auto; float:right; padding-right:100px; padding-left:30px;">
                          <h1 style="text-align:center">O que é o ColheJá?</h1>
            <p style="text-align:center; font-size:16px;">
                O <strong>ColheJá</strong> é um site que aproxima produtores de fornecedores de serviço.<br>
                Precisa colher seu milho mas não tem os equipamentos adequados?<br>
                Procure aqui, e escolha a empresa mais perto de você e com o melhor preço.<br>
                Precisa fazer o transporte da produção?<br>
                Aqui você também encontra empresas que prestam serviço de logística para o seu negócio.<br>
                É uma empresa que oferece esses serviços?<br>
                Veja nossos planos!<br>
                Cadastre-se agora!
            </p>
          </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/TopComm/js/bootstrap.min.js"></script>
  </body>
</html>
