<?php
class Activities_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	//Get Activities
	function getActivities(){		
		$this->db->order_by('id', 'ASC');		
		return  $this->db->get('activities')->result();
		
	}
}
?>