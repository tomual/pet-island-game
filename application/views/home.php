<?php $this->load->view('header') ?>
<div class="col">
	<h1>CuteIgniter</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h3>Features</h3>
	<ul class="py-4">
		<li>
			User authentication
			<ul>
				<li>Log in/Sign up</li>
				<li>Forgot Password</li>
				<li>Change Email</li>
				<li>Change Password</li>
				<li>Extend Authenticated_Controller for auth checks</li>
			</ul>
		</li>
		<li>Mailing list</li>
		<li>
			Bootstrap 4
			<ul>
				<li>Alerts with CodeIgniter flashdata</li>
				<li>Form validation with error styling</li>
			</ul>
		</li>
		<li>HTML5 Boilerplate</li>
	</ul>
	<form method="post" action="<?php echo base_url('mailing') ?>">
		<h5>Mailing List Signup</h5>
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
</div>
<?php $this->load->view('footer') ?>