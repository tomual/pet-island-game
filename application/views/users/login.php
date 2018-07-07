<?php $this->load->view('header') ?>
<div class="col-lg-4 offset-lg-4">
    <h1>Log In</h1>
    <?php if($this->session->flashdata('error')): ?>
    <div class="error"><?php echo $this->session->flashdata('error') ?></div>
    <?php endif ?>
    <form method="post">
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" value="<?php echo set_value('email') ?>" class="form-control <?php echo is_valid('email') ?>">
            <?php echo form_error('email') ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>" class="form-control <?php echo is_valid('email') ?>">
            <?php echo form_error('password') ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Log In" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $this->load->view('footer') ?>
