<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 font-primary">Data Pengguna</h1>
    <a href="<?= base_url('admin/pengguna/download-csv') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-arrow-down"></i> Unduh Data</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold font-primary">Data Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Profil</th>
                        <th>Nama Pengguna</th>
                        <th>Username</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $usr):?>
                    <tr>
                        <td><img src="<?= base_url('assets/image/').$usr->avatar?>" class="img-fluid" width="40" alt=""></td>
                        <td><?= $usr->nama ?></td>
                        <td><?= $usr->username ?></td>
                        <td><?= $usr->no_telepon ?></td>
                        <td><?= $usr->email ?></td>
                        <td><?= $usr->alamat ?></td>
                        <td><?php if($usr->status==1): ?>
                            Aktif
                            <?php else:?>
                                Tidak Aktif
                            <?php endif?>
                        </td>
                        <td>
                            <a href="<?= base_url('Admin/Pengguna/blokir/').$usr->id_user ?>" class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin blokir?')"><i class="fa-solid fa-xmark"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->