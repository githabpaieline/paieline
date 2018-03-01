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
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Générations des bulletins</label>

                  <div class="col-sm-10">
                     <select class="form-control">
                        <option>Activé</option>
                        <option>Désactivé</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Date de générations</label>

                  <div class="col-sm-10">
                     <div class='input-group date' data-provide="datepicker" id='datetimepicker2' data-date-format="dd-mm-yyyy">
                       <input type='text' size="10" class="form-control" id="date_generation" name="date_generation" value="<?php echo set_value('date_generation'); ?>" placeholder="Le dernier jour du mois de paie"/>
                       <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                   </div><font size="5px" color="red"><strong>*</strong></font>
                  </div>
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title">Bulletin envoyé par email aux employés</h3>
                </div>
                <br/>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Envoi automatique du bulletin</label>

                  <div class="col-sm-10">
                     <select class="form-control">
                        <option>Activé</option>
                        <option>Désactivé</option>
                      </select>
                  </div>
                </div>
                <div class="box-header with-border">
                  <h3 class="box-title">Espace employé</h3>
                </div>
                <br/>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>

                  <div class="col-sm-10">
                     <button data-toggle="modal" data-target="#modal-default" type="button" class="btn btn-primary">Vérifier les créations d'espace employé</button>
                     <!-- <a href="#" data-toggle="modal" data-target="#<?php  echo $id_dossier; ?>"><font size="3px" color="black"><strong><?php  echo $dossier_cree['numero_dossier']; ?></strong></font></a> -->
                                          
                  </div>
                </div>
               <!--  <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">ENREGISTRER</button> 
                <!-- <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button> -->
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
         
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">générations des bulletins</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form-horizontal">
              <div class="box-header with-border">
                 <div class="form-group">
                  <label>Générations des bulletins</label>
                  <select class="form-control">
                    <option>Activé</option>
                    <option>Désactivé</option>
                  </select>
                </div> 
                <div class="form-group">
                  <label>Date de générations</label>
                 <!--  <input type="text" class="form-control" placeholder="Enter ..."> -->
                   <div class='input-group date' data-provide="datepicker" id='datetimepicker2' data-date-format="dd-mm-yyyy">
                       <input type='text' size="10" class="form-control" id="date_generation" name="date_generation" value="<?php echo set_value('date_generation'); ?>"/>
                       <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                   </div><font size="5px" color="red"><strong>*</strong></font>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <!-- radio -->
                <!-- <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div> -->
                <!-- radio -->
                <!-- <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div> -->

                <!-- select -->
                <!-- <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div> -->
               <!--  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                         <tr>
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td>-</td>
                          <td>U</td>
                        </tr>
                        </tbody>
                          </table>
                        </div>
                <!-- /.box-body -->
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">VALIDER</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>