<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('M_user');
        $this->load->helper('url', 'form');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Admin/Dashboard');
        }
        $this->form_validation->set_rules('username', 'username', 'trim|required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('Admin/Auth/Login', $data);
        } else {
            //valid sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();
        if ($user) {
            //adduser
            if ($user) {
                if ($user['verified'] < 1) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda belum teraktivasi</div>');
                    redirect('Admin/Auth/Login');
                } elseif (password_verify($password, $user['password'])) {
                    $this->session->userdata('username', $user);
                    $data = [

                        'username' => $user['username'],
                        'id_admin' => $user['id_admin'],
                        'status' => 'login',
                        'akses' => 'admin'

                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/Dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!
            </div>');
                    redirect('Admin/Auth/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak aktif
            </div>');
                redirect('Admin/Auth/Login');
            }
        } else {
            //tidak ada user
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar
            </div>');
            redirect('Admin/Auth/Login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/Auth/Login');
    }
}
