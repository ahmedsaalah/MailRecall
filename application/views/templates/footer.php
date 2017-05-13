	<!--   Core JS Files   -->
	<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>_/js/material.min.js" type="text/javascript"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrapweb.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap-dialog.min.js" type="text/javascript"></script>


	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo $this->config->base_url(); ?>_/js/material-dashboard.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>_/js/materialize.min.js"></script>
	
<script>
function myFunction() {
     
     var file = document.getElementById('submitRequest').value;
alert(file);
	$.ajax({
    url: "<?php echo $this->config->base_url(); ?>Request/runPs",
    type: 'POST',    
    dataType: 'json',
    data: { filename: file },
    success: function (data) {
		
        alert("The ouput has been sent successfully");
    },
      error: function(jqXHR, textStatus, errorThrown){
          alert(errorThrown);
      }         
      });

}

$("#submitRequest").click(function(){
    alert(this.value);

	$.ajax({
    url: "<?php echo $this->config->base_url(); ?>Request/runPs",
    type: 'POST',    
    dataType: 'json',
    data: { filename: this.value },
    success: function (data) {
		
        alert("The ouput has been sent successfully");
    },
      error: function(jqXHR, textStatus, errorThrown){
          alert(errorThrown);
      }         
      });
});


  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });



</script>

</html>
