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
				<?php	
				
				if ($this->session->userdata("user_type"==1)||($this->session->userdata("user_type")==2&&($this->session->userdata("permissions")[0]->permission_id== '1')))
				{ 
				
				
				?>
	                <li >
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/SearchPage">
	                        <i class="material-icons">search</i>
	                        <p>search</p>
	                    </a>
	                </li>
				<?php }

				if($this->session->userdata("user_type")==1 ||$this->session->userdata("user_type")==2)
				{ ?>

	                <li>
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/RequestPage">
	                        <i class="material-icons">content_paste</i>
	                        <p>Requests</p>
	                    </a>
	                </li>
				<?php }
				if($this->session->userdata("user_type")==1 )
				{ ?>


				    <li class="active">
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/add_user">
	                        <i class="material-icons">add_circle</i>
	                        <p>add User</p>
	                    </a>
	                </li>
				<?php }
				if($this->session->userdata("user_type")==1 ||$this->session->userdata("user_type")==3)
				{ ?>
                    <li>
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/pending_requests">
	                        <i class="material-icons">content_paste</i>
	                        <p>pending requests</p>
	                    </a>
	                </li>
				<?php } ?>
					<li class="active-pro">
	                    <a href="<?php echo $this->config->base_url(); ?>Redirect/logOut">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log out</p>
	                    </a>
	                </li>
					<!--<li class="active-pro">
	                    <a href="../../index.html">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>Log out</p>
	                    </a>
	                </li>-->

	            </ul>
                
	    	</div>
	    </div>