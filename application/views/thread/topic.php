<?php $this->load->view('header') ?>

<div class="row">
	<div class="forum col-lg-9">
		<div class="category">
			<div class="topic"><a href=""><?php echo $this->metadata->topics[$topic] ?></a><a href="<?php echo base_url('thread/new') ?>" class="float-right"><span class="jam jam-plus"></span> New</a></div>
			<div class="threads">
				<a href="<?php echo base_url('thread/view/2') ?>">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
				<a href="">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
				<a href="">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
				<a href="">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
				<a href="">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
				<a href="">
					<div class="thread">
						<span class="title">Title of a thread</span>
						<span class="replies">&middot; 4 &middot;</span>
						<span class="preview text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing ...</span>
						<span class="posted">06/12</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="sidebar col-lg-3">
		<div class="screenshots">
			<div class="topic"><a href="">MapleStory Media</a></div>
			<div class="screenshot">
				<a href="<?php echo base_url('screenshot/12/thing-name') ?>"><img src="https://via.placeholder.com/160x90"></a>
				<a href=""><div class="title">This is the image title</div></a>
				<a href=""><div class="submitter">MyName11</div></a>
				<a href=""><div class="like text-muted"><span class="jam jam-heart"></span>4</div></a>
			</div>
			<div class="screenshot">
				<img src="https://via.placeholder.com/160x90">
				<div class="title">This is the image title</div>
				<div class="submitter">MyName11</div>
				<div class="like text-muted"><span class="jam jam-heart"></span>4</div>
			</div>
			<div class="screenshot">
				<img src="https://via.placeholder.com/160x90">
				<div class="title">This is the image title</div>
				<div class="submitter">MyName11</div>
				<div class="like text-muted"><span class="jam jam-heart"></span>4</div>
			</div>
			<div class="screenshot">
				<img src="https://via.placeholder.com/160x90">
				<div class="title">This is the image title</div>
				<div class="submitter">MyName11</div>
				<div class="like text-muted"><span class="jam jam-heart"></span>4</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>