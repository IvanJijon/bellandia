<?php
class Rooms_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	//Get Activities
	function getRooms(){		
		$this->db->order_by('id', 'ASC');		
		return  $this->db->get('rooms')->result();
		
	}
}
?>