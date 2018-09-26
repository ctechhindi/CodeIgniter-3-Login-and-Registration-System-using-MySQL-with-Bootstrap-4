<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Home Page";
		$this->load->view('_Layout/home/header.php', $data); // Header File
		$this->load->view('welcome_message'); // Main File (Body)
		$this->load->view('_Layout/home/footer.php'); // Footer File
	}
}
