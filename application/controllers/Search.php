<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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


	public function Searchemail(){



        $emailData =new EmailData();
				
			    $emailData->sender = $this->input->post("senderEmail");
				$emailData->recipient = $this->input->post("recepientEmail");
				$emailData->dateFrom = $this->input->post("dateFrom");
				$emailData->dateTo = $this->input->post("dateTo");
				$emailData->subject = $this->input->post("subject");
				$emailData->keyword = $this->input->post("body");
				$emailData->targetFolder = $this->input->post("Targetfolder");
				$reason= $this->input->post("reason");

				
					$this->load->library('session');
		
				$emailData->targetMailbox=$this->session->userdata('user_email');
				if ($this->input->post("usermailbox")!= null)
				{

					$emailData->searchedMailBox = $this->input->post("usermailbox");
					$emailData->groupOrUser=0;

				}
				else 
				{
					$emailData->searchedMailBox = $this->input->post("Groupmailbox");
					$emailData->groupOrUser=1;
				}
				
				
				$therequest=$this->RecallSystem->searchForEmail($emailData);
				
				
				$filename=$this->file->writeCmd($therequest);
				var_dump($this->session->userdata('user_id'));
				$theRequest = array(

			"user_id"=>$this->session->userdata('user_id'),
			"request" => $therequest,
			"reason"=>$reason,
			"filename" =>$filename
  
        );

var_dump($this->session->userdata('user_type'));
			
			  if ($this->session->userdata('user_type')=='1')
			  {
				   var_dump($theRequest);
				  $conc= array(
					  "adminAccept" =>"1"


				  );
				  $theRequest=$theRequest+$conc;
			  }
			 
       		  $this->requests->add_request($theRequest);
				
echo"===================================================================";
//echo $this->RecallSystem->searchForEmail($emailData);
				
	 }
}
