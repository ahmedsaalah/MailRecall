<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'application/controllers/Mail.php';
class Search extends Mail {

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
	public function fixDate($date)
	{
		//shahr youm sana 3/9/2017

		
		$pieces = explode(" ", $date);
		$pieces[1]=substr($pieces[1], 0, -1);

		if($pieces[1]=='January')
		{
			$newDate="01/";

		}
		else if($pieces[1]=='February')
		{
			$newDate="03/";
			

		}
		else if($pieces[1]=='March')
		{
			$newDate="03/";

		}

		else if($pieces[1]=='April')
		{
			$newDate="04/";

		}else if($pieces[1]=='May')
		{
			$newDate="05/";

		}
		else if($pieces[1]=='June')
		{
			$newDate="06/";

		}
		else if($pieces[1]=='July')
		{
			$newDate="07/";

		}
		else if($pieces[1]=='August')
		{
			$newDate="08/";

		}
		else if($pieces[1]=='September')
		{
			$newDate="09/";

		}
		else if($pieces[1]=='October')
		{
			$newDate="10/";

		}
		else if($pieces[1]=='November')
		{
			$newDate="11/";

		}
		else if($pieces[1]=='December')
		
		{
			$newDate="12/";

		}

	$newDate.=$pieces[0];
	$newDate.="/";
	$newDate.=$pieces[2];



		return $newDate;
	}

		public function sendEmail($user=0)
		{

			$query = $this->Users_model->getAdminsandHr();
			$subject = "There is Request Waiting for your respond ";

			foreach ($query as $row)
			{
					$userEmail= $row['email'];
					 if ($row['type'] ==1)
					 { if($user==1)
					 	{
							 continue;

						}
						 $message = "welcome Admin ,
						 Please visit the Application ASAP because there is request waiting your respond ";

					 }
					 else 
					 {
						  $message = "welcome HR ,
						 Please visit the Application ASAP because there is request waiting your respond ";


					 }
					 $this->send_email($userEmail,$subject,$message);
					
			}
			// $subject = "Your request processed Successfuly";
			// $message = "You can check your mail now ";
			// $theRequest=$this->requests->getRequestByFile($file);
			// $userid=$theRequest[0]['user_id'];
			// $userEmail=$this->Users_model->getUserEamilByUserID($userid)[0]['email'];

			// $this->send_email($userEmail,$subject,$message);
		
		
		}	

		

	public function Searchemail(){



        $emailData =new EmailData();
				$requestType=$this->input->post("requestType");
			    $emailData->sender = $this->input->post("senderEmail");
				$emailData->recipient = $this->input->post("recepientEmail");
				$emailData->dateFrom = $this->input->post("dateFrom");
				$emailData->dateTo = $this->input->post("dateTo");
				$emailData->subject = $this->input->post("subject");
				$emailData->keyword = $this->input->post("body");
				$emailData->targetFolder = $this->input->post("Targetfolder");
				$reason= $this->input->post("reason");

				
					$this->load->library('session');
				if (strlen($emailData->dateFrom)!=0)
				{
					$emailData->dateFrom=$this->fixDate($emailData->dateFrom);

				}
				if (strlen($emailData->dateTo)!=0)
				{
					$emailData->dateTo=$this->fixDate($emailData->dateTo);

				}

					
		
				$emailData->targetMailbox=$this->session->userdata('receiver');
				if (strlen($this->input->post("Groupmailbox"))!=0)
				{

					$emailData->searchedMailBox = $this->input->post("Groupmailbox");
					$emailData->groupOrUser=1;
					

				}
				else 
				{
					$emailData->searchedMailBox = $this->input->post("usermailbox");
					$emailData->groupOrUser=0;
				}
		

				$therequest2="";
				$filename2="";
				
				if($requestType=="search")
				{
					$therequest=$this->RecallSystem->searchForEmail($emailData);
				}
				else 
				{
					$therequest=$this->RecallSystem->deleteEmail($emailData);
					$therequest2=$this->RecallSystem->searchForEmail($emailData);
					$filename2=$this->file->writeCmd($therequest2);

				}
				
				$filename=$this->file->writeCmd($therequest);
		
		
				$theRequest = array(

			"user_id"=>$this->session->userdata('user_id'),
			"request" => $this->RecallSystem->makeRequest($emailData),

			"reason"=>$reason,
			"filename" =>$filename
  
        );
		$theRequest2 = "";
		if($requestType=="delete")
		{
								$theRequest2 = array(

			"user_id"=>$this->session->userdata('user_id'),
			"request" => $this->RecallSystem->makeRequest($emailData),

			"reason"=>$reason,
			"filename" =>$filename2
  
        );
		}
		//used if make delete to make search also 
		
				if($requestType=="delete")
				{
					
					 $conc= array(
					  "SorD" =>"1"


				  );
				  $theRequest=$theRequest+$conc;

				}


			  if ($this->session->userdata('user_type')=='1')
			  {
				   //var_dump($theRequest);
				  $conc= array(
					  "adminAccept" =>"1"


				  );
				  $theRequest=$theRequest+$conc;
				  if($requestType=="delete")
				  {		
					  $theRequest2=$theRequest2+$conc;

				  }
			  }
			//   if($this->session->userdata('user_type')=='1')
			//   {
			// 	  $this->sendEmail(1);

			//   }
			//   else 
			//   {
			// 	  $this->sendEmail();
			//   }
			  
       		  $this->requests->add_request($theRequest);
				 	  if($requestType=="delete")
				  {		
					$this->requests->add_request($theRequest2);

				  }
				

$this->SearchPage();
				
	 }
	public function SearchPage()
    {
		$data['active']='search';
        $this->load->library('session');
        	if($this->session->userdata("user_type")==1||$this->session->userdata("user_type")==2 )
				{
       				 $this->load->template('user/search',$data);
				}
			else
			{
				  redirect( $this->config->base_url(), 'refresh');
			}
	}


}
