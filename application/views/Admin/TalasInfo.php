<div class="container-fluid">
                    <div class="d-sm-flex justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Hama dan Penyakit</h1>
                        <a href="<?= base_url('Admin/TalasInfo/tambahdata') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                        </a>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Hama dan Penyakit</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Deskripsi</th>
                                            <th>Pencegahan</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($talasinfo as $tlsinfo) :?>
                                        <tr>
                                            <td><?= $tlsinfo->nama ?></td>
                                            <td><?= $tlsinfo->jenis ?></td>
                                            <td><?= $tlsinfo->deskripsi ?></td>
                                            <td><?= $tlsinfo->pencegahan ?></td>
                                            <td><img class="img img-fluid" width="100" src="<?= base_url('assets/images/').$tlsinfo->gambar ?>" alt="<?= $tlsinfo->gambar ?>"></td>
                                            <td>
                                                <a class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('Admin/TalasInfo/hapus/').$tlsinfo->id_hama ?>"><i class="fas fa-trash fa-sm text-white"></i></a>
                                                <a class="btn btn-success-secondary" href="<?= base_url('Admin/TalasInfo/editinfo/').$tlsinfo->id_hama ?>"><i class="fas fa-pen fa-sm text-white"></i></a>
                                                <a class="btn btn-warning" href="<?= base_url('Admin/TalasInfo/preview/').$tlsinfo->id_hama ?>"><i class="fas fa-eye fa-sm text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>