<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transfer extends CI_Controller {

    public function __construct() {
        parent::__construct();
          check_not_login_user();
    }

    public function index() {
        $this->load->view('user/customer/transfer');
    }

}