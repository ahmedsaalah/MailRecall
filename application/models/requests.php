<?php
class requests extends CI_Model
{



	function add_request($array)
    {
    

     $this->db->insert("requests", $array);
    }
    
    function getUserRequestById($ID)
    {
                   $requests  = $this->db->get_where("requests", array('user_id' => $ID ,'Done'  => 0))->result();

                   
                   return $requests;    

    }

    function getRequestById($ID)
    {
                   $requests  = $this->db->get_where("requests", array('id' => $ID ))->result_array();

                   
                   return $requests;    

    }
    function getRequestByFile($file)
    {
                   $requests  = $this->db->get_where("requests", array('filename' => $file ))->result_array();

                   
                   return $requests;    

    }
    

    function getPendingRequestsForAdmin()
    {


            $requests  = $this->db->get_where("requests", array('adminAccept' => 0 ,'hrAccept !=' => -1,'Done'  => 0))->result();
                   return $requests;    

    }
    function getPendingRequestsForHr()
    {
               $requests  = $this->db->get_where("requests", array('hrAccept' => 0 ,'adminAccept !=' => -1,'Done'  => 0))->result();
            return $requests;    

    }
    function respondToRequest($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('requests', $data);
    }
        function markRequest($file)
    {
        $data =array (

            "Done" => "1"
        );
        $this->db->where('filename', $file);
        $this->db->update('requests', $data);
    }
}

?>