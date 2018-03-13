<!-- Content Wrapper. Contains page content -->
  <div ><!-- class="content-wrapper" -->
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Générations des bulletins
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Compte Employé</a></li>
        <li class="active">Générations des bulletins</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <div class="row" >
        <!-- left column -->
        <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">générations des bulletins</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start class="form-horizontal"-->
            <form role="form" enctype="multipart/form-data" action="<?php echo site_url('paramEmployeur/param_generation_bulletin') ?>" method="post" class="form-inline">
              <div class="box-header with-border">
                 <div class="form-group">
                  <label>Générations des bulletins</label>
                  <select class="selectpicker" name="gen_bulletin" id="gen_bulletin" data-live-search="true" data-style="btn-success">
                    <option data-tokens="ketchup mustard">Selectionnez..</option>
                    <option value="1">Activé</option>
                    <option value="0">Désactivé</option>
                  </select>
                </div> 
                <br/><br/>
                <div class="form-group">
                  <label>Date de générations</label>
                   <div class='input-group date' data-provide="datepicker" id='datetimepicker2' data-date-format="dd-mm-yyyy">
                       <input type='text' size="10" class="form-control" id="date_generation" name="date_generation" value="<?php echo set_value('date_generation'); ?>"/>
                       <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                   </div><font size="5px" color="red"><strong>*</strong></font>
                </div>
                <br/><br/><br/>
                <!-- textarea -->
              <div class="box-header with-border">
                  <h3 class="box-title">Bulletin envoyé par email aux employés</h3>
                </div>
                <br/>
                 <div class="form-group">
                  <label for="inputEmail3">Envoi automatique du bulletin</label>
                  <select class="selectpicker" name="envoi_auto_bul" id="envoi_auto_bul" data-live-search="true" data-style="btn-success">
                    <option data-tokens="ketchup mustard">Selectionnez..</option>
                    <option value="1">Activé</option>
                    <option value="0">Désactivé</option>
                  </select>
                </div>
                <br/><br/><br/>
                 <div class="box-header with-border">
                  <h3 class="box-title">Espace employé</h3>
                </div>
                <br/>
                 <div class="form-group" align="center">
                  <label for="inputEmail3"> </label>

                     <button data-toggle="modal" data-target="#modal-default" type="button" class="btn btn-primary">Vérifier les créations d'espace employé</button>
                     <!-- <a href="#" data-toggle="modal" data-target="#<?php  //echo $id_dossier; ?>"><font size="3px" color="black"><strong><?php  echo $dossier_cree['numero_dossier']; ?></strong></font></a> -->
                       
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">ENREGISTRER</button> 
              </div>
            </form>
          </div>
         
     
          </div>
          <!-- /.box -->

        </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3C8DBC; color:white" align="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Création Espace Employé</h4>
              </div>
              <div class="modal-body">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Employé</th>
                          <th>Email</th>
                          <th>Poste</th>
                          <th>Début</th>
                          <th>Création</th>
                        </tr>
                        </thead>
                        <tbody>
                                    <?php if($employes!=null) foreach($employes as $employe){?>
                                     <tr class="odd gradeX"><?php  //$id_dossier = $dossier_cree['id_dossier']; ?>
                                          <!-- <td>
                                             <a href="#" data-toggle="modal" data-target="#<?php  //echo $id_dossier; ?>"><font size="3px" color="black"><strong><?php  //echo $dossier_cree['numero_dossier']; ?></strong></font></a>
                                              
                                          </td> -->
                                         <td>
                                            <?php  echo $employe['prenom']; echo " "; echo $employe['nom'];//echo $this->ion_auth_model->cherche_libelle_type_dossier($dossier_cree['type_dossier']); ?>
                                        </td>
                                         <td>
                                            <?php echo $employe['email'];//$date_ouvert  = new DateTime($dossier_cree['date_ouvert']); echo $date_ouvert->format('d/m/Y'); ?>
                                        </td>
                                         <td>
                                            <?php  echo $employe['poste'];//echo $dossier_cree['client']; ?>
                                        </td>
                                        <td>
                                            <strong><?php $date_debut  = new DateTime($employe['date_debut']); echo $date_debut->format('d/m/Y');//echo $this->ion_auth_model->cherche_libelle_etat_dossier($dossier_cree['etat_dossier']); ?></strong>
                                        </td>
                                     <!--
                                        <td><a href="#" data-toggle="modal" data-target="#largeModal"><strong>170100</strong></a></td>
                                        <td>Importation</td>
                                        <td>01/01/2017</td>
                                        <td class="center">ASECNA Dakar</td>
                                        <td class="center" title="DOSSIERS OUVERTS INCOMPLETS" style="color:#840236"><strong>DOI</strong></td>
                                      -->  <td class='actions'>
                                            <div class="tools" align="center">
                                            <?php  
                                                //$access = $this->session->userdata('access');
                                                //if($this->ion_auth_model->authorize($access["NOUVEAU"]["LST_DOC"]["edit"])){ 
                                            ?>
                                                <!-- <a href="#" class="edit_button" title="Visualiser dossier" data-toggle="modal" data-target="#<?php  //echo $id_dossier; ?>" role="button">
                                                <img src="<?php //echo base_url('assets/grocery_crud/themes/flexigrid/css/images/magnifier.png') ?>" alt="voir"/>
                                                <span class="edit-icon" ></span></a>  -->
                                               <?php //}
                                                  //if($this->ion_auth_model->authorize($access["NOUVEAU"]["LST_DOC"]["edit"])){ 

                                                  /*$dossier = $this->ion_auth_model->chercher_dossier($id_dossier);
                                                  if ($dossier['mode_transport']!=null) {
                                                      $type_transport = $this->ion_auth_model->cherche_libelle_mode_transport($dossier['mode_transport']);
                                                    }
                                                    else{$type_transport ="";}*/ ?>
                                                <!--   <input type="hidden" class="form-control" name="dossier" id="dossier" value="<?php echo $dossier['numero_dossier']; ?>">
                                                 <a href="<?php //echo site_url("dossier/modification_dossier_cree?id_dossier=".$id_dossier."") ?>" class="edit_button" title="Modifier dossier">
                                                <img src="<?php //echo base_url('assets/grocery_crud/themes/flexigrid/css/images/edit.png') ?>" alt="modifier"/>
                                                <span class="edit-icon" ></span></a> 
                                                 <a href="<?php //echo site_url("dossier/genpdf_dossier_cree?id_dossier=".$id_dossier."&amp;dossier=".$dossier['numero_dossier']."&amp;mode_transport=".$type_transport."") ?>" class="edit_button" title="Générer PDF Dossier" target="_blank" role="button">
                                                    <img src="<?php //echo base_url('assets/grocery_crud/themes/flexigrid/css/images/pdf1.jpg') ?>" alt="voir"/>
                                                  <span class="edit-icon" ></span></a> -->
                                                <?php //}
                                                //if($this->ion_auth_model->authorize($access["NOUVEAU"]["LST_DOC"]["edit"])){ 
                                                  ?>
                                                  <!-- <a href="#" class="edit_button" title="Charger fichier" data-toggle="modal" data-target="#<?php  echo $id_dossier; ?><?php  echo $id_dossier; ?>" role="button">
                                                    <img src="<?php //echo base_url('assets/grocery_crud/themes/flexigrid/css/images/download_image.png') ?>" alt="Dowload"/>
                                                 <span class="edit-icon" ></span></a> -->
                                                 <?php //} ?>
                                            </div>
                                        </td> 
                                    </tr>

                              <?php //include('modal_fichier_dossier.php'); ?>
                             <?php //include('modal_voir_dossier_cree2.php'); ?> 
                                    <?php }?>
                                   
                                </tbody>
                          </table>
                        </div>
                <!-- /.box-body -->
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
               <!--  <button type="button" class="btn btn-success">VALIDER</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>