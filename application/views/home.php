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


    [inkscape\:label=top],
    [inkscape\:label=body],
    [inkscape\:label=ears],
    [inkscape\:label=head],
    [inkscape\:label=arm1],
    [inkscape\:label=arm2],
    [inkscape\:label=leg1],
    [inkscape\:label=leg2] {
        transition: all 1s;
        position: relative;
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    var headMovePixels = 0;
    var headRotatePixels = 0;
    var bodyMovePixels = 0;
    var armMovePixels = 0;
    var armRotatePixels = 0;
    $(document).ready(function() {
       breathe();
       blink();
    });  

    function breathe() {
        headMovePixels = headMovePixels ? 0 : 3;
        bodyMovePixels = bodyMovePixels ? 0 : -2;
        armMovePixels = armMovePixels ? 0 : -2;
        armRotatePixels = armRotatePixels ? 0 : 0.5;
        headRotatePixels = headRotatePixels ? 0 : 0.5;
        $('[inkscape\\:label=body]').css('top', bodyMovePixels);
        $('[inkscape\\:label=top]').css('top', headMovePixels);
        $('[inkscape\\:label=top]').css('transform', 'rotate(' + headRotatePixels + 'deg)');
        $('[inkscape\\:label=arm1]').css('top', armMovePixels);
        $('[inkscape\\:label=arm1]').css('transform', 'rotate(' + armRotatePixels + 'deg)');
        $('[inkscape\\:label=arm2]').css('top', armMovePixels);
        $('[inkscape\\:label=arm2]').css('transform', 'rotate(' + armRotatePixels + 'deg)');
        window.setTimeout(function() { breathe() }, 1200)
    }
    function blink() {
        console.log($('[inkscape\\:label=face]').css('display'));
        $('[inkscape\\:label=face]').css('display', 'none');
        $('[inkscape\\:label=face-blink]').css('display', 'block');
        window.setTimeout(function() { 
            $('[inkscape\\:label=face]').css('display', 'inline');
            $('[inkscape\\:label=face-blink]').css('display', 'none');
            window.setTimeout(function() { blink() }, getRandomInt(7) * 1000)
         }, 50);
        
    }
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }
</script>

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
