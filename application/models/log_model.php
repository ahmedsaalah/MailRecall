<?php
class log_model extends CI_Model
{



	function add_request($useremail,$desc,$req)
    {
        
         $data =array (

                        "userEmail" =>$useremail,
                        "desc" => $desc,
                        "type" => $req

                       );
    

     $this->db->insert("log", $data);
    }
     function getlogs()
    {
//         $this->db->select('*');
//     $this->db->from('log');
    
//     $this->db->order_by('id', 'DESC');
//     $requests=$this->db->get();
// var_dump ($requests);

                //   $requests  = $this->db->get("log")->order_by('id', 'DESC')->result();

                //    $this->db->order_by("id", "DESC");

                $query = $this->db->query('SELECT * FROM log ORDER BY `id` desc')->result();


                   return  $query;    

    }
   
}

?>