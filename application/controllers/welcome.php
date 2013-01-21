<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('landing/index');
    }
    public function install() {
        $this->load->view('landing/install');
    }
    public function contact() {
        $this->load->view('landing/contact');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */