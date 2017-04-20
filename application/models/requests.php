<?php
class requests extends CI_Model
{



	function add_request($array)
    {
    

     $this->db->insert("requests", $array);
    }
    


    function getRequestsForAdmin()
    {


            $requests  = $this->db->get_where("requests", array('adminAccept' => 0 ,'hrAccept !=' => -1))->result();
                   return $requests;    

    }
    function getRequestsForHr()
    {
               $requests  = $this->db->get_where("requests", array('hrAccept' => 0 ,'adminAccept !=' => -1))->result();
            return $requests;    

    }
}

?>