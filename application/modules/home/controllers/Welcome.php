<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion_auth_model');
    }

    public function index() {
        $this->template->load('template', 'welcome_message');
    }

    public function aman() {
        $this->ion_auth->is_sudah_login();
        $data['userid'] = $this->ion_auth->get_user_id();
        $data['user'] = $this->ion_auth_model->get_users_info($this->ion_auth->get_user_id());
        $this->template->load('template', 'beranda', $data);
    }

}
