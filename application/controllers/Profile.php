<?php

class Profile extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('Profile/profile',$data);
    }

    public function notifikasi(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['notif'] = $this->M_user->datanotifikasi($this->session->userdata('id_user'));
        $this->load->view('Profile/notifikasi',$data);
    }

    public function editProfile(){
        $data['user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('Profile/edit_profile',$data);
    }

    public function update()
    {
        $nama      = $this->input->post('nama');
        $username            = $this->input->post('username');
        $no_telepon             = $this->input->post('no_telepon');
        $email        = $this->input->post('email');
        $tanggal_lahir        = $this->input->post('tanggal_lahir');
        $alamat        = $this->input->post('alamat');
        $old_image         = $this->input->post('old_image');

        //jika ada gambar
        $upload_image = $_FILES['avatar']['name'];

        if ($upload_image) {
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/image/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('avatar')) {

                $old_image = $old_image;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/image/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('avatar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $where = array(
            'id_user' => $this->session->userdata('id_user')
        );

        $data = array(
            'nama'          => $nama,
            'username'      => $username,
            'no_telepon'    => $no_telepon,
            'email'         => $email,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat'        => $alamat,
        );
        $this->M_user->update_profile($where, $data, 'tbl_user');
        $this->session->set_flashdata('message', '<small class="message-success alert" role="alert">Data pribadi berhasil diubah</small>');
        redirect('Profile');
    }
}

