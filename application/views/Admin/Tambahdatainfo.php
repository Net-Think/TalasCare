<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Form Insert Data Hama dan Penyakit</h1>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Hama dan Penyakit</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                <form action="<?= base_url ('Admin/TalasInfo/insert') ?>" method="POST" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="NamaToko">Nama Hama/Penyakit</label>
                                            <input type="text" class="form-control" id="NamaToko" aria-describedby="NamaToko" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Deskripsi</label>
                                            <textarea class="form-control" id="alamat" name="deskripsi" rows="5" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Pencegahan</label>
                                            <textarea class="form-control" id="alamat" name="pencegahan" rows="5" required></textarea>
                                        </div>
                                </div>
                                <div class="col-xl-5 col-12">
                                <div class="form-group">
                                            <label for="Alamat">Pengobatan</label>
                                            <textarea class="form-control" id="alamat" name="pengobatan" rows="5" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                            <option value="Hama">Hama</option>
                                            <option value="Penyakit">Penyakit</option>
                                            </select>
                                        </div>
                                    <label>Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="customFile" name="gambar" accept="image/*" onchange="loadFile(event)" onclick="hide()" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="200">
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Admin/TalasInfo')?>" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>