<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

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
	
		
	}
	 function send_email($receiver_email,$subject,$message)
    {
           	// Configure email library
			$sender_email = "mailrecallapp@gmail.com";
			$user_password = "ahmed2010";
			// $
			// $receiver_email = $this->session->userdata('user_email');
			
			$receiver_email = "a7mad.sala7@live.com";
			$username = "Mail Recall APP";

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = $sender_email;
			$config['smtp_pass'] = $user_password;

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address
			$this->email->to($receiver_email);
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($message);

			if($this->email->send())
			{
				echo "done";
			} 
			else {
				echo "Error";
			}
	

    }
	

}
