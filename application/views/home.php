<?php $this->load->view('header') ?>
<h1>Cocobox</h1>
<p>Welcome to your island</p>

<style>
    .world {
        background: #CCC;
        background-image: none;
        height: 720px;
        width: 890px;
        position: relative;
        border-radius: 10px;
        background-image: linear-gradient(0deg, #a1c4fd 0%, #c2e9fb 100%);
        border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
    }

    .land {
        background: #999;
        background-image: none;
        height: 220px;
        width: 540px;
        position: absolute;
        bottom: 20px;
        margin: 30px;
        box-sizing: border-box;
        border-radius: 30px;
        background-image: linear-gradient(170deg, #84fab0 0%, #8fd3f4 100%);
        border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
        left: 150px;
        box-shadow: 5px 15px 25px #99baf0;
    }

    .pet svg{
        top: -170px;
        position: absolute;
        left: 40px;
    }


    [inkscape\:label=body] path,
    [inkscape\:label=ears] path,
    [inkscape\:label=head] path,
    [inkscape\:label=arm1] path,
    [inkscape\:label=arm2] path,
    [inkscape\:label=leg1] path,
    [inkscape\:label=leg2] path {
    }

    .bean a {
        display: block;
        background: yellow;
        width: 40px;
        height: 50px;
        -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
        border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
        transform: rotate(30deg);
        margin: auto;
        margin-top: 50px;
    }
</style>

<div class="world">
    <div class="land">
        <div class="pet">
            <?php $this->load->view('pets/pet.svg') ?>
        </div>
        <div class="bean">
            <a href="<?php echo base_url('collect/bean') ?>"></a>
        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>
