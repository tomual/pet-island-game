<?php $this->load->view('header') ?>
<div class="container"> 
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h1>Reset Password</h1>
            <?php alerts() ?>
            <form method="post">
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>" class="form-control <?php echo is_valid('password') ?>">
                    <?php echo form_error('password') ?>
                </div>
                <div class="form-group">
                    <label for="password2">New Password (again)</label>
                    <input type="password" name="password2" id="password2" value="<?php echo set_value('password2') ?>" class="form-control <?php echo is_valid('password2') ?>">
                    <?php echo form_error('password2') ?>
                </div>
                <div class="form-group">
                    <input type="submit" value="Reset" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('footer') ?>
