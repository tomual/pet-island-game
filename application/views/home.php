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

	.pet .head {
		background: #666;
		height: 90px;
		width: 100px;
		left: 0;
		position: absolute;
		border-radius: 100px;
		background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);

	    -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
	    border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
	}

	.pet .body {
		background: #666;
        background-image: none;
	    height: 93px;
	    width: 87px;
	    top: 44px;
	    position: absolute;
	    border-top-left-radius: 50px;
	    border-top-right-radius: 50px;
	    border-bottom-left-radius: 10px;
	    border-bottom-right-radius: 10px;
	    background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);
	    -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
	    border-radius: 50% 80% 50% 50% / 80% 80% 50% 40%;
	    left: 5px;
	}

	.pet {
		position: relative;
		top: -40px;
		left: 145px;
	}

	.ear {
		width: 50px;
	    height: 50px;
	    background: #ff924b;
	    display: block;
	    -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
	    border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
	    left: -13px;
	    top: -10px;
	    transform: rotate(-50deg);
	    position: absolute;
	}

	.ear2 {
		left: 53px;
	    top: -13px;
	    background: #fe8953;	
		transform: rotate(30deg);
	}
</style>

<div class="world">
	<div class="land">
		<div class="pet">
			<div class="body"></div>
			<div class="ear ear1"></div>
			<div class="ear ear2"></div>
			<div class="head">
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer') ?>
