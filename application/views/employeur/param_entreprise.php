
<style>

div.bordure{
	box-shadow: 4px 4px 4px #2C7A7A;
}
.tt-query,
.tt-hint {
    width: 396px;
    height: 30px;
    padding: 3px 12px;
    font-size: 18px;
    line-height: 30px;
    border: 2px solid #ccc;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    outline: none;
}

.tt-query {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
    color: #999
}

.tt-dropdown-menu {
    width: 422px;
    margin-top: 12px;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
    padding: 3px 20px;
    font-size: 18px;
    line-height: 24px;
}

.tt-suggestion.tt-is-under-cursor {
    color: #fff;
    background-color: #09B78B;

}
#scrollable-dropdown-menu .tt-dropdown-menu {
  max-height: 150px;
  overflow-y: auto;
}

</style>
<script>
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
 $(function () {
	                $('#datetimepicker2').datetimepicker({
	                    autoclose: true,
			       		format: "yyyy-mm-dd",
			       		todayHighlight: true,
			       		orientation: "top auto",
			       		todayBtn: true,
			        	todayHighlight: true,  
	                    locale: 'ru'
	                });
	            });
 $(document).ready(function(){
    
   /* $('#destinataire').autocomplete({
        source:"<?php echo base_url('dossier/rechercheClient') ?>"
    })*/
});

/* $(document).ready(function(){
     alert('Bingo !');
    $("#destinataire").typeahead({
        name : 'destinataire',
        remote: {
            url : '<?php echo base_url('dossier/rechercheClient') ?>'
        }
        
    });
});*/
 
</script>

<script type="text/javascript">
     /*$(document).ready(function(){
    alert('Bingo !');
    });*/
</script>

<div class="content-wrapper">
<section class="content-header">
      <h1>
        MONSIEUR ABDOULAYE SIDIBE
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Compte Employé</a></li>
        <!-- <li class="active">Générations des bulletins</li> -->
      </ol>
    </section>
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
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Générations des bulletins</a></li>
  <li><a data-toggle="tab" href="#menu1">Identification</a></li>
  <li><a data-toggle="tab" href="#menu2">Informations bancaires</a></li>
  <li><a data-toggle="tab" href="#menu3">Autres informations</a></li>
  <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
</ul>
<div class="tab-content kv-main">
  <div id="home" class="tab-pane fade in active">
        <?php include('tab_generation_bulletin_emp.php'); ?>   
  </div>
  <div id="menu1" class="tab-pane fade">
    <?php include('tab_identification_emp.php'); ?>   
  </div> <div id="menu2" class="tab-pane fade">
    <?php include('tab_information_bancaire_emp.php'); ?>   
  </div> <div id="menu3" class="tab-pane fade">
    <?php include('tab_autres_info_emp.php'); ?>   
  </div>
   </div>         
</div>