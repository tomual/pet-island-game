<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://tabler.github.io/tabler/assets/css/dashboard.css">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-6">
            <div class="col-8">
                <h1 class="title">cocobox</h1>
            </div>
            <div class="col text-right">
                <?php if ($this->user): ?>
                    <div class="menu-authed">
                        <a href="<?php echo base_url("user/{$this->user->user_id}") ?>"><?php echo $this->user->first_name ?></a> <span class="middot">&middot;</span> 
                        <i class="fe fe-box mr-1"></i><?php echo $this->currency_model->get_beans() ?> <span class="middot">&middot;</span>
                        <a href="<?php echo base_url('user/logout') ?>">Log Out</a>
                    </div>
                <?php else: ?>
                    <div class="menu-guest"><a href="<?php echo base_url('user/login') ?>">Log In</a> | <a href="<?php echo base_url('user/signup') ?>">Sign Up</a></div>
                <?php endif ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="world">
                    <div class="pet">
                        <?php $this->load->view('pets/pet.svg') ?>
                    </div>
                    <div class="bean">
                        <a href="<?php echo base_url('collect/bean') ?>"></a>
                    </div>
                    <div class="land">
                        <img src="<?php echo base_url('svg/land/default.svg') ?>">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card chat">
                    <div class="card-header"><h3 class="card-title">Chat</h3></div>
                    <div class="card-body">
                        <div class="lines">
                            <div class="line text-muted">
                                Welcome to cocobox!
                            </div>
                            <div class="line">
                                <b class="text-blue">user080909</b>: Test message
                            </div>
                            <div class="line">
                                <b class="text-purple">purplepen</b>: Test message
                            </div>
                            <div class="line">
                                <b class="text-red">riki</b>: Test message
                            </div>
                            <div class="line">
                                <b class="text-blue">user080909</b>: Test message
                            </div>
                            <div class="line">
                                <b class="text-red">riki</b>: Test message
                            </div>
                            <div class="line text-muted">
                                You have picked up: <b>chocolate sandwich</b>
                            </div>
                            <div class="line">
                                <b class="text-red">riki</b>: Test message
                            </div>
                            <div class="line">
                                <b class="text-blue">user080909</b>: Test message
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="input-group">
                            <input class="form-control" placeholder="Message" type="text">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inventory">
                    <div class="inventory-title">INVENTORY</div>
                    <div class="item-slot"><div class="item"><i class="fe fe-box"></i></div></div>
                    <div class="item-slot"><div class="item"><i class="fe fe-box"></i></div></div>
                    <div class="item-slot"><div class="item"><i class="fe fe-box"></i></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                    <div class="item-slot"><div class="item"></div></div>
                </div>
            </div>
        </div>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://tabler.github.io/tabler/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="http://animejs.com/anime.min.js"></script>
    <script src="<?php echo base_url('js/script.js') ?>"></script>
</body>
</html>