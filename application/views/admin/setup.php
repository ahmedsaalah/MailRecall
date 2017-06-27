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
						<a class="navbar-brand" href="#">Settings</a>
					</div>
				
				</div>
			</nav>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h3 class="title">credentials</h3>
									<?php 
									if(isset($error))
									echo $error;
									?>
	                            </div>
	                            <div class="card-content">
	                                <form method="POST" id="idForm">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="email" name="username" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>
										<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">password</label>
													<input type="password" name="pw" id="pw1" class="form-control" required>
												</div>
	                                        </div>
										</div>						                          
	                                    <button type="submit" id="usercred" class="btn btn-primary pull-right" >Add credentials</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
									<div class="card-header" data-background-color="blue">
										<h3 class="title">Who receive the search</h3>
										<?php 
										if(isset($error))
										echo $error;
										?>
									</div>
									<div class="card-content">
										<form method="POST" id="idForm1">
											<div class="row" >
												<div class="col-md-12">
													<div class="form-group label-floating">
														<label class="control-label" id="pass2">The receiver </label>												
														<select  id="choiceSection" name="type" class="form-control">
															<option value="0">Shared Mailbox</option>
															<option value="1">logged in user</option>
														</select>
													</div>
												</div>
											</div>										
											<div class="row" id="permissionUser">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group label-floating">
															<label class="control-label">Email</label>
															<input type="email" name="email" class="form-control">
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
	</div>
</body>


		<!--   Core JS Files   -->
		<script>


					$(document).ready(function() { 
				  $('#permissionUser').show();

});



	$('#choiceSection').on('change', function() {
  if (this.value ==0)
  {
	 $('#permissionUser').show();

  } 
  else 
  {
	   $('#permissionUser').hide();
  }
})



	
		$("#idForm").submit(function(e) {

    var url = "<?php echo $this->config->base_url(); ?>Request/readCred"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#idForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
		var form = document.getElementById("idForm");
form.reset();
});



		$("#idForm1").submit(function(e) {

   var url = "<?php echo $this->config->base_url(); ?>Request/receivercred"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#idForm1").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.

	var form = document.getElementById("idForm1");
form.reset();
});




$("#pw1").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
})


</script>
