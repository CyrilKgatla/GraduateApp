<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class recruiter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('recruiter_model');
    }

    public function index() {
        $this->load->view('recruiter/index.php');
    }
}
