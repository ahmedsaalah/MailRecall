<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		  parent::__construct();
     

		//$this->load->view('signin/signin_form');
		$this->load->library('session');
		  if($this->session->userdata('user_email'))
		{
		  		$data['active']='search';
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==2 )
				{
       				 $this->load->template('user/search',$data);
				}
				else if($this->session->userdata("user_type")==3 )

				{$data['active']='pending_requests';
						$data['requests']=$this->requests->getRequestsForHr();
						
						$this->load->template('hr/pending_requests',$data);
				}
				else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}


		}
		else 
		{
	    	$this->load->view('signin/signin_form');
		}
	}

	public function login(){


			

        $email= $this->input->post("user");
        $password = $this->input->post("pass");
		$this->load->library('session');
		//var_dump($this->session->userdata());
        if($this->Users_model->authenticate($email, $password)||$this->session->userdata('user_email'))
		{
		   		$data['active']='search';
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==2 )
				{
       				 $this->load->template('user/search',$data);
				}
				else if($this->session->userdata("user_type")==3 )

				{$data['active']='pending_requests';
						$data['requests']=$this->requests->getRequestsForHr();
						
						$this->load->template('hr/pending_requests',$data);
				}
				else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}
		}
		else 
		{
	    	$this->load->view('signin/signin_form');
		}
	 }
}
