<html>

 <head><br/><br/><br/>
        <title>Ajout employe</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://localhost/paieline/css/add_employe.css">
    </head>

<body>
    <div class="main">
    <div id="content">
    <?php echo form_open('Employe/save_employe'); ?>
    <h3 id='form_head'>Ajout Informations personnèlles </h3><br/>
    
    <div id="form_input">
        
      <table>
        <tr>
            
          <td><?php echo form_label('PRENOM :'); ?><?php echo form_error('prenom'); ?></td>
          <td><?php echo form_input(array('id' => 'prenom', 'name' => 'prenom')); ?><br/></td>
          <td><?php echo '     '; ?></td><td></td><td></td>s
          <td><?php echo form_label('NOM :'); ?> <?php echo form_error('nom'); ?></td>
          <td><?php echo form_input(array('id' => 'nom', 'name' => 'nom')); ?><br /></td>
        </tr>
         <tr>
           <td><?php echo form_label('DATE NAISSANCE :'); ?> <?php echo form_error('date_naissance'); ?></td>
           <td><?php echo form_input(array('id' => 'date_naissance', 'name' => 'date_naissance')); ?><br /></td>
           <td></td><td></td><td></td>
           <td><?php echo form_label('LIEU DE NAISSANCE :'); ?> <?php echo form_error('lieu_naissance'); ?></td>
           <td><?php echo form_input(array('id' => 'lieu_naissance', 'name' => 'lieu_naissance')); ?><br /></td>
         </tr>
         <tr>
           <td><?php echo form_label('PAYS DE NAISSANCE :'); ?> <?php echo form_error('pays_naissance'); ?></td>
           <td><?php echo form_input(array('id' => 'pays_naissance', 'name' => 'pays_naissance')); ?><br /></td>
           <td></td><td></td><td></td>
           <td><?php echo form_label('EMAIL. :'); ?> <?php echo form_error('email'); ?></td>
           <td><?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br /></td>
          </tr>
          <tr>
            <td><?php echo form_label('ADRESSE :'); ?> <?php echo form_error('adresse'); ?></td>
            <td><?php echo form_input(array('id' => 'adresse', 'name' => 'adresse')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('CODE POSTALE :'); ?> <?php echo form_error('code_postale'); ?></td>
            <td><?php echo form_input(array('id' => 'code_postale', 'name' => 'code_postale')); ?><br /></td>
          </tr>
          <tr>
            <td><?php echo form_label('VILLE :'); ?> <?php echo form_error('ville'); ?></td>
            <td><?php echo form_input(array('id' => 'ville', 'name' => 'ville')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('PAYS. :'); ?> <?php echo form_error('pays'); ?></td>
            <td><?php echo form_input(array('id' => 'pays', 'name' => 'pays')); ?><br /></td>
          </tr>
           <tr>
            <td><?php echo form_label('NUMERO SS :'); ?> <?php echo form_error('numss'); ?></td>
            <td><?php echo form_input(array('id' => 'numss', 'name' => 'numss')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('NUMERO IDEN. ATTENTE :'); ?> <?php echo form_error('numia'); ?></td>
            <td><?php echo form_input(array('id' => 'numia', 'name' => 'numia')); ?><br /></td>
          </tr>
           <tr>
            <td><?php echo form_label('NUMERO TECH. TEMPORAIRE :'); ?> <?php echo form_error('numtt'); ?></td>
            <td><?php echo form_input(array('id' => 'numtt', 'name' => 'numtt')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('PERSONNE HANDICAPE:'); ?> <?php echo form_error('handicape'); ?></td>
            <td><?php $handicape=array('oui' => 'Oui', 'non' => 'Non'); 
                  echo form_dropdown('handicape',$handicape,'Oui','class = "gui"'); ?>
             </td>
          </tr>
          <tr>
           
                    
            <td><?php echo form_label('NOMBRE ENFANT EN CHARGE :'); ?> <?php echo form_error('numia'); ?></td>
            <td><?php echo form_input(array('id' => 'enfant', 'name' => 'enfant')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('MODE DE PAIEMENT:'); ?> <?php echo form_error('modepaie'); ?></td>
            <td><?php $modepaie=array('virement' => 'Virement', 'cheque' => 'Cheque'); 
                  echo form_dropdown('modepaie',$modepaie,'Virement','class = "gui"'); ?>
             </td>
          </tr>
          
           <tr>
            <td><?php echo form_label('IBAN :'); ?> <?php echo form_error('iban'); ?></td>
            <td><?php echo form_input(array('id' => 'iban', 'name' => 'iban')); ?><br /></td>
            <td></td><td></td><td></td>
            <td><?php echo form_label('BIC :'); ?> <?php echo form_error('bic'); ?></td>
            <td><?php echo form_input(array('id' => 'bic', 'name' => 'bic')); ?><br /></td>
          </tr>
           
     </table>


        <?php echo form_submit(array('id' => 'submit', 'value' => 'Enrégistrer')); ?>
    </div>





</div>
</div>
</body>
</html>