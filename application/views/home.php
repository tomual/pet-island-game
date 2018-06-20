<?php $this->load->view('header') ?>
<h1>Cocobox</h1>
<p>Welcome to your island</p>

<style>
	.world {
		background: #CCC;
		height: 500px;
		width: 600px;
		position: relative;
		border-radius: 10px;
	}

	.land {
		background: #999;
		height: 200px;
		width: 540px;
		position: absolute;
		bottom: 0;
		margin: 30px;
		box-sizing: border-box;
		border-radius: 30px;
	}

	.pet .head {
		background: #666;
		height: 100px;
		width: 100px;
		left: 5px;
		position: absolute;
		border-radius: 100px;
	}

	.pet .body {
		background: #666;
		height: 100px;
		width: 100px;
		top: 70px;
		position: absolute;
		border-top-left-radius: 50px;
		border-top-right-radius: 50px;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
	}

	.pet {
		position: relative;
		top: -40px;
		left: 50px;
	}
</style>

<div class="world">
	<div class="land">
		<div class="pet">
			<div class="head"></div>
			<div class="body"></div>
		</div>
	</div>
</div>

<?php $this->load->view('footer') ?>
