<?php

class Users_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'users';
        parent::__construct($this->table);
        
    }

    function authenticate($email, $password) {

        $result = $this->db->get_where($this->table, array('email' => $email, 'password' => md5($password),'deleted'=>0));
        if ($result->num_rows() == 1) {
             $user_info = $result->row();
            $this->load->library('session');
             $this->session->set_userdata('user_id', $user_info->id);
             $this->session->set_userdata('user_email', $user_info->email);
           
             $this->session->set_userdata('user_type', $user_info->type);

             if ($user_info->type == 2)
             {
                 $this->db->select('permission_id');
                  $permissions  = $this->db->get_where("permissions", array('user_id' => $user_info->id))->result();
                  $this->session->set_userdata('permissions', $permissions);
                

             }
             
            return true;
        }
        else 
        {
              
              
            return false;
        }
    }

    function add_user($array)
    {
    

$this->db->insert($this->table, $array);
return $this->db->insert_id();
    }
        function add_permissions($array)
    {
    

$this->db->insert("permissions", $array);
    }
    

    function login_user_id() {
        $login_user_id = $this->session->user_id;
        return $login_user_id ? $login_user_id : false;
    }

    function sign_out() {
        $this->load->library('session');
        $this->session->sess_destroy();

        $this->load->helper('url');
        redirect( $this->config->base_url(), 'refresh');
        
    }


    function is_email_exists($email, $id = 0) {
        $result = $this->db->get_where($this->table,array("email" => $email, "deleted" => 0));
        if ($result->num_rows() && $result->row()->id != $id) {
            return $result->row();
        } else {
            return false;
        }
    }



}
