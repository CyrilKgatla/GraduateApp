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
            switch ($data['account']['account_type']) {
                case 'admin':
                    session_start();
                    $_SESSION['graduate_app_user'] = serialize($data['account']);
                    $data['IsSuccessful'] = TRUE;
                    $data['Nav'] = base_url('index.php/admin');
                    break;
                case 'graduate':
                    session_start();
                    $_SESSION['graduate_app_user'] = serialize($data['account']);
                    $data['IsSuccessful'] = TRUE;
                    $data['Nav'] = base_url('index.php/graduate');
                    break;
                case 'recruiter':
                    session_start();
                    $_SESSION['graduate_app_user'] = serialize($data['account']);
                    $data['IsSuccessful'] = TRUE;
                    $data['Nav'] = base_url('index.php/recruiter');
                    break;
                default :
                    return;
            }
        } else {
            $data['Message'] = 'Account not found';
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function logout() {
        unset($_SESSION['graduate_app_user']);
        $data['IsSuccessful'] = TRUE;
        $data['Nav'] = base_url('index.php');
        header('Content-Type: application/json');
        echo json_encode($data);
    }

}
