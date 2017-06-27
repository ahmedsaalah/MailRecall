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
						<a class="navbar-brand" href="#">Logs</a>
						
					</div>
				</div>
			</nav>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                        	<div class="card-header" data-background-color="blue">
	                                <h4 class="title">Logs Table</h4>
	                                <p class="category">Here is where you can check your requests status</p>
	                        	</div>
	                            <div class="card-content table-responsive">
	                                <div class="row">
										<div class="col-md-12">
											<table class="table">
												<thead class="text-gray">
													<th>Email</th>
													<th>Description</th>
													<th>Type </th>
													<th>Time</th>
												</thead>
												<tbody>
													<?php
														if(!is_null($logs))
														{

															foreach($logs as $log )
															{
															echo"<tr>";
															echo"<td><a><p style='font-size: x-small;' class='text-gray'>$log->userEmail</p></a></td>";
															echo"<td><a><p style='font-size: x-small;'class='text-gray'>$log->desc</p></a></td>";
															echo"<td><a><p style='font-size: x-small;'class='text-gray'>$log->type</p></a></td>";
															echo"<td><a><p style='font-size: x-small;'class='text-gray'>$log->time</p></a></td>";
															echo "</tr>";
															}
													
														}
													?>
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
	    </div>
	</div>

</body>
