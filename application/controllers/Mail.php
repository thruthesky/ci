<?php
class Mail extends CI_Controller {
	public function send( $page = 'home' )
	{
		date_default_timezone_set( 'Asia/Seoul' );
		
		$this->load->library('email');
		
		
		
		$config['protocol'] = 'sendmail';
		//$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		
		$config['smtp_host'] = 'mail.stlook.com';
		
		$this->email->initialize($config);
		
		$this->email->from('thruthesky@sonub.com', 'JaeHo Song');
		$this->email->to('jaehosong@gmx.com');
		
		$this->email->subject('Email Test From Window 8');
		$this->email->message('And this is the body.Testing the email class.');

		$re = $this->email->send();
		
		if ( ! $re ) {
			echo "<h1>Error sending email</h1>";
		}
		else {
			echo "<h1>Success sending email</h1>";
		}
		
		
		
		
		$this->email->print_debugger(array('headers'));
		
	}
}

