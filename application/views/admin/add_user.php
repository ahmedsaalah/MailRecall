<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->config->base_url(); ?>_//images/logo.png" />
	<link rel="icon" type="image/png" href="<?php echo $this->config->base_url(); ?>_/images/logo.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mail Recall</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo $this->config->base_url(); ?>_/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo $this->config->base_url(); ?>_/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="<?php echo $this->config->base_url(); ?>_/images/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					<label><img src="<?php echo $this->config->base_url(); ?>_/images/logo.png" style="width: 25px; height: 25px"></label> Mail REacall
				</a>
			</div>
	

	    	<div class="sidebar-wrapper">
				<ul class="nav">
				<?php	
				
				if ($this->session->userdata("user_type"==1)||($this->session->userdata("user_type")==2&&($this->session->userdata("permissions")[0]->permission_id== '1')))
				{ 
				
				
				?>
	                <li >
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/SearchPage">
	                        <i class="material-icons">search</i>
	                        <p>search</p>
	                    </a>
	                </li>
				<?php }

				if($this->session->userdata("user_type")==1 ||$this->session->userdata("user_type")==2)
				{ ?>

	                <li>
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/RequestPage">
	                        <i class="material-icons">content_paste</i>
	                        <p>Requests</p>
	                    </a>
	                </li>
				<?php }
				if($this->session->userdata("user_type")==1 )
				{ ?>


				    <li class="active">
	                    <a href="add_user.html">
	                        <i class="material-icons">add_circle</i>
	                        <p>add User</p>
	                    </a>
	                </li>
				<?php }
				if($this->session->userdata("user_type")==1 ||$this->session->userdata("user_type")==3)
				{ ?>
                    <li>
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/pending_requests">
	                        <i class="material-icons">content_paste</i>
	                        <p>pending requests</p>
	                    </a>
	                </li>
				<?php } ?>
					<li class="active-pro">
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/logOut">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log out</p>
	                    </a>
	                </li>
					<!--<li class="active-pro">
	                    <a href="../../index.html">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log out</p>
	                    </a>
	                </li>-->

	            </ul>
                
	    	</div>
	    </div>
	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Add User</a>
					</div>
				
				</div>
			</nav>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h3 class="title">Add new User</h3>

											<?php
			//var_dump($this->session->userdata("permissions")[0]->permission_id);
			
			
			?>

									<?php 
									if(isset($error))
									echo $error;
									?>
	                            </div>
	                            <div class="card-content">
	                                <form action="<?php echo $this->config->base_url(); ?>Signup/create_account" method="POST">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="email" name="email" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>
										<div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">password</label>
													<input type="password" name="pw" id="pw1" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label" id="pass2">repeat password</label>
													<input type="password" name="pw2" id="pw2" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>


<div class="row" >
<div class="col-md-12">
<div class="form-group label-floating">
				<label class="control-label" id="pass2">Department</label>
												
<select  id="choiceSection" name="section" class="form-control">

<option value="3">HR</option>
<option value="1">Admin</option>
<option value="2">User</option>
</select>
</div>
</div>
</div>
										
										<div class="row" id="permissionUser">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<h4 class="control-label">permissions</h4>
													<div class="checkbox">
						
													
														<label>
															<input type="checkbox" name="delete" >
														 	Delete
														</label>

													</div>
													
												</div>
	                                        </div>
	                                    </div>                                       
	                                    <button type="submit" class="btn btn-primary pull-right" >Add user</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
					
	                </div>
	            </div>
	        </div>

	    </div>
	</div>

</body>


		<!--   Core JS Files   -->
	<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>_/js/material.min.js" type="text/javascript"></script>
	
	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo $this->config->base_url(); ?>_/js/material-dashboard.js"></script>
	<script>
			$(document).ready(function() { 
				  $('#permissionUser').hide();

});



	$('#choiceSection').on('change', function() {
  if (this.value ==2)
  {
	 $('#permissionUser').show();

  } 
  else 
  {
	   $('#permissionUser').hide();
  }
})

$("#pw2").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
})
$("#pw1").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
})


$('#pw2').on('change', function() {

if ( this.value != document.getElementById('pw1').value){
	this.value = '';
	document.getElementById('pass2').value = '(must be equal)'

}

})

$('#pw1').on('change', function() {
if ( this.value != document.getElementById('pw2').value){
	document.getElementById('pw2').value = '';
}

})

</script>

</html>
