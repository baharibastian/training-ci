<!DOCTYPE html>
<html>
<head>
	<title>Register & Login Tutorial</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>custom/css/style.css">

</head>
<body>

<div class="col-md-4 col-md-offset-4 col-vertical-4">
	<div class="panel panel-default">
	  <div class="panel-heading">Login</div>
	  <div class="panel-body">
	  	<div id="messages"></div>
	    <form action="<?php echo base_url()?>users/login_act" method="post">
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>			  
			  <input type="submit" class="btn btn-default" value="Submit">
			</form>
	  </div>
	  <div class="panel-footer">
	  	No Account!!! <a href="<?php echo base_url()?>users/register">Sign Up</a>
	  </div>
	</div>
</div>

	<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/bootstrap.min.js"></script>


</body>
</html>