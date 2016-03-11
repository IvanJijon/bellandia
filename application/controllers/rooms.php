<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rooms extends CI_Controller {

	public function index()
	{
		// Cargar el modelo
		$this->load->model('rooms_model');
		// Recuperar info desde la BDD
		$data['rooms'] = $this->rooms_model->getRooms();
		$data['cRoom'] = ($this->uri->segment(3) != "") ? $this->uri->segment(3) : 1;
		// Cargar la vista
		$this->load->view('rooms', $data);
	}
}

/* End of file rooms.php */
/* Location: ./application/controllers/rooms.php */
