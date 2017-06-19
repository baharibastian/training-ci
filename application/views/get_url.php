<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>custom/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="dashboard">Home</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
				<div class="nav navbar-nav">
					<li><a href="<?php echo base_url()?>statistics">Statistics</a></li>
				</div>
				<ul class="nav navbar-nav navbar-right">        
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username') ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()?>users/logout">Logout</a></li>            
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->

		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php

				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
				echo form_open();
				?>
				<div class="col-md-11"> 
				<?php
				echo form_input(array("class"=>"form-control","placeholder"=>"Enter URL","name"=>"url"));
				?>
				</div>
				<?php
				echo form_submit('shorty','Shorten','class="btn btn-primary"');

				echo form_close();
				echo "<br/>";
				if(isset($short_url))
				{
					echo '<div class="alert alert-warning"><a href="'.base_url().$short_url.'" target="_blank" class="shorty_url">'.base_url().$short_url.'</a></div>';
				}

				if(isset($error))
				{
					echo '<div class="errors">'.$error.'</div>';
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>