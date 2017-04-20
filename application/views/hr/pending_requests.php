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
                    <li class="active">
	                    <a href="pending_requests.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>pending requests</p>
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
						<a class="navbar-brand" href="#">pending requests</a>
					</div>
				
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
						<div class="col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Requests:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#search" data-toggle="tab">
														<i class="material-icons">search</i>
														Search
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#delete" data-toggle="tab">
														<i class="material-icons">delete_forever</i>
														Delete
													<div class="ripple-container"></div></a>
												</li>
												<!--li class="">
													<a href="#copy" data-toggle="tab">
														<i class="material-icons">content_copy</i>
														copy
													<div class="ripple-container"></div></a>
												</li -->
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="search">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Create 4 Invisible User Experiences you Never Knew About</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="delete">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="copy">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="view mail" data-toggle="modal" data-target="#viewMail" class="btn btn-simple btn-xs">
																<i class="material-icons">mail</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card-footer">
									 <button type="submit" class="btn btn-red pull-right">Deny</button>
									 <button type="submit" class="btn  btn-primary pull-right">Approve</button>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- mail view modal -->
	 <div class="modal fade" id="viewMail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
				<div class="modal-body">
					<div class=" mail-header">
						<div class="row">
							<div class="col-md-4">
								<label>From:</label>
							</div>
							<div class="col-md-8">
								Ahmed El-Kollaly "ahmed_elkollaly@hotmail.com"
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>To:</label>
							</div>
							<div class="col-md-8">
								Ahmad Hamed "ahmad_hamed95@yahoo.com""
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>cc:</label>
							</div>
							<div class="col-md-8">
								Ahmed Salah "a7mad.sala7@live.com",
								Ayman Ali "aymanaliali@ymail.com",
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>Subject:</label>
							</div>
							<div class="col-md-8">
								Ayman Ali Personal Information
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>date:</label>
							</div>
							<div class="col-md-8">
								Sat, Mar 11, 2017 at 12:53 PM
							</div>
						</div>
					</div>
					<div class="mail-header">
						<div class="row">
							<div class="col-md-12">
								<h4> Body</h4>
								<p> 
									this is my mail for you informing you that I've found some data about
									your manager where you can use it to blackmeal him ;).
								</p>
							</div>
						</div>
					</div>
					<div class="">
						<div class="row">
							<div class="col-md-4">
								<a href="#" data-toggle="tab">
									<i class="material-icons">attachment</i>
										Personal.pdf
									<div class="ripple-container"></div>
								</a>	
							</div>
						</div>
					</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
