<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function index()
	{
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
