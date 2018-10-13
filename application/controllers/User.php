<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');
    }

    /**
     * User Registration
     */
    public function registration()
    {
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', [
            'is_unique' => 'The %s already exists. Please use a different username',
        ]); // Unique Field

        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]', [
            'is_unique' => 'The %s already exists. Please use a different email',
        ]); // // Unique Field

        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]|max_length[10]|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $data['page_title'] = "User Registration";
            $this->load->view('_Layout/home/header.php', $data); // Header File
            $this->load->view("user/registration");
            $this->load->view('_Layout/home/footer.php'); // Footer File
        }
        else
        {   
            $insert_data = array(
                'fullname' => $this->input->post('full_name', TRUE),
                'username' => $this->input->post('username', TRUE),
                'email' => $this->input->post('email', TRUE),
                'mobile' => $this->input->post('mobile', TRUE),
                'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
                'is_active' => 1,
                'created_at' => time(),
                'update_at' => time(),
            );

            /**
             * Load User Model
             */
            $this->load->model('User_model', 'UserModel');
            $result = $this->UserModel->insert_user($insert_data);

            if ($result == TRUE) {

                $this->session->set_flashdata('success_flashData', 'You have registered successfully.');
                redirect('User/registration');

            } else {

                $this->session->set_flashdata('error_flashData', 'Invalid Registration.');
                redirect('User/registration');

            }
        }
    }

    /**
     * User Login
     */
	public function login()
	{
        $data['page_title'] = "User Login";
		$this->load->view('_Layout/home/header.php', $data); // Header File
        $this->load->view("user/login");
		$this->load->view('_Layout/home/footer.php'); // Footer File
	}
}