<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/custom/css/style.css">

</head>
<body>

	<div class="col-md-4 col-md-offset-4 col-vertical-4">
		<div class="panel panel-default">
			<div class="panel-heading">Register</div>
			<div class="panel-body">
				<div id="messages"></div>
				<?php echo $this->session->flashdata('pesan'); ?>
				<form action="<?php echo base_url()?>users/register_act" method="post" id="registerForm">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>			  
					<div class="form-group">
						<label for="passwordAgain">Email</label>
						<input type="text" class="form-control" id="passwordAgain" name="email" placeholder="Password Again">
					</div>			  
					<div class="form-group">
						<label for="fullName">First Name</label>
						<input type="text" class="form-control" id="fullName" name="firstname" placeholder="John Doe">
					</div>			  
					<div class="form-group">
						<label for="contact">Last Name</label>
						<input type="text" class="form-control" id="contact" name="lastname" placeholder="Contact">
					</div>			  
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="panel-footer">
				Have Account <a href="../">Login</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>