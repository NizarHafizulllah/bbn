<?php 



function kirimemail($tujuan,$subjek,$pesan){
		$username = "taujago@gmail.com";
		$sender_email = "taujago@zahiraccounting.com";
		$user_password = "T0z4QX015EII5ARyOIDkyQ";
		$subject = $subjek;
		$message = $pesan;
		$config['protocol'] = 'smtp';
		// SMTP Server Address for Gmail.
		$config['smtp_host'] = 'smtp.mandrillapp.com';
		// SMTP Port - the port that you is required
		$config['smtp_port'] = "587";
		// SMTP Username like. (abc@gmail.com)
		$config['smtp_user'] = $username;
		// SMTP Password like (abc***##)
		$config['smtp_pass'] = $user_password;
		$config['mailtype'] = 'html';
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";




		// Load email library and passing configured values to email library
		
		// Sender email address
		$this->email->from($sender_email, $username);
		// Receiver email address.for single email
		//$this->email->to($receiver_email);
		//send multiple email
		$this->email->to($tujuan);
		// Subject of email
		$this->email->subject($subject);
		// Message in email
		$this->email->message($message);
		// It returns boolean TRUE or FALSE based on success or failure
		$send = $this->email->send(); 
		return $send;
}