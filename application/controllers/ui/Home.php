<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function index() {
        $this->load->view('ui/ui_view');
    }
    
    public function insert_music() {
        $this->load->view('ui/insert_music');
    }
}