<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Job_model');
        $this->load->database(); 
        $this->load->helper(['url', 'form']); 
        $this->load->library(['session', 'form_validation', 'upload']);
    }

    public function index() {
        $this->load->view('dashboard');
    }

    /** Job Functions **/
    public function insert_job() {
        $this->load->view('insert_job');
    }

    public function process_insert_job() {
        $this->form_validation->set_rules('job_title', 'Job Title', 'required');
        $this->form_validation->set_rules('job_description', 'Job Description', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_job');
        } else {
            $data = [
                'job_title' => $this->input->post('job_title'),
                'job_description' => $this->input->post('job_description'),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->Job_model->insert_job($data);
            $this->session->set_flashdata('success', 'Job added successfully!');
            redirect('dashboard');
        }
    }
}