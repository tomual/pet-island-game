<?php $this->load->view('header') ?>

<div class="thread">
	<div class="row">
		<div class="col-lg-12">
			<div class="topic"><?php echo $this->metadata->topics[$thread->topic] ?></div>
			<h1><?php echo $thread->title ?></h1>
			<div class="subtitle">Posted by <span class="username"><?php echo $thread->created_by ?></span> @ <?php echo $thread->created ?></div>
			<div class="post first" data-id="<?php echo $thread->post_id ?>">
				<div class="row">
					<div class="col-lg-3">
						<div class="user">
							<a href=""><img src="https://via.placeholder.com/100"></a>
							<a href="<?php echo base_url('profile/12/Myname11') ?>"><div class="username">Myname11</div></a>
							<div class="label">Profesional slacker</div>
							<div class="count">123 posts</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="content">
							<?php echo $thread->message ?>
						</div>
						<div class="footer">
							<span class="thread-id">#<?php echo $thread->post_id ?></span>
							<span class="quote"><span class="jam jam-message-f"></span>Quote</span>
							<span class="flag"><span class="jam jam-flag-f"></span>Flag</span>
							<span class="posted">Posted <?php echo $thread->created ?></span>
						</div>
					</div>
				</div>
			</div>

			<?php foreach ($replies as $reply): ?>
				<a name="<?php echo $reply->post_id ?>"></a>
				<div class="post" data-id="<?php echo $reply->post_id ?>">
					<div class="row">
						<div class="col-lg-3">
							<div class="user">
								<a href=""><img src="https://via.placeholder.com/100"></a>
								<a href=""><div class="username">Myname11</div></a>
								<div class="label">Profesional slacker</div>
								<div class="character"></div>
								<div class="count">123 posts</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="content">
								<?php echo process_post($reply->message) ?>
							</div>
							<div class="footer">
								<span class="thread-id"><a href="#<?php echo $reply->post_id ?>">#<?php echo $reply->post_id ?></a></span>
								<span class="quote"><span class="jam jam-message-f"></span>Quote</span>
								<span class="flag"><span class="jam jam-flag-f"></span>Flag</span>
								<span class="posted">Posted <?php echo $reply->created ?></span>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach ?>

			<a name="reply"></a>
			<div class="reply">
				<div class="row">
					<div class="col-lg-3">
						
					</div>
					<div class="col-lg-9">
						<h2>Post a Reply</h2>
						<form method="post" action="<?php echo base_url("reply/new/{$thread->id}") ?>">
							<div class="form-group">
								<label for="message" class="sr-only">Message</label>
								<textarea name="message" id="message" class="form-control" rows="6"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>