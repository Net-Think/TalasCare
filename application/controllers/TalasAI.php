<?php

class TalasAi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_info');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/Header',$data);
        $this->load->view('TalasAi');
        $this->load->view('templates/Footer');
    }
}

