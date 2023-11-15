<!-- Begin Page Content -->
<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Form Insert Data Toko</h1>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Toko</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <form action="<?= base_url ('Admin/TokoObat/insert') ?>" method="POST" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="NamaToko">Nama Toko</label>
                                            <input type="text" class="form-control" id="NamaToko" aria-describedby="NamaToko" name="nama_toko" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Jenis">Jenis</label>
                                                <input type="text" class="form-control" id="Jenis" aria-describedby="Jenis" name="jenis" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Rating">Rating</label>
                                                <input type="text" class="form-control" id="Rating" aria-describedby="Rating" name="rating" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="5" required></textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Lattitude">Lattitude</label>
                                                <input type="text" class="form-control" id="Lattitude" aria-describedby="Lattitude" name="lattitude" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Longitude">Longitude</label>
                                                <input type="text" class="form-control" id="Longitude" aria-describedby="Longitude" name="longitude" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NoTelp">Nomor Telepon</label>
                                            <input type="number" class="form-control" id="NoTelp" aria-describedby="NoTelp" name="no_telp" required>
                                        </div>
                                </div>
                                <div class="col-xl-5 col-12">
                                <div class="form-group">
                                            <label for="gambar">Website</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">https://</div>
                                                </div>
                                                <input type="link" class="form-control" id="Website" aria-describedby="Website" name="website">
                                            </div>
                                        </div>
                                <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="JamBuka">Jam Buka</label>
                                                <input type="time" class="form-control" id="JamBuka" aria-describedby="JamBuka" name="jam_buka" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="JamTutup">Jam Tutup</label>
                                                <input type="time" class="form-control" id="JamTutup" aria-describedby="JamTutup" name="jam_tutup" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Toko</label>
                                            <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi" required></textarea>
                                        </div>
                                    <label>Gambar Toko</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="customFile" name="gambar" accept="image/*" onchange="loadFile(event)" onclick="hide()" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="200">
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Admin/TokoObat')?>" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>