<?php

class account_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function selectAccount($email, $password) {
        try {
            return $this->db->get_where('account', array('email' => $email, 'password' => $password))->row_array();
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
}
