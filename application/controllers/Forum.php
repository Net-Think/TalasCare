<?php

class Forum extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_forum');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index()
    {
        $data['forum'] = $this->M_forum->dataforum();
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('Forum/forum', $data);
    }

    public function insertforum(){
        $isi = $this->input->post('isi');
        $id_user = $this->input->post('id_user');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img/forum/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Image Upload Failed!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_user'       => $id_user,
            'isi'          => $isi,
            'image'       => $gambar
        );
        $query = $this->M_forum->input('tbl_forum', $data);
        redirect('Forum');
    }
    public function insertkomentar(){
        $isi = $this->input->post('isi');
        $id_user = $this->input->post('id_user');
        $id_user_penerima = $this->input->post('id_user_forum');
        $id_forum = $this->input->post('id_forum');

        $data = array(
            'id_user'      => $id_user,
            'isi'          => $isi,
            'id_forum'     => $id_forum
        );

        $datanotif = array(
            'id_user_pengirim' => $id_user,
            'id_user_penerima' => $id_user_penerima,
            'id_forum'         => $id_forum,
            'pesan'            => $isi,
            'type'             => "komentar"
        );
        if($id_user!=$id_user_penerima){
            $query = $this->M_forum->input('tbl_notifikasi', $datanotif);
        }
        $query = $this->M_forum->input('tbl_komentar', $data);
        redirect('Forum');
    }
    public function insertbalasan(){
        $isi = $this->input->post('isi');
        $id_user = $this->input->post('id_user');
        $id_komentar = $this->input->post('id_komentar');
        $id_user_penerima = $this->input->post('id_user_penerima');

        $data = array(
            'id_user'      => $id_user,
            'isi'          => $isi,
            'id_komentar'     => $id_komentar
        );

        $datanotif = array(
            'id_user_pengirim' => $id_user,
            'id_user_penerima' => $id_user_penerima,
            'id_komentar'      => $id_komentar,
            'pesan'            => $isi,
            'type'             => "balasan"
        );
        if($id_user!=$id_user_penerima){
            $query = $this->M_forum->input('tbl_notifikasi', $datanotif);
        }
        $query = $this->M_forum->input('tbl_balasan', $data);
        redirect('Forum');
    }
    public function likeForum() {
        $forumId = $this->input->post('forum_id');
        $userId = $this->session->userdata('id_user');
    
        $response = $this->M_forum->likeForum($forumId, $userId);
    
        echo json_encode($response);
    }
    public function hapusForum($id)
    {
        $this->M_forum->hapusForum($id);
        redirect('Forum');
    }

}

