<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->config->base_url(); ?>_/images/logo.png" />
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
	                <li>
	                    <a href="search.html">
	                        <i class="material-icons">search</i>
	                        <p>search</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="requests.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>Requests</p>
	                    </a>
	                </li>
					<li class="active-pro">
	                    <a href="../../index.html">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log out</p>
	                    </a>
	                </li>
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
						<a class="navbar-brand" href="#">Requests</a>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Requests Table</h4>
	                                <p class="category">Here is where you can check your requests status</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-gray">
	                                    	<th>Request</th>
	                                    	<th>HR approval</th>
	                                    	<th>Admin approval</th>
											<th></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td><a><p class="text-gray">Sender:Ahmed@GP.loacal, Recepient:Serag@gp.local, Subject:spam</p></a></td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-green btn-round" disabled>Approved<div class="ripple-container"></div></a>
												</td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-red btn-round" disabled>pending<div class="ripple-container"></div></a>
												</td>
												<td class="te3xt-primary"> 
													<a href="" class="btn btn-round" disabled>submit<div class="ripple-container"></div></a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td><a><p class="text-gray">Sender:Serag@GP.loacal, Recepient:salah@gp.local, Subject:Meeting</p></a></td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-green btn-round" disabled>Approved<div class="ripple-container"></div></a>
												</td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-green btn-round" disabled>Approved<div class="ripple-container"></div></a>
												</td>
												<td class="text-primary"> 
													<a href="search_result.html" class="btn btn-round" >submit<div class="ripple-container"></div></a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td><a><p class="text-gray">Sender:Hamed@GP.loacal, Recepient:Ayman@gp.local, Subject:personal information, Date from : 31/21/2016 20:46, body: rabie</p></a></td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-red btn-round" disabled>pending<div class="ripple-container"></div></a>
												</td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-red btn-round" disabled>pending<div class="ripple-container"></div></a>
												</td>
												<td class="text-primary"> 
													<a href="#" class="btn btn-round" disabled>submit<div class="ripple-container"></div></a>
												</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
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
</html>
