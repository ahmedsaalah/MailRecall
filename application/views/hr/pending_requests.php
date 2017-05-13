
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
												
														
									<?php	 if(!is_null($requests))
										{

										  	foreach($requests as $request )
                                    		{
												if($request->SorD==1)
												{continue;}
													echo "<tr>
														<td>
															<div class='checkbox'>
																<label>
																	<input type='checkbox' value='$request->id' name='checkboxAdminSearch' >
																</label>
															</div>
														</td>
														<td>$request->reason</td>
														<td>$request->request</td>
														<td class='td-actions text-right'>
															<button type='button' rel=
															'tooltip' title='view mail' data-toggle='modal' data-target=
														'#viewMail' class=
														'btn btn-simple btn-xs'>
																<i class='material-icons'>mail</i>
															</button>
														</td>
													</tr>";

                                        }    }
										   ?>

												</tbody>
											</table>
																			<div class="card-footer">
									 <button type="submit" id="DenySearch" class="btn btn-red pull-right">Deny</button>
									 <button type="submit" id="AppSearch" class="btn  btn-primary pull-right">Approve</button>
								</div>

										</div>
										<div class="tab-pane" id="delete">
											<table class="table">
												<tbody>
									<?php	 if(!is_null($requests))
										{

										  	foreach($requests as $request )
                                    		{
												if($request->SorD==0)
												{continue;}

													echo "<tr>
														<td>
															<div class='checkbox'>
																<label>
																	<input type='checkbox' value='$request->id' name='checkboxAdminDelete' >
																</label>
															</div>
														</td>
														<td>$request->reason</td>
														<td>$request->request</td>
														<td class='td-actions text-right'>
															<button type='button' rel=
															'tooltip' title='view mail' data-toggle='modal' data-target=
														'#viewMail' class=
														'btn btn-simple btn-xs'>
																<i class='material-icons'>mail</i>
															</button>
														</td>
													</tr>";

                                        }    }
										   ?>



												</tbody>
											</table>
																	<div class="card-footer">
									 <button type="submit" id="DenyDelete" class="btn btn-red pull-right">Deny</button>
									 <button type="submit" id="AppDelete" class="btn  btn-primary pull-right">Approve</button>
								</div>

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
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
	
<script>
   
        $("#DenyDelete").click(function(){
			
            
																	
            $.each($("input[name='checkboxAdminDelete']:checked"), function(){      

					$.ajax({
    url: "<?php echo $this->config->base_url(); ?>Request/AcceptorDenyRequest",
    type: 'POST',    
    dataType: 'json',
    data: { id: this.value , request:-1 ,user_type:3 },
    success: function (data) {
		
		alert("Operation Successfully Completed");
		window.location.href = window.location.href;
       
    }
});
                
            });
            
        });


        $("#AppDelete").click(function(){
			
            
            $.each($("input[name='checkboxAdminDelete']:checked"), function(){            
			$.ajax({
				url: "<?php echo $this->config->base_url(); ?>Request/AcceptorDenyRequest",
				type: 'POST',    
				dataType: 'json',
				data: { id: this.value , request:1 ,user_type:3 },
				success: function (data) {
					
					alert("Operation Successfully Completed");
					window.location.href = window.location.href;
				
				}
			});
         
        });
   });

        $("#AppSearch").click(function(){
			
          
            $.each($("input[name='checkboxAdminSearch']:checked"), function(){        

			$.ajax({
				url: "<?php echo $this->config->base_url(); ?>Request/AcceptorDenyRequest",
				type: 'POST',    
				dataType: 'json',
				data: { id: this.value , request:1 ,user_type:3 },
				success: function (data) {
					
					alert("Operation Successfully Completed");
					window.location.href = window.location.href;

				
				}

							
				});
            
        });
   

});
        $("#DenySearch").click(function(){
			
            
            $.each($("input[name='checkboxAdminSearch']:checked"), function(){            
			$.ajax({
					url: "<?php echo $this->config->base_url(); ?>Request/AcceptorDenyRequest",
					type: 'POST',    
					dataType: 'json',
					data: { id: this.value , request:-1 ,user_type:3 },
					success: function (data) {
						
						alert("Operation Successfully Completed");
						window.location.href = window.location.href;
						
					
					}
					});
            
        });
		});

</script>


