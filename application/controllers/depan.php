<?php
class Depan extends master_controller  {
	function __consruct(){
		parent::__construct();
	}
	
	
	function index(){
		$this->set_subtitle("DASHBOARD");
		$this->set_title("DASHBOARD");
		$this->set_content("WELCOME");
		$this->render();
	}



	function kirim(){
		$sender_email = "sman1.taliwang@gmail.com";
		$user_password = "Rahasia1q2w3e4r";
		$subject = "test email ";
		$message = "PEsan ini dan itu ";
		$config['protocol'] = 'smtp';
		// SMTP Server Address for Gmail.
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		// SMTP Port - the port that you is required
		$config['smtp_port'] = 465;
		// SMTP Username like. (abc@gmail.com)
		$config['smtp_user'] = $sender_email;
		// SMTP Password like (abc***##)
		$config['smtp_pass'] = $user_password;
		// Load email library and passing configured values to email library
		$this->load->library('email', $config);
		// Sender email address
		$this->email->from($sender_email, $sender_email);
		// Receiver email address.for single email
		//$this->email->to($receiver_email);
		//send multiple email
		$this->email->to('taujago@gmail.com');
		// Subject of email
		$this->email->subject($subject);
		// Message in email
		$this->email->message($message);
		// It returns boolean TRUE or FALSE based on success or failure
		$send = $this->email->send(); 
		echo $this->email->print_debugger();
	}
}
?>