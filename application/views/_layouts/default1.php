<?php $this->load->view('_partials/navbar1'); ?>

<!-- <div class="container">
	<div class="page-header"><h1><?php //echo $page_title; ?></h1></div>
	<section class="content">
		<div align="center">
		<?php //$this->load->view($inner_view); ?>
		</div>
	</section>
</div> -->
<?php $this->load->view($contents); ?>
<?php $this->load->view('_partials/footer1'); ?>