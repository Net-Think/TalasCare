<?php

class TalasMaps extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tokoobat');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['toko'] = $this->M_tokoobat->datatoko();
        $this->load->view('templates/Header',$data);
        $this->load->view('TalasMaps',$data);
        $this->load->view('templates/Footer');
    }
    public function detailtoko($id){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['dtoko'] = $this->M_tokoobat->detail_toko($id);
        $this->load->view('templates/Header',$data);
        $this->load->view('detailtoko',$data);
        $this->load->view('templates/Footer');
    }
}

