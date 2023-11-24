<?php

class Forum extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_forum');
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
    }

    public function index()
    {
        $data['forum'] = $this->M_forum->dataforum();
        $this->load->view('Admin/Forum',$data);
        
    }
    public function editForum($id)
    {
        $data['forum'] = $this->M_forum->detailforum($id);
        $this->load->view('Admin/EditForum',$data);
        
    }

    public function hapusForum($id)
    {
        $this->M_forum->hapusForum($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Forum berhasil dihapus</div>');
        redirect('Admin/Forum');
    }
    public function updateforum()
    {
        $id_forum      = $this->input->post('id_forum');        
        $isi      = $this->input->post('isi');        
        $old_image         = $this->input->post('old_image');

        //jika ada gambar
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/img/forum/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $old_image = $old_image;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/forum/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $where = array(
            'id_forum' => $id_forum
        );

        $data = array(
            'isi' => $isi
        );
        $this->M_forum->update($where, $data, 'tbl_forum');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Forum berhasil diubah</div>');
        redirect('Admin/Forum');
    }

}

