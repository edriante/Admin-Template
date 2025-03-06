<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function login() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('register');
    }

    public function process_register() {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required', ['required' => 'The %s field is required.']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
            'required' => 'The %s field is required.',
            'valid_email' => 'Please enter a valid %s.',
            'is_unique' => 'This %s is already registered.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'The %s field is required.',
            'min_length' => 'The %s must be at least 6 characters long.'
        ]);
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]', [
            'required' => 'The %s field is required.',
            'matches' => 'The %s does not match the Password.'
        ]);
    
        // Check if validation passed
        if ($this->form_validation->run() == FALSE) {
            // Load the register view with error messages
            $this->load->view('register');
        } else {
            // Collect and hash the user data
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            // Save user to database
            $this->User_model->insert_user($data);
            // Success message
            $this->session->set_flashdata('success', 'Account created successfully! Please log in.');
            redirect('login');
        }
    }
    

    public function process_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user_by_email($email);

        if ($user && password_verify($password, $user['password'])) {
            $this->session->set_userdata([
                'user_id' => $user['id'],
                'name' => $user['name'],
                'logged_in' => TRUE
            ]);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
