<?php $this->load->view('header') ?>

<div class="profile">
	<div class="row">
		<div class="col-lg-12">
			<div class="topic">Profile</div>
			<h1>Myname122</h1>
			<div class="row">
				<div class="col-lg-3">
					<div class="user">
						<a href=""><img src="https://via.placeholder.com/100"></a>
						<div class="label">Profesional slacker</div>
					</div>
				</div>
				<div class="col-lg-9">

					<div class="overview">

						<div class="row">
							<div class="col-lg-6">
								<table class="table table-sm">
									<tr>
										<th width="100">Server</th>
										<td>Mardia</td>
									</tr>
									<tr>
										<th>Class</th>
										<td>WIndrunner</td>
									</tr>
									<tr>
										<th>Joined</th>
										<td>02/02/2010</td>
									</tr>
									<tr>
										<th>Posts</th>
										<td>12</td>
									</tr>
									<tr>
										<th>Screens</th>
										<td>11</td>
									</tr>
								</table>
							</div>

							<div class="col-lg-6">
								<table class="table table-sm">
									<tr>
										<th width="100">Name</th>
										<td>Mardia</td>
									</tr>
									<tr>
										<th>Age</th>
										<td>11</td>
									</tr>
									<tr>
										<th>Country</th>
										<td>WIndrunner</td>
									</tr>
									<tr>
										<th>Occupation</th>
										<td>02/02/2010</td>
									</tr>
									<tr>
										<th>Interests</th>
										<td>12</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="wall">
						<h2>Wall</h2>

						<div class="reply">
							<div class="row">
								<div class="col-lg-12">
									<form>
										<div class="form-group">
											<label for="message" class="sr-only">Message</label>
											<textarea name="message" id="message" class="form-control" rows="3"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" value="Post" class="btn btn-primary">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="post">
							<div class="row">
								<div class="col-lg-3">
									<div class="user">
										<a href=""><img src="https://via.placeholder.com/100"></a>
										<a href=""><div class="username">Myname11</div></a>
										<div class="label">Profesional slacker</div>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
									</div>
									<div class="footer">
										<span class="quote"><span class="jam jam-arrow-right"></span>Reply</span>
										<span class="flag"><span class="jam jam-flag-f"></span>Flag</span>
										<span class="posted">Posted 15/02/2019 04:00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>