<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inscription</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/dist/frontend/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container" style="margin-top:100px;">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          	<div align="center" class="login-logo"><h1>Inscription</h1></div>
            <div class="panel panel-default">
              <div class="panel-body">
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
                  if(validation_errors()){
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong><?php echo validation_errors(); ?></strong>
                </div>
                <?php 
                } 
                ?>

                <form action="<?php //echo site_url('login') ?>" method="post">
                  <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                  </div> 
                  <div class="form-group">
                    <label for="password">Confirmer Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password2" placeholder="Confirmer Mot de passe">
                  </div> 
                  <?php if ( !empty($groups) ): ?>
					<div class="form-group">
						<label for="groups">Groups</label>
						<div>
						<?php foreach ($groups as $group): ?>
							<label class="checkbox-inline">
								<input type="checkbox" name="groups[]" value="<?php echo $group->id; ?>"> <?php echo $group->name; ?>
							</label>
						<?php endforeach; ?>
						</div>
					</div>
					<?php endif; ?> 
                  <div class="form-group">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre" name="genre" >
                    	<option value="Homme">Homme</option>
                    	<option value="Femme">Femme</option>
                    </select>
                  </div>  
         			 </div>
                  <button type="submit" name="register" class="btn btn-primary">Inscription</button>
                
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