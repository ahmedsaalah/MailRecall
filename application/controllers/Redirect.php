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
       				 $this->load->template('admin/add_user');
				}
			else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}

	}

	public function SearchPage()
    {
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==2 )
				{
       				 $this->load->template('user/search');
				}
			else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}
	}
    public function RequestPage()
    {
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1 )
				{
                    $this->load->template('admin/requests');

                }
                else if ($this->session->userdata("user_type")==2)
                {
                    $this->load->template('user/requests');

                }else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}

	}
    public function pending_requests()
    {
		  $this->load->library('session');
        	if($this->session->userdata("user_type")==1)
				{
					$data['requests']=$this->requests->getRequestsForAdmin();

        			$this->load->template('admin/pending_requests',$data);
				}
				else if($this->session->userdata("user_type")==2 )

				{
					$data['requests']=$this->requests->getRequestsForHr();

						$this->load->template('hr/pending_requests',$data);
				}
				else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}
	}
    public function logOut()
    {
        $this->Users_model->sign_out();
    }
}
