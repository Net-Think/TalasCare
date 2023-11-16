<!-- Begin Page Content -->
<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Form Insert Data Blog</h1>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Blog</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                <form action="<?= base_url ('Admin/Blog/update') ?>" method="POST" enctype='multipart/form-data'>
                                <?php foreach ($dblog as $dblg) : ?>
                                        <div class="form-group">
                                            <label for="NamaToko">Judul Blog</label>
                                            <input type="hidden" class="form-control" id="NamaToko" aria-describedby="NamaToko" name="id_blog" value="<?= $dblg->id_blog ?>" required>
                                            <input type="text" class="form-control" id="NamaToko" aria-describedby="NamaToko" name="judul" value="<?= $dblg->judul ?>" required>
                                        </div>
                                        <label>Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="customFile" name="gambar" accept="image/*" onchange="loadFile(event)" onclick="hide()">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="col-12 mt-3" id="hilang">
                                            <img class="img-thumbnail img-fluid" width="200" src="<?= base_url('assets/img/blog/').$dblg->gambar?>">
                                        </div>
                                    <div class="col-12 mt-3" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="200">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="Alamat">Isi</label>
                                            <textarea class="form-control" id="alamat" name="isi" rows="15" required><?= $dblg->isi ?></textarea>
                                        </div>
                                        <a href="<?= base_url('Admin/Blog')?>" class="btn btn-secondary">Cancel</a>
                                        <!-- <button type="submit" name="submit" class="btn bg-purple-secondary">Simpan Draft</button> -->
                                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                                        </form>
                                        <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->