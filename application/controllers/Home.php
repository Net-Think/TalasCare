<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
        $this->load->model('M_tokoobat');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['faq'] = $this->M_home->datafaq();
        $data['tokomap'] = $this->M_tokoobat->datatokomap();
        $data['total'] = $this->M_tokoobat->total();
        $this->load->view('templates/Header',$data);
        $this->load->view('Home',$data);
        $this->load->view('templates/Footer');
    }
}

