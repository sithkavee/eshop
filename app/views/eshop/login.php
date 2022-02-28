<?php $this->view("header",$data);?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div style="color:crimson;margin-left:13px;font-size:16px;font-weight:600;"><?php check_error(); ?></div>
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST">
							<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>"placeholder="Email Address" />
							<input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '';?>"placeholder="Password " />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
						<br>
						<a href="<?=ROOT?>signup">Dont have an account?? Signup here</a>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

	<?php $this->view("footer",$data);?>
	
	
