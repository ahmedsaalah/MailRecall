<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {

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
     

	
	}
	public function add_user()
	{

            $this->load->library('session');
        	if($this->session->userdata("user_type")==1 )
				{
       				 $this->load->view('admin/add_user');
				}

	}

	public function SearchPage()
    {
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==2 )
				{
       				 $this->load->view('user/search');
				}
	}
    public function RequestPage()
    {
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1 )
				{
                    $this->load->view('admin/requests');

                }
                else if ($this->session->userdata("user_type")==2)
                {
                    $this->load->view('user/requests');

                }

	}
    public function pending_requests()
    {
		  $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==3 )
				{

        			$this->load->view('admin/pending_requests');
				}
	}
    public function logOut()
    {
        $this->Users_model->sign_out();
    }
}
