<?php

class TalasInfo extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_talasinfo');
        $this->load->helper('url', 'form');
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
    }

    public function index(){
        $data['talasinfo'] = $this->M_talasinfo->datainfo();
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/TalasInfo',$data);
        $this->load->view('Admin/templates/Footer');
    }

    public function hapus($id)
    {
        $where = [
            'id_hama' => $id
        ];
        $this->M_talasinfo->hapus_info($where, 'tbl_hama');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data berhasil dihapus</div>');
        redirect('Admin/TalasInfo');
    }

    public function tambahdata(){
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Tambahdatainfo');
        $this->load->view('Admin/templates/Footer');
    }

    public function insert()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $pencegahan    = $this->input->post('pencegahan');
        $pengobatan    = $this->input->post('pengobatan');
        $jenis     = $this->input->post('jenis');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Image Upload Failed!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'     => $nama,
            'deskripsi'     => $deskripsi,
            'pencegahan'    => $pencegahan,
            'pengobatan'    => $pengobatan,
            'gambar'        => $gambar,
            'jenis'         => $jenis,
        );
        $query = $this->M_talasinfo->input_info('tbl_hama', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data berhasil ditambah</div>');
        redirect('Admin/TalasInfo');
    }

    public function editinfo($id)
    {
        $data['dinfo'] = $this->M_talasinfo->detail_info($id);
        $this->load->view('Admin/templates/Header',$data);
        $this->load->view('Admin/Editdatainfo');
        $this->load->view('Admin/templates/Footer');
    }
    public function preview($id)
    {
        $data['dinfo'] = $this->M_talasinfo->detail_info($id);
        $this->load->view('Admin/previewtalas',$data);
    }

    public function update()
    {
        $id_hama   = $this->input->post('id_hama');
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
            'id_hama' => $id_hama,
        );

        $data = array(
            'nama'     => $nama,
            'deskripsi'     => $deskripsi,
            'pencegahan'    => $pencegahan,
            'pengobatan'    => $pengobatan,
            'jenis'         => $jenis
        );
        $this->M_talasinfo->update_info($where, $data, 'tbl_hama');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data berhasil diubah</div>');
        redirect('Admin/TalasInfo');
    }
}

