<?php

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
        $this->load->model('M_user');
        $this->load->model('M_forum');
        $this->load->model('M_info');
    }

    public function index(){
        $data['total'] = $this->M_user->total();
        $data['forum_counts'] = $this->M_forum->getForumCountByDate();
        $data['hama_counts'] = $this->M_info->getHamaCount();
        $this->load->view('Admin/templates/Header',$data);
        $this->load->view('Admin/Dashboard');
        $this->load->view('Admin/templates/Footer',$data);
    }
}

