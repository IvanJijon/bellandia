<?php
class Rooms_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	//Get Activities
	function getRooms(){
		
		$this->db->order_by('id', 'ASC');

		if(isset($_COOKIE['lang'])){ // Verificamos lengua en Sesion, lo cual quiere decir que el usuario escogio su lengua
			$this->db->where('lang', $_COOKIE['lang']); 				
			return  $this->db->get('rooms')->result();
		}else{
			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			$this->db->where('lang', $lang); 			
			return  $this->db->get('rooms')->result();			
		}
	}
}
?>