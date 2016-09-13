<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('account_model');
    }

    public function index() {
        $this->load->view('home');
    }

    public function login() {
        $request = json_decode(file_get_contents('php://input'), TRUE);

        $email = $request['email'];
        $password = $request['password'];

        $data['account'] = $this->account_model->selectAccount($email, $password);

        if ($data['account'] != NULL) {
            $data['IsSuccessful'] = TRUE;
            $data['Nav'] = base_url('index.php/admin');
        }else
        {
            $data['Message'] = 'Account not found';
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }

}
