<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <?php if ($this->user): ?>
        <div class="menu-authed">
            <a href="<?php echo base_url("user/{$this->user->user_id}") ?>"><?php echo $this->user->first_name ?></a> <span class="middot">&middot;</span> 
            <i class="fe fe-box mr-1"></i><?php echo $this->currency_model->get_beans() ?> <span class="middot">&middot;</span>
            <a href="<?php echo base_url('user/logout') ?>">Log Out</a>
        </div>
    <?php else: ?>
        <div class="menu-guest"><a href="<?php echo base_url('user/login') ?>">Log In</a> | <a href="<?php echo base_url('user/signup') ?>">Sign Up</a></div>
    <?php endif ?>
    <!-- <img src="<?php echo base_url('images/cocobox concept.png') ?>"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="<?php echo base_url('js/script.js') ?>"></script>
</body>
</html>