<div class="container-fluid">
                    <div class="d-sm-flex justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Blog</h1>
                        <a href="<?= base_url('Admin/Blog/tambahdata') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Blog</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul Blog</th>
                                            <th>Isi</th>
                                            <th>Date/Time</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($blog as $blg) :?>
                                        <tr>
                                            <td><?= $blg->judul ?></td>
                                            <td style="max-width:300px;" class="text-truncate"><?= $blg->isi ?></td>
                                            <td><?= $blg->tanggal ?></td>
                                            <td><img class="img img-fluid" width="100" src="<?= base_url('assets/img/blog/'.$blg->gambar)?>" alt="<?= $blg->gambar ?>"></td>
                                            <td>
                                                <a class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('Admin/Blog/hapus/').$blg->id_blog ?>"><i class="fas fa-trash fa-sm text-white"></i></a>
                                                <a class="btn btn-success-secondary" href="<?= base_url('Admin/Blog/editblog/').$blg->id_blog ?>"><i class="fas fa-pen fa-sm text-white"></i></a>
                                                <a class="btn btn-warning" href="<?= base_url('Admin/Blog/previewblog/').$blg->id_blog ?>"><i class="fas fa-eye fa-sm text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>