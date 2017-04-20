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
