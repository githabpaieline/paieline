<ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('user/home') ?>"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                        </li>
                     <!--   <li>
                            <a href="#"><i class="glyphicon glyphicon-briefcase fa-fw"></i> Gestion Des Dossiers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="<?php //echo site_url('dossier/creation_dossier_ot') ?>"><i class="fa fa-table fa-fw"></i>Création Dossier</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('dossier/lister_dossier_ot') ?>"><i class="fa fa-table fa-fw"></i>Suivi dossiers</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('dossier/lister_dossier_ot_archiver') ?>"><i class="fa fa-table fa-fw"></i>Archive</a>
                                </li> 
                            </ul>
                        </li>-->
                        <?php  
                            $access = $this->session->userdata('access');
                            //foreach ($access as $key => $page_access) {}
                            if($this->ion_auth_model->authorize($access["NOUVEAU"]["NV_DOSSIER"]["view"])){ 
                        ?>
                        <li>
                            <a href="<?php echo site_url('dossier/creation_dossier_ot') ?>"><i class="glyphicon glyphicon-folder-open fa-fw"></i> Création Dossier</a>
                        </li> 
                        <?php }
                        if($this->ion_auth_model->authorize($access["NOUVEAU"]["LST_DOC"]["view"])){ 
                        ?>
                        <li>
                            <a href="<?php echo site_url('dossier/lister_creation_dossier_ot') ?>"><i class="glyphicon glyphicon-book fa-fw"></i> Liste Dossiers ouverts</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["NOUVEAU"]["VALIDATION"]["view"])){ 
                        ?>
                         <li>
                            <a href="<?php echo site_url('dossier/dossier_validation') ?>"><i class="glyphicon glyphicon-briefcase fa-fw"></i> Dossiers à valider</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["TRAITEMENT"]["DECLARATION"]["view"])){ 
                        ?>
                        <li>
                            <a href="<?php echo site_url('dossier/lister_dossier_ot_declaration') ?>"><i class="glyphicon glyphicon-duplicate fa-fw"></i> Gestion des déclarations</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["TRAITEMENT"]["LIVRAISON"]["view"])){ 
                        ?>
                         <li>
                            <a href="<?php echo site_url('dossier/lister_dossier_ot_livraison') ?>"><i class="fa fa-truck fa-fw"></i> Gestion de la livraison</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["TRAITEMENT"]["FACTURATION"]["view"])){ 
                        ?>
                         <li>
                            <a href="<?php echo site_url('dossier/lister_dossier_ot_facturation') ?>"><i class="fa fa-bitcoin fa-fw"></i> Gestion de la Facturation</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["TRAITEMENT"]["SUIVI"]["view"])){ 
                        ?>
                        <li>
                            <a href="<?php echo site_url('dossier/lister_dossier_ot') ?>"><i class="glyphicon glyphicon-sort-by-attributes fa-fw"></i> Suivi dossiers</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["ARCHIVE"]["ARCHIVE"]["view"])){ 
                        ?>
                        <li>
                            <a href="<?php echo site_url('dossier/lister_dossier_ot_archiver') ?>"><i class="glyphicon glyphicon-folder-close fa-fw"></i> Archive</a>
                        </li>
                        <?php }
                        if($this->ion_auth_model->authorize($access["STATISTIQUE"]["STAT"]["view"])){ 
                        ?>
                        <li>
                            <a href="# <?php //echo site_url('dossier/statistique_generale') ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Statistique</span></a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="#">Morris.js Charts</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                       <?php }
                        ?>
                       
                        <!-- <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            
                        </li> -->
                    </ul>