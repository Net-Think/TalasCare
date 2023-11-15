<?php
class Register extends CI_Controller
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

        //generate simple random code
        $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($set), 0, 12);

        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[tbl_user.username]', [
            'required' => 'Username harus diisi!',
            'is_unique' => 'Username ini sudah digunakan!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'required' => 'Email harus diisi!',
            'is_unique' => 'Email sudah digunakan!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!',
            'required' => 'Password harus diisi!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
        'required' => 'Password harus diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('Auth/Register', $data);
        } else {
            $data = [
                'username' => $username = htmlspecialchars($this->input->post('username', true)),
                'email' => $email = htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'code' => $code,
                'verified' => false,
                'status' => false,
                'avatar' => 'default.png'
            ];
            $id = $this->M_user->insertid($data);
            //set up email
            $config = array(
                'protocol' => 'smtp',
                'smtp_host'    =>    'ssl://smtp.googlemail.com',
                'smtp_user'    =>    'talascare@gmail.com',
                'smtp_pass'    =>    'vjgpdjrvdxptoapf',
                'smtp_port'    =>    465,
                'mailtype'    =>    'html',
                'charset'    =>    'utf-8',
                'newline'    =>    "\r\n",
                'validation' => TRUE

            );
            $message =   
            "<!DOCTYPE html>
            <html>
            <head>
                <title>Kode Verifikasi - TalasCare</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #7d56ca;
                    }
            
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
            
                    h2 {
                        color: #7d56ca;
                    }
            
                    p {
                        margin: 10px 0;
                    }
            
                    h4 {
                        background-color: #7d56ca;
                        color: #ffffff;
                        padding: 10px;
                        border-radius: 5px;
                        text-align: center;
                    }
                    h4:hover {
                        background-color: #6B48B0;
                        color: #ffffff;
                        padding: 10px;
                        border-radius: 5px;
                        text-align: center;
                    }
            
                    a {
                        text-decoration: none;
                        color: #ffffff;
                    }
                </style>
            </head>
            <body>
                <div class=`container`>
                    <h2>Terima kasih telah mendaftar di TalasCare.</h2>
                    <p>Detail Akun Anda:</p>
                    <p>Username: ". $username ."</p>
                    <p>Email: " . $email . "</p>
                    <p>Silakan klik tautan di bawah ini untuk mengaktifkan akun Anda.</p>
                    <a style='color:#ffffff;' href='" . base_url() . "Auth/Login/Activate" . "/" . $id . "/" . $code . "'><h4>Aktifkan Akun Saya</h4></a>
                </div>
            </body>
            </html>";

            $this->load->library('email', $config);
            $this->email->initialize($config);
            $this->email->from($config['smtp_user']);
            $this->email->to($email);
            $this->email->subject('Signup Verification Email');
            $this->email->message($message);

            //sending email
            if ($this->email->send()) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kode Aktivasi telah dikirim ke email
            </div>');
            } else {
                $this->session->set_flashdata('message', $this->email->print_debugger());
            }
            redirect('Auth/Login');
        }
    }
}
