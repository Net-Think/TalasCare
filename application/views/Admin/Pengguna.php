<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 font-primary">Data Pengguna</h1>
</div>
<a href="<?= base_url('admin/pengguna/download-csv') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"><i class="fa-solid fa-arrow-down"></i> Unduh Data (CSV)</a>
<a href="<?= base_url('admin/pengguna/downloadPDF') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"><i class="fa-solid fa-arrow-down"></i> Unduh Data (PDF)</a>
    <?= $this->session->flashdata('message') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold font-primary">Data Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="table table-bordered" style="width:100%">
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
                        <?php if($usr->status==1): ?>
                            <a href="<?= base_url('Admin/Pengguna/blokir/').$usr->id_user ?>" class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin menonaktifkan akun ini?')"><i class="fa-solid fa-xmark"></i></a>
                            <?php else:?>
                                <a href="<?= base_url('Admin/Pengguna/aktif/').$usr->id_user ?>" class="btn btn-success" onclick="return confirm('Yakin ingin mengaktifkan lagi akun ini?')"><i class="fa-solid fa-check"></i></a>
                            <?php endif?>
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