<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function index()
	{
		
		if(isset($_COOKIE['lang'])){ // Verificamos lengua en Sesion, lo cual quiere decir que el usuario escogio su lengua
			$this->lang->load('bellandia', $_COOKIE["lang"]);	
		}else{
		
			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			switch ($lang){
				case "fr":
					// Load language file FR
					$this->lang->load('bellandia', 'fr');
					break;
				case "es":
					// Load language file ES
					$this->lang->load('bellandia', 'es');
					break;
				case "en":
					// Load language file EN
					$this->lang->load('bellandia', 'en');
					break;        
				default:
					// Load language file EN - DEFAULT
					$this->lang->load('bellandia', 'en');
					break;
			}
		}
		
		// Cargar el modelo
		$this->load->model('activities_model');
		// Recuperar info desde la BDD
		$data['activities'] = $this->activities_model->getActivities();
		// Cargar la vista	
		$this->load->view('activities', $data);
	}
}

/* End of file activities.php */
/* Location: ./application/controllers/activities.php */
