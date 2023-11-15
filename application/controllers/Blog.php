<?php

class Blog extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['blog'] = $this->M_blog->datablog();
        $this->load->view('templates/Header',$data);
        $this->load->view('Blog/Blog',$data);
        $this->load->view('templates/Footer');
    }
    public function detail($id){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['blog'] = $this->M_blog->detail_blog($id);
        $data['recentblog'] = $this->M_blog->recent_blog();
        $this->load->view('templates/Header',$data);
        $this->load->view('Blog/DetailBlog',$data);
        $this->load->view('templates/Footer');
    }
}

