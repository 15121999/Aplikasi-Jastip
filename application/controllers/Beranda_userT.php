<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_userT extends CI_Controller {

    public function __construct() {
        parent::__construct();
          check_not_login_user();
    }

    public function index() {
        $this->load->view('user/traveler/index_traveler');
    }

}