<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function index()
	{
		// Cargar el modelo
		$this->load->model('activities_model');
		$data['activities'] = $this->activities_model->getActivities();
		// Cargar las actividades desde la BDD		
		$this->load->view('activities', $data);
	}
}

/* End of file activities.php */
/* Location: ./application/controllers/activities.php */
