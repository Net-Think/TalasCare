<?php

class Pengguna extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
        $this->load->helper('download');
    }

    public function index(){
        $data['user'] = $this->M_user->datauser();
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Pengguna',$data);
        $this->load->view('Admin/templates/Footer');
    }

    public function blokir($id){
        $where = array(
            'id_user' => $id
        );
        $data = array(
            'status'    => '0',
        );
        $this->M_user->update_status($where, $data, 'tbl_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Akun berhasil dinonaktifkan</div>');
        redirect('Admin/Pengguna');
    } 
    public function aktif($id){
        $where = array(
            'id_user' => $id
        );
        $data = array(
            'status'    => '1',
        );
        $this->M_user->update_status($where, $data, 'tbl_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Akun berhasil diaktifkan kembali</div>');
        redirect('Admin/Pengguna');
    } 

    public function downloadCSV()
    {
        $users = $this->M_user->datauser();

        // Nama file CSV
        $filename = 'data_pengguna.csv';

        // Atur header untuk file CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Buka file pointer
        $output = fopen('php://output', 'w');

        // Menulis header CSV
        fputcsv($output, array('ID User', 'Nama', 'Username', 'No Telepon', 'Email', 'Jenis Kelamin', 'Avatar', 'Alamat', 'Tanggal Lahir', 'Status', 'Code', 'Verified'));

        // Menulis data pengguna ke dalam file CSV
        foreach ($users as $user) {
            fputcsv($output, array($user->id_user, $user->nama, $user->username, $user->no_telepon, $user->email, $user->jenis_kelamin, $user->avatar, $user->alamat, $user->tanggal_lahir, $user->status, $user->code, $user->verified));
        }

        // Tutup file pointer
        fclose($output);
    }
}

