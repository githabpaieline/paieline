<html>
    <head><br/><br/><br/>
        <title>Inscription sur Pailine</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://localhost/paieline/css/styles.css">
    </head>
    <body>
        <div id="container">
        <?php echo form_open('Inscription/send_validation_email'); ?>
        <h1>Ajout d'un nouveau employé sur PAILINE</h1><hr/>

        <div id="fugo">
          <h5><a href="<?php echo site_url('Employe/ajout_employe_form') ?>">AJOUT COMPLET D'UN EMPLOYE</h5></a>  
        </div>
        <?php echo form_close(); ?>
       </div>
    </body>
</html>