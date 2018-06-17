<?php $this->load->view('header') ?>
<h1>Log In</h1>
<?php if($this->session->flashdata('error')): ?>
<div class="error"><?php echo $this->session->flashdata('error') ?></div>
<?php endif ?>
<form method="post">
    <table>
        <tr>
            <td><label for="email">Email</label></td>
            <td>
                <input type="text" name="email" id="email" value="<?php echo set_value('email') ?>">
                <?php echo form_error('email') ?>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>
                <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>">
                <?php echo form_error('password') ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Start"></td>
        </tr>
    </table>
</form>
<?php $this->load->view('footer') ?>
