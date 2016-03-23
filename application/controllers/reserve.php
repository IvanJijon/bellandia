<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reserve extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
	}

	public function index()
	{
		// Cargar la vista	
		$this->load->view('reserve');
	}
	
	function make_reserve() {
		
		// Verificar disponibilidades
		
		// Si disponible
		send_mail_reserve();
		
		// Si no disponible
	
	}
		
		
	function send_mail_reserve() {

		// Check for validation
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('message', 'Mensaje', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('contact');
		} else {

			// Storing submitted values
			$date_arrival = $this->input->post('datepicker-arrival');
			$date_departure = $this->input->post('datepicker-departure');
			$username = $this->input->post('name');
			$usersurname = $this->input->post('surname');
			$sender_email = $this->input->post('user_email');
			$adults = $this->input->post('adults');
			$kids = $this->input->post('kids');
			$message = "
			<p><b>Fecha de entrada : </b>
			".$date_arrival."
			</p>
			<p><b>Fecha de salida : </b>
			".$date_departure."
			</p>			
			<p><b>Nombre: </b>
			".$username."
			</p>
			<p><b>Apellido : </b>
			".$usersurname."
			</p>
			<p><b>Correo : </b>
			".$sender_email."
			</p>
			<p><b>Cantidad de adultos : </b>
			".$adults."
			</p>
			<p><b>Cantidad de niños : </b>
			".$kids."
			</p>
			<p><b>Mensaje : </b></p>
			<p>".$this->input->post('message')."</p>" ;

			// The mail sending protocol.
			$config['protocol'] = 'smtp';
			// SMTP Server Address for Gmail.
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			// SMTP Port - the port that you is required
			$config['smtp_port'] = 465;
			// SMTP Username like. (abc@gmail.com)
			$config['smtp_user'] = 'ivanjijontesting@gmail.com';
			// SMTP Password like (abc***##)
			$config['smtp_pass'] = 'polytechparis';
			// Mail Type
			$config['mailtype'] = 'html';

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address
			$this->email->to('castro.alfredo00@gmail.com, ivanjijontesting@gmail.com');
			// Subject of email
			$this->email->subject('Test RESERVA Bellandia');
			// Message in email
			$this->email->message($message);
			

			if ($this->email->send()) {
				$data['message_display'] = 'Gracias, su solicitud ha sido correctamente enviada. Confirmaremos su reserva en breve plazo.';
			} else {
				$data['message_display'] = '<p class="error_msg">Hubo un problema con su reserva.</p>';
				echo $this->email->print_debugger();
			}
			$this->load->view('reserve_success', $data);
		}
	}	
}

/* End of file reserve.php */
/* Location: ./application/controllers/reserve.php */
