<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->template->load('template/login', 'pages/login');
    }

    public function auth()
    {
        if ($this->form_validation->run('login') == FALSE) {
            return $this->index();
        } else {
            redirect('/');
            
        }
    }
}
