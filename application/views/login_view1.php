<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Authentification</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/dist/frontend/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="<?php echo base_url('login4.png'); ?>"></br></br>
      <div class="container" style="margin-top:25px;" background-image="<?php //echo base_url('image_login.jpg'); ?>">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">  
            <div class="panel panel-default">
              <div class="panel-body">
              <div align="center" class="login-logo"><img src="<?php echo base_url('logo2.png'); ?>" border="0" ALT="Google" align="absmiddle" /></div>
              <?php 
                  if(isset($_SESSION['success'])){
                ?>
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong><?php echo $_SESSION['success']; ?></strong>
                </div>
                 <?php 
                } 
                ?>
                 <?php 
                  if(isset($_SESSION['error'])){
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong><?php echo $_SESSION['error']; ?></strong>
                </div>
                 <?php 
                } 
                ?>
                <?php 
                  if(validation_errors()){
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong><?php echo validation_errors(); ?></strong>
                </div>
                <?php 
                } 
                ?>

                <form action="<?php echo site_url('login') ?>" method="post">
                  <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur">
                  </div>
                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                  </div>  <!-- <div class="checkbox">
            <label><input type="checkbox" name="remember"> Se rappeler de moi</label>
          </div> -->
                    
                  <button type="submit" style="background-color:#7E7E7E; color:#FFFFFF" class="btn btn-lg btn-block">Connexion</button>
                  &nbsp;&nbsp;
                 <div align="center" style="font-size:10px">
                  Développé par: <a href="http://www.snsoftware.com" target="_blank"><strong>Sn Software </strong></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/dist/frontend/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/dist/frontend/bootstrap.min.js') ?>"></script>
  </body>
</html>