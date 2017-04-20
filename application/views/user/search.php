<!doctype html>
<html lang="en">
<head>
	
	<title>Mail Recall</title>
<?php $this->load->view('user/searchhead');


 ?>
	
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
	                    <a href="search.html">
	                        <i class="material-icons">search</i>
	                        <p>search</p>
	                    </a>
	                </li>
	                <li>
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
						<a class="navbar-brand" href="#">Search</a>
					</div>
				
				</div>
			</nav>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h3 class="title">Search</h3>
	                            </div>
	                            <div class="card-content">
	                                <form action="<?php echo $this->config->base_url(); ?>Search/Searchemail" method="post">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Sender mail Address</label>
													<input type="email" name="senderEmail" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">recipient mail Address</label>
													<input type="email" name="recepientEmail" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
										<div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Date from </label>
													<input type="text" name="dateFrom"class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Date To</label>
													<input type="text" name="dateTo"class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Subject</label>
													<input type="text" name="subject" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
										<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Body -Not Recommended-</label>
													<input type="text" name="body"class="form-control" >
												</div>
	                                        </div>
	                                    </div>
																				<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Target folder</label>
													<input type="text" name="Targetfolder"class="form-control" >
												</div>
	                                        </div>
	                                    </div>
										  
											    <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">certain User MailBox</label>
													<input type="text" name="usermailbox" class="form-control" >
												</div>
	                                        </div>
	                            			<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">GroupMember MailBox</label>
													<input type="text" name="Groupmailbox" class="form-control" >
												</div>
	                                        </div>

													<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">The Reason for Search</label>
													<textarea  name="reason" class="form-control" >The Reason for Search</textarea>
												</div>
	                                        </div>

	                                    </div>
        </div>			
	                                    <button type="submit" class="btn btn-primary pull-right" >Search</button>
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


</html>
