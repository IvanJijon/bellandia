<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
		// Load view
		$this->load->view('home');
		
	}
	
	public function change_lang($data){
		
		// Recuperamos el tag de lengua : segmento 3 de la url		
		setcookie("lang", $this->uri->segment(3), time() + 60*60*24*30, '/');
		
		// Recargamos la pagina		
		redirect(base_url(),'location');
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
