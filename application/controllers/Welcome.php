<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function landing()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('landing-pages');
	}

	
}
