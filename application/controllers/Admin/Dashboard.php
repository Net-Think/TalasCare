<?php

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
        $this->load->model('M_user');
    }

    public function index(){
        $data['total'] = $this->M_user->total();
        $this->load->view('Admin/templates/Header',$data);
        $this->load->view('Admin/Dashboard');
        $this->load->view('Admin/templates/Footer');
    }
}

