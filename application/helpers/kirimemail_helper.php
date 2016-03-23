<?php 



function kirimemail($tujuan,$subjek,$pesan){


		$CI->kirim =& get_instance();
     	

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
		$CI->kirim->load->library('email'); // load library 
		$CI->kirim->email->from($sender_email, $username);
		// Receiver email address.for single email
		//$CI->kirim->email->to($receiver_email);
		//send multiple email
		$CI->kirim->email->to($tujuan);
		// Subject of email
		$CI->kirim->email->subject($subject);
		// Message in email
		$CI->kirim->email->message($message);
		// It returns boolean TRUE or FALSE based on success or failure
		$send = $CI->kirim->email->send(); 
		echo  $CI->kirim->email->print_debugger();
		return $send;
}