<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$this->load->view('contact');
	}
	
	function Send_Mail() {

		// Check for validation
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('message', 'Mensaje', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('contact');
		} else {

			// Storing submitted values
			$username = $this->input->post('name');
			$sender_email = $this->input->post('user_email');
			$message = $this->input->post('message');

			// The mail sending protocol.
			$config['protocol'] = 'smtp';
			// SMTP Server Address for Gmail.
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			// SMTP Port - the port that you is required
			$config['smtp_port'] = 465;
			// SMTP Username like. (abc@gmail.com)
			$config['smtp_user'] = 'bellandialodge@gmail.com';
			// SMTP Password like (abc***##)
			$config['smtp_pass'] = 'elvirilin1';

			// Load email library and passing configured values to email library
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address
			$this->email->to('azorey@gmail.com, castro.alfredo00@gmail.com, ivanjijontesting@gmail.com');
			// Subject of email
			$this->email->subject('Test Contato Bellandia');
			// Message in email
			$this->email->message($message);

			if ($this->email->send()) {
				$data['message_display'] = 'Gracias, nos pondremos en contacto en breves instantes.';
			} else {
				$data['message_display'] = '<p class="error_msg">Invalid Gmail Account or Password !</p>';
				echo $this->email->print_debugger();
			}
			$this->load->view('contact_success', $data);
		}
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */
