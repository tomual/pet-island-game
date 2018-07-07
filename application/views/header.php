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
    <header>
        <div class="title"><a href="<?php echo base_url() ?>">title</a></div>
        <?php if ($this->user): ?>
            <div class="menu-authed">
                <a href="<?php echo base_url("user/{$this->user->user_id}") ?>"><?php echo $this->user->first_name ?></a> &middot; 
                <i class="fe fe-box"></i><?php echo $this->currency_model->get_beans() ?> &middot;
                <a href="<?php echo base_url('user/logout') ?>">Log Out</a>
            </div>
        <?php else: ?>
            <div class="menu-guest"><a href="<?php echo base_url('user/login') ?>">Log In</a> | <a href="<?php echo base_url('user/signup') ?>">Sign Up</a></div>
        <?php endif ?>
        <nav>
            <ul>
                <li><a href="<?php echo base_url() ?>">Home</a></li>
            </ul>
        </nav>
    </header>
