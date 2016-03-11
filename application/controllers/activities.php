<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function index()
	{
		// Cargar las actividades desde la BDD		
		$this->load->view('activities');
	}
}

/* End of file activities.php */
/* Location: ./application/controllers/activities.php */
