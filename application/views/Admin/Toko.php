<div class="container-fluid">
                    <div class="d-sm-flex justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Toko Obat</h1>
                        <a href="<?= base_url('Admin/TokoObat/tambahdata') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                        </a>
                    </div>
                    <a href="<?= base_url('admin/tokoobat/download-csv') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"><i class="fa-solid fa-arrow-down"></i> Unduh Data</a>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Toko Obat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Toko</th>
                                            <th>Deskripsi</th>
                                            <th>Rating</th>
                                            <th>Alamat</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($toko as $tk) :?>
                                        <tr>
                                            <td><?= $tk->nama_toko ?></td>
                                            <td><?= $tk->deskripsi ?></td>
                                            <td><?= $tk->rating ?></td>
                                            <td><?= $tk->alamat ?></td>
                                            <td><img class="img img-fluid" width="100" src="<?= base_url('assets/img/upload/').$tk->gambar ?>" alt="<?= $tk->gambar ?>"></td>
                                            <td>
                                                <a class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('Admin/TokoObat/hapus/').$tk->id_toko ?>"><i class="fas fa-trash fa-sm text-white"></i></a>
                                                <a class="btn btn-success-secondary" href="<?= base_url('Admin/TokoObat/edittoko/').$tk->id_toko ?>"><i class="fas fa-pen fa-sm text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>