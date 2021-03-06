<!doctype html>
<html lang="en">

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
											<th>Reason</th>
											<th>Type </th>
	                                    	<th>HR approval</th>
	                                    	<th>Admin approval</th>
											<th></th>
	                                    </thead>
	                                    <tbody>
	                                       										<?php
																				   
										
										 if(!is_null($requests))
										{

										  	foreach($requests as $request )
                                    		{
if($request->SorD==0)
{
	$type="Search";
}
else 
{
	$type="Delete";
}

	                                      	echo"<tr>";
	                                        	echo"<td><a><p class='text-gray'>$request->request</p></a></td>";
												echo"<td><a><p class='text-gray'>$request->reason</p></a></td>";
				echo"<td><a><p class='text-gray'>$type</p></a></td>";
												if($request->hrAccept==0||$request->adminAccept==0)
												{
													if ($request->hrAccept==0)
													{
														echo "<td class='text-primary'> 
														<a href='#' class='btn btn-red btn-round' disabled>pending<div class='ripple-container'></div></a>
														</td>";
													}
													else 
													{
														echo "<td class='text-primary'> 
														<a href='#' class='btn btn-green btn-round' disabled>Approved<div class='ripple-container'></div></a>
														</td>";

													}
													if ($request->adminAccept==0)
													{
														echo "<td class='text-primary'> 
														<a href='#' class='btn btn-red btn-round' disabled>pending<div class='ripple-container'></div></a>
														</td>";
													}
													else 
													{
														echo "<td class='text-primary'> 
														<a href='#' class='btn btn-green btn-round' disabled>Approved<div class='ripple-container'></div></a>
														</td>";


													}


													echo "<td class='te3xt-primary'> 
													<a href='#' class='btn btn-round' disabled>submit<div class='ripple-container'></div></a>
												</td>";
												}
												else 
												{
														echo "<td class='text-primary'> 
													<a href='#' class='btn btn-green btn-round' disabled>Approved<div class='ripple-container'></div></a>
												</td>";

														echo "<td class='text-primary'> 
													<a href='#' class='btn btn-green btn-round' disabled>Approved<div class='ripple-container'></div></a>
												</td>";
												
													echo "<td class='te3xt-primary'> 
													<button class='btn btn-round' id='submitRequest' value='$request->filename' >submit<div class='ripple-container'></div></button>
												</td>";
												}
												
	
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
