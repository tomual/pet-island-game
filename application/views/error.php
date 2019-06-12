<?php $this->load->view('header') ?>

<div class="row">
	<div class="col-lg-9">
		<?php if ($this->session->flashdata('error')):?>
			<p><?php echo $this->session->flashdata('error') ?></p>
		<?php else: ?>
			<p>The server could not complete your request.</p>
		<?php endif ?>
	</div>
</div>
<?php $this->load->view('footer') ?>