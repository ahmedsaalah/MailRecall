<?php

class Settings_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'setup';
        parent::__construct($this->table);
        
    }

  
             


    function Settings($array)
    {
        $this->db->empty_table($this->table);
    

        $this->db->insert($this->table, $array);
        
    }
   




}
