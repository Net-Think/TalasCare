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
    fputcsv($output, array('ID User', 'Nama', 'Username', 'No Telepon', 'Email', 'Jenis Kelamin', 'Avatar', 'Alamat', 'Tanggal Lahir', 'Status', 'Verified'));

    // Menulis data pengguna ke dalam file CSV
    foreach ($users as $user) {
        // Ganti nilai berdasarkan kondisi
        $status = ($user->status == 1) ? 'Aktif' : 'Non-Aktif';
        $verified = ($user->verified == 1) ? 'Terverifikasi' : 'Belum Terverifikasi';

        fputcsv($output, array(
            $user->id_user, 
            $user->nama, 
            $user->username, 
            $user->no_telepon, 
            $user->email, 
            $user->jenis_kelamin, 
            $user->avatar, 
            $user->alamat, 
            $user->tanggal_lahir, 
            $status,  // Menggunakan nilai yang telah diganti
            $verified  // Menggunakan nilai yang telah diganti
        ));
    }

    // Tutup file pointer
    fclose($output);
}

public function downloadPDF()
{
    // Memuat library TCPDF
    $this->load->library('mytcpdf');

    // Membuat objek TCPDF
    $pdf = new Tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Mengatur informasi dokumen
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Data Pengguna');

    // Mengatur header dan footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Menambahkan halaman
    $pdf->AddPage();

    // Mengatur font
    $pdf->SetFont('helvetica', '', 12);

    // Mengambil data pengguna
    $users = $this->M_user->datauser();

    // Membuat tabel
    $table = '<table border="1" cellpadding="5">';
    $table .= '<tr>
        <th>ID User</th>
        <th>Nama</th>
        <th>Username</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Avatar</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Status</th>
        <th>Verified</th>
    </tr>';

    // Menulis data pengguna ke dalam tabel
    foreach ($users as $user) {
        // Ganti nilai berdasarkan kondisi
        $status = ($user->status == 1) ? 'Aktif' : 'Non-Aktif';
        $verified = ($user->verified == 1) ? 'Terverifikasi' : 'Belum Terverifikasi';

        $table .= '<tr>
            <td>' . $user->id_user . '</td>
            <td>' . $user->nama . '</td>
            <td>' . $user->username . '</td>
            <td>' . $user->no_telepon . '</td>
            <td>' . $user->email . '</td>
            <td>' . $user->jenis_kelamin . '</td>
            <td>' . $user->avatar . '</td>
            <td>' . $user->alamat . '</td>
            <td>' . $user->tanggal_lahir . '</td>
            <td>' . $status . '</td>
            <td>' . $verified . '</td>
        </tr>';
    }

    $table .= '</table>';

    // Menulis tabel ke PDF
    $pdf->writeHTML($table, true, false, false, false, '');

    // Menyimpan file PDF
    $pdf->Output('data_pengguna.pdf', 'D');
}
}

