<html>
    <head>
        <title>Inscription sur Pailine</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://localhost/paieline/css/styles.css">
    </head>
    <body>
        <div id="container">
        <?php echo form_open('Inscription/send_validation_email'); ?>
        <h1>Inscrire votre entreprise sur la solution PAILINE</h1><hr/>
        

        <?php echo form_label('PRENOM :'); ?><?php echo form_error('prenom'); ?><br />
        <?php echo form_input(array('id' => 'prenom', 'name' => 'prenom')); ?><br />

        <?php echo form_label('NOM :'); ?> <?php echo form_error('nom'); ?><br />
        <?php echo form_input(array('id' => 'nom', 'name' => 'nom')); ?><br />

        <?php echo form_label('EMAIL. :'); ?> <?php echo form_error('email'); ?><br />
        <?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />

        <?php echo form_label('ENTREPRISE :'); ?> <?php echo form_error('entreprise'); ?><br />
        <?php echo form_input(array('id' => 'entreprise', 'name' => 'entreprise')); ?><br />

        <?php echo form_submit(array('id' => 'submit', 'value' => 'Inscrire')); ?>

        <div id="fugo">
          <h5>Vous avez déjà un compte ? <a href="#">Connectez-vous</h5></a>  
        </div>

        <?php echo form_close(); ?>
      
       <!-- <div id="fugo">
          <a href="http://www.formget.com/app/"><img src="http://localhost/CodeIgniter/images/formGetadv-1.jpg" /></a>  
        </div>-->
       </div>
    </body>
</html>