<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * User Registration
     */
    public function registration()
    {
        // Load View Page
        $this->load->view("user/registration");
    }

    /**
     * User Login
     */
	public function login()
	{
        $this->load->view("user/login");
	}
}