<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class graduate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('graduate_model');
    }

    public function index() {
        $this->load->view('graduate/index.php');
    }
}
