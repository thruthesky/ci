<?php
class Abc extends CI_Controller {
	public function def( $page = 'home' )
	{
		$this->load->view('abc/' . $page);
	}
}

