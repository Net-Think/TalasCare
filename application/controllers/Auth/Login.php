<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('M_user');
        $this->load->helper('url', 'form');
        if ($this->session->userdata('akses')=="admin") {
            redirect('Admin/Dashboard');
        }
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('');
        }
        $this->form_validation->set_rules('username', 'username', 'trim|required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('Auth/Login', $data);
        } else {
            //valid sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
        if ($user) {
            //adduser
            if ($user) {
                if ($user['verified'] < 1) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda belum teraktivasi</div>');
                    redirect('Auth/Login');
                } elseif (password_verify($password, $user['password'])) {
                    $this->session->userdata('username', $user);
                    $data = [

                        'username' => $user['username'],
                        'id_user' => $user['id_user'],
                        'status' => 'login'

                    ];
                    $this->session->set_userdata($data);
                    redirect('');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!
            </div>');
                    redirect('Auth/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak aktif
            </div>');
                redirect('Auth/Login');
            }
        } else {
            //tidak ada user
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar
            </div>');
            redirect('Auth/Login');
        }
    }
    public function activate()
    {
        $id =  $this->uri->segment(4);
        $code = $this->uri->segment(5);

        //fetch user details
        $user = $this->M_user->getUser($id);

        //if code matches
        if ($user['code'] == $code) {
            //update user active status
            $data = [
                        'status' => true,
                        'verified' => true
            ];
            $query = $this->M_user->activate($data, $id);

            if ($query) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Aktivasi akun berhasil</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ada yang tidak beres saat mengaktifkan akun</div>');
            }
        } else {
            $this->session->set_flashdata('message', 'Tidak dapat mengaktivasi akun Anda. Kode tidak cocok');
        }

        redirect('Auth/Login');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
