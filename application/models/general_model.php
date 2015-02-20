<?php

class General_model extends CI_Model {

	function __construct() {
            parent::__construct();
        }
	
	
	function get_local_time()
	{
		$hour_delay=$this->config->item('gm_hour');$minute_delay=$this->config->item('gm_minute');
		return date("F d, Y H:i:s",mktime (gmdate("H")+$hour_delay,gmdate("i")+$minute_delay,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
			
	}
        
        function get_design_tree($id=0) {
        $s = "SELECT * FROM design_menu  WHERE menuparentId = '" . $id . "' 
        ORDER BY menuorder, menuid ";
        $rid = $this->db->query($s)->result_array();
        $treeArray = array();

        foreach ($rid as $row) {

            $treeArray[$row['menuid']] = $row;
            if ($row['menuhasChild'] == 1) {
                $treeArray[$row['menuname']] = $this->get_design_tree($row['menuid']); //results in Fatal error: Maximum function nesting level of '100' reached, aborting!
           echo '<li>'.$treeArray[$row['menuname']].'</li>';
                }
        }
        return $treeArray;
    }
    
    function get_first_level(){
        $this->db->order_by('`order`');
        $this->db->where('parent_id','0');
       return  $this->db->get('tbl_design_menu')->result();
       
    }
    function get_second_level($id){
       
        $this->db->where('parent_id',$id);
       return  $this->db->get('tbl_design_menu')->result();
       
    }

}
?>