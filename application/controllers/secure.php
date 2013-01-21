<?php

class Secure extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        if ($this->ion_auth->logged_in() === true) {
            $data['css'] = 'secure-home.css';
            $this->load->view('bootstrap/head.php', $data);
            $this->load->view('secure/home.php');
        } else {
            $data['css'] = 'landing.css';
            $this->load->view('bootstrap/head.php', $data);
            $this->load->view('landing/landing.php', $data);
        }
    }

    public function login() {
        $this->load->helper('url');
        if ($this->ion_auth->logged_in() === true) {
            $data['css'] = 'secure-home.css';
            $this->load->view('bootstrap/head.php', $data);
            $this->load->view('secure/home.php');
        } else {
            $data['css'] = 'login.css';
            $this->load->view('bootstrap/head.php', $data);
            $this->load->view('auth/login.php', $data);
        }
    }

}

