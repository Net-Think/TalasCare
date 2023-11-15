<?php

class TalasInfo extends CI_Controller{
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
        $data['hama'] = $this->M_info->datahama();
        $data['penyakit'] = $this->M_info->datapenyakit();
        $this->load->view('templates/Header',$data);
        $this->load->view('TalasInfo/TalasInfo',$data);
        $this->load->view('templates/Footer');
    }
    public function detail($id){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['info'] = $this->M_info->detail_info($id);
        $this->load->view('templates/Header',$data);
        $this->load->view('TalasInfo/DetailInfo',$data);
        $this->load->view('templates/Footer');
    }
}

