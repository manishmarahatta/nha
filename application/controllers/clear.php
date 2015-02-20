<?php
class Clear extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    function index(){
        $query='select * from information_schema.tables where TABLE_SCHEMA= "nepalhyd_nha" order by TABLE_NAME';
        $result=$this->db->query($query)->result();
      
        unset($result['15']);
          foreach($result as $row){
              $table=$row->TABLE_NAME;
              $qry="truncate $table";
              $this->db->query($qry);
          }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
