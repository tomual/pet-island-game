<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo get_title() ? get_title() . ' | ' : '' ?>Site Title</title>
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta http-equiv="cleartype" content="on">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
    <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#222222">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('css/normalize.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/main.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/override.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <a href="<?php echo base_url() ?>"><h1>fame410k</h1></a>
            <div class="subtitle">MapleStory community forums</div>
            <div class="auth">
                <ul>
                    <?php if ($this->user): ?>
                        <li>
                            <a href="<?php echo base_url('settings/edit') ?>"><?php echo $this->user->username ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/logout') ?>">Log Out</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo base_url('user/login') ?>">Log In</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/signup') ?>">Sign Up</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
    <div role="main" class="container">