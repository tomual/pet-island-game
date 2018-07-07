<?php $this->load->view('header') ?>
<link href="<?php echo base_url('css/world.css') ?>" rel="stylesheet">

<div class="game">
    <div class="top">
        <h1>cocobox</h1>
        <div class="menu"></div>
    </div>
    <div class="left">
        <div class="world"></div>
    </div>
    <div class="right">
        <div class="chat">
            <div class="messages"></div>
            <div class="form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Message">
                    <div class="input-group-append">
                        <button class="input-group-text btn">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>