<?php

class TokoObat extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tokoobat');
        $this->load->helper('url', 'form');
        if ($this->session->userdata('akses') != 'admin') {
            redirect('');
        }
    }

    public function index(){
        $data['toko'] = $this->M_tokoobat->datatoko();
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Toko',$data);
        $this->load->view('Admin/templates/Footer');
    }

    public function hapus($id)
    {
        $where = [
            'id_toko' => $id
        ];
        $this->M_tokoobat->hapus_toko($where, 'tbl_toko');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data toko berhasil dihapus</div>');
        redirect('Admin/TokoObat');
    }

    public function tambahdata(){
        $this->load->view('Admin/templates/Header');
        $this->load->view('Admin/Tambahdatatoko');
        $this->load->view('Admin/templates/Footer');
    }

    public function insert()
    {
        $nama_toko = $this->input->post('nama_toko');
        $deskripsi = $this->input->post('deskripsi');
        $jenis     = $this->input->post('jenis');
        $rating    = $this->input->post('rating');
        $alamat    = $this->input->post('alamat');
        $lattitude = $this->input->post('lattitude');
        $longitude = $this->input->post('longitude');
        $no_telp   = $this->input->post('no_telp');
        $website   = $this->input->post('website');
        $jam_buka  = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Image Upload Failed!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_toko'     => $nama_toko,
            'deskripsi'     => $deskripsi,
            'jenis'         => $jenis,
            'rating'        => $rating,
            'alamat'        => $alamat,
            'lattitude'     => $lattitude,
            'longitude'     => $longitude,
            'no_telp'       => $no_telp,
            'website'       => $website,
            'jam_buka'      => $jam_buka,
            'jam_tutup'     => $jam_tutup,
            'gambar'        => $gambar,
        );
        $query = $this->M_tokoobat->input_toko('tbl_toko', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data toko berhasil ditambah</div>');
        redirect('Admin/TokoObat');
    }

    public function edittoko($id)
    {
        $data['dtoko'] = $this->M_tokoobat->detail_toko($id);
        $this->load->view('Admin/templates/Header',$data);
        $this->load->view('Admin/Editdatatoko');
        $this->load->view('Admin/templates/Footer');
    }

    public function update()
    {
        $id_toko   = $this->input->post('id_toko');
        $nama_toko = $this->input->post('nama_toko');
        $deskripsi = $this->input->post('deskripsi');
        $jenis     = $this->input->post('jenis');
        $rating    = $this->input->post('rating');
        $alamat    = $this->input->post('alamat');
        $lattitude = $this->input->post('lattitude');
        $longitude = $this->input->post('longitude');
        $no_telp   = $this->input->post('no_telp');
        $website   = $this->input->post('website');
        $jam_buka  = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $old_image = $this->input->post('old_image');

        //jika ada gambar
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/img/upload/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $old_image = $old_image;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/upload/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $where = array(
            'id_toko' => $id_toko,
        );

        $data = array(
            'nama_toko'     => $nama_toko,
            'deskripsi'     => $deskripsi,
            'jenis'         => $jenis,
            'rating'        => $rating,
            'alamat'        => $alamat,
            'lattitude'     => $lattitude,
            'longitude'     => $longitude,
            'no_telp'       => $no_telp,
            'website'       => $website,
            'jam_buka'      => $jam_buka,
            'jam_tutup'     => $jam_tutup,
        );
        $this->M_tokoobat->update_toko($where, $data, 'tbl_toko');
        $this->session->set_flashdata('message', '<div class="alert alert-success col-12 mb-2" role="alert">Data toko berhasil diubah</div>');
        redirect('Admin/TokoObat');
    }

    public function downloadCSV()
{
    $data['toko'] = $this->M_tokoobat->datatoko();

    // Nama file CSV yang akan diunduh
    $filename = 'data_toko_obat.csv';

    // Header untuk membuat browser mengenali file sebagai file CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Membuka output buffer untuk menulis ke file CSV
    $output = fopen('php://output', 'w');

    // Menuliskan header (nama kolom) ke dalam file CSV
    fputcsv($output, array('ID Toko', 'Nama Toko', 'Deskripsi', 'Jenis', 'Rating', 'Alamat', 'Lattitude', 'Longitude', 'No Telepon', 'Website', 'Jam Buka', 'Jam Tutup', 'Gambar'));

    // Menuliskan data toko ke dalam file CSV
    foreach ($data['toko'] as $toko) {
        fputcsv($output, (array)$toko);
    }

    // Menutup output buffer
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
    $pdf->SetTitle('Data Toko Obat');

    // Mengatur header dan footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Menambahkan halaman
    $pdf->AddPage();

    // Mengatur font
    $pdf->SetFont('helvetica', '', 12);

    // Mengambil data toko obat
    $data['toko'] = $this->M_tokoobat->datatoko();

    // Membuat tabel
    $table = '<table border="1" cellpadding="5">';
    $table .= '<tr>
        <th>ID Toko</th>
        <th>Nama Toko</th>
        <th>Deskripsi</th>
        <th>Jenis</th>
        <th>Rating</th>
        <th>Alamat</th>
        <th>Lattitude</th>
        <th>Longitude</th>
        <th>No Telepon</th>
        <th>Website</th>
        <th>Jam Buka</th>
        <th>Jam Tutup</th>
        <th>Gambar</th>
    </tr>';

    // Menulis data toko obat ke dalam tabel
    foreach ($data['toko'] as $toko) {
        $table .= '<tr>
            <td>' . $toko->id_toko . '</td>
            <td>' . $toko->nama_toko . '</td>
            <td>' . $toko->deskripsi . '</td>
            <td>' . $toko->jenis . '</td>
            <td>' . $toko->rating . '</td>
            <td>' . $toko->alamat . '</td>
            <td>' . $toko->lattitude . '</td>
            <td>' . $toko->longitude . '</td>
            <td>' . $toko->no_telp . '</td>
            <td>' . $toko->website . '</td>
            <td>' . $toko->jam_buka . '</td>
            <td>' . $toko->jam_tutup . '</td>
            <td>' . $toko->gambar . '</td>
        </tr>';
    }

    $table .= '</table>';

    // Menulis tabel ke PDF
    $pdf->writeHTML($table, true, false, false, false, '');

    // Menyimpan file PDF
    $pdf->Output('data_toko_obat.pdf', 'D');
}

}

