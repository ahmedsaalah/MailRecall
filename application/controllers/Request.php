<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include 'application/controllers/Mail.php';
class Request extends Mail {

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
	public function receivercred()
	{
		$arr=$this->input->post();
		
		 $this->Settings_model->Settings($arr);

	}
	public function readCred()
	{
		$username=$this->input->post("username");
		$pw=$this->input->post("pw");

		$current = " $" ."username = \"$username\"".PHP_EOL ." $".  "password = \"$pw\"";
		
		 $this->file->Cred($current);
		 
	}
	    public function markRequestAsDone($file)
		{
			$this->requests->markRequest($file);
			$this->sendEmail($file);



		}	

		public function sendEmail($file)
		{
			$subject = "Your request processed Successfuly";
			$message = "You can check your mail now ";
			$theRequest=$this->requests->getRequestByFile($file);
			$userid=$theRequest[0]['user_id'];
			$userEmail=$this->Users_model->getUserEamilByUserID($userid)[0]['email'];


			$this->send_email($userEmail,$subject,$message);
		
		
		}	

		




	    public function runPs()
        {
						
						$psScriptPath="_/cmds/";

						$file=$this->input->post("filename");
						
						$newFile= md5($file);
						$psScriptPath .= $newFile;
						$psScriptPath.=".PS1";
						$query=NULL;
						
                        $current = file_get_contents($psScriptPath, FILE_USE_INCLUDE_PATH);

                      //$current = $this->encryption->encrypt($current);
                     	$command=$this->encryption->decrypt($current);
	echo $command;
		//			$this->log_model->add_request($this->session->userdata('user_email'),$command,"Run" );
       		 


 $f='_/cmds/exec/'.$newFile .'.ps1';
//  echo $command;
//$command = mb_convert_encoding($command, 'ISO-8859-1');
 //echo $command;
                                // // Write the contents back to the file
					//$d=  iconv("UTF-8", "windows-1255", $command);
				$d = mb_convert_encoding($command, "Windows-1252");
                       file_put_contents($f,  $d);
					//$d=  iconv("UTF-8", "windows-1255", $command);
					//ASCII//TRANSLIT
					 
					   echo mb_detect_encoding($command);
					   echo mb_detect_encoding($d);
	    //   file_put_contents(
        //     $f,
        //     iconv( 'UTF-8','ISO-8859-7', file_get_contents($f))
        // );                 
//$config['charset'] = 'UTF-8';
						While(strlen($query)==0)
						{
							
					//	$query = exec("C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe -NoProfile -Noninteractive -command ls");
						$e='_/cmds/exec/run.ps1';
						$cmd=file_get_contents($e, FILE_USE_INCLUDE_PATH);
						echo "===================";
						//echo mb_detect_encoding($cmd);

						$query = shell_exec("powershell -command  $f ");
						echo $query;
						
						echo "==========================================";
						}
						//unlink($f);
						//$query = shell_exec("powershell -command $command ");
						echo $query;

						$output = array(
					
					"result" => "success"
				
					);
					//$this-> markRequestAsDone($file);
					$data = json_encode( $output);
			echo $data;
			
        }

		public function AcceptorDenyRequest()
		{	
					$id=$this->input->post("id");
					$request=$this->input->post("request");
					$userType=$this->input->post("user_type");
					
					$output = array(
					
					"id" => $id,
					"request" => $request,
					"userType" => $userType

				
					);
					$theRequest=$this->requests->getRequestById($id);
					if ($userType==1)
					{
						if($theRequest[0]['hrAccept']==1)
						{
							$data =array(
								"adminAccept"=>$request,
								"canMakeTheop"=>1

							);

						}
						else
						{
							$data =array(
								"adminAccept"=>$request

							);


						}
					

					}
					else if ($userType==3)
					{
					if($theRequest[0]['adminAccept']==1)
						{
							$data =array(
								"hrAccept"=>$request,
								"canMakeTheop"=>1

							);

						}
						else
					{
							$data =array(
								"hrAccept"=>$request

					);

					}
					}
					$this->requests->respondToRequest($id,$data);
					
					$data = json_encode( $output);
			echo $data;

		}
		
}
