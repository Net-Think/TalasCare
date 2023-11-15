<?php

class Blog extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
        $this->load->helper('url', 'form');
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
    }

    public function index(){
        $data['blog'] = $this->M_blog->datablog();
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Blog',$data);
        $this->load->view('Admin/templates/Footer');
    }

    public function hapus($id)
    {
        $where = [
            'id_blog' => $id
        ];
        $this->M_blog->hapus_blog($where, 'tbl_blog');
        redirect('Admin/Blog');
    }

    public function tambahdata(){
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Tambahdatablog');
        $this->load->view('Admin/templates/Footer');
    }

    public function insert()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img/blog/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Image Upload Failed!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul'     => $judul,
            'id_admin'     => 1,
            'isi'     => $isi,
            'gambar'        => $gambar
        );
        $query = $this->M_blog->input_blog('tbl_blog', $data);
        redirect('Admin/Blog');
    }

    public function editblog($id)
    {
        $data['dblog'] = $this->M_blog->detailblog($id);
        $this->load->view('Admin/templates/Header',$data);
        $this->load->view('Admin/Editdatablog');
        $this->load->view('Admin/templates/Footer');
    }
    public function previewblog($id)
    {
        $data['dblog'] = $this->M_blog->detail_blog($id);
        $data['recentblog'] = $this->M_blog->recent_blog();
        $this->load->view('Admin/previewblog',$data);
    }

    public function update()
    {
        $id_blog   = $this->input->post('id_blog');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $pencegahan    = $this->input->post('pencegahan');
        $pengobatan    = $this->input->post('pengobatan');
        $jenis     = $this->input->post('jenis');
        $old_image = $this->input->post('old_image');

        //jika ada gambar
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $old_image = $old_image;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . './assets/images/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $where = array(
            'id_blog' => $id_blog,
        );

        $data = array(
            'nama'     => $nama,
            'deskripsi'     => $deskripsi,
            'pencegahan'    => $pencegahan,
            'pengobatan'    => $pengobatan,
            'jenis'         => $jenis
        );
        $this->M_blog->update_blog($where, $data, 'tbl_blog');
        redirect('Admin/Blog');
    }
}

