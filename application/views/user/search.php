<body>
	<div class="wrapper"> 
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
	                                <h3 class="title">Request</h3>
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
													<input type="date" name="dateFrom" class="datepicker">
													<!--<input type="text" name="dateFrom"class="form-control" >-->
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Date To</label>
													<input type="date" name="dateTo" class="datepicker">
													<!--<input type="text" name="dateTo"class="form-control" >-->
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


											
											<div class="col-sm-6">
		                    <div class="title">
		                        <h3>Request Type</h3>
		                    </div>

							<div class="radio" >
								<label>
									<input type="radio" name="requestType" value="search">
									Search
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="requestType" value="delete">
									Delete
								</label>
							</div>
			
		                
	                                        </div>
											

	                                    </div>
        </div>			
	                                    <button type="submit" class="btn btn-primary pull-right" >Submit</button>
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

