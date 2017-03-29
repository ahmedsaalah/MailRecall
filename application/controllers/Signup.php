<?php

class Signup extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('email');
    }

    function index() {
        //by default only client can signup directly
        //if client login/signup is disabled then show 404 page

    }




    function create_account() {


        $user_data = array(
            
            "email" => $this->input->post("email"),
            "type" => $this->input->post("section") ,
            "password" => md5($this->input->post("pw"))
        );



                //show error message if email already exists
                if ($this->Users_model->is_email_exists($user_data["email"])) {
                    $error= array("error" =>" Email already exist");
$user_data=$user_data+$error;

                    $this->load->view('admin/add_user',$user_data);
                
                }
                else 
                {
                    write_logs_helper("Make User". $user_data["email"] );
                   $id= $this->Users_model->add_user($user_data);
                    
                       
                     if($user_data["type"]==2)
                     {
                        
                          if ($this->input->post("delete")!=null)
                             {
                                 
                                 $delete=array(	"user_id"=>$id,
                                                 "permission_id"=>2);
                                $this->Users_model->add_permissions($delete);
                             }
                             else 
                             {
                                 $delete=array(	"user_id"=>$id,
                                                 "permission_id"=>0);
                                $this->Users_model->add_permissions($delete);


                             }
                        


                        
                     }
         
         
                   
                   

                
    }

                 
    }

}
