<?php $this->load->view('header') ?>

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<form method="post" action="<?php echo base_url('mailing') ?>">
	<h5>Stay up-to-date</h5>
	<?php alerts() ?>
	<div class="form-group">
		<label class="form-label sr-only">Email</label>
		<input type="email" name="email" class="form-control">
		<small class="form-text text-muted">We'll only use your email to send you updates</small>
	</div>
	<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-primary">
	</div>
</form>
<?php $this->load->view('footer') ?>