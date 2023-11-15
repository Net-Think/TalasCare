<!-- ========================= hero-section start ========================= -->
<?php foreach($dtoko as $tk):?>
<section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <span class="text-white">Detail Toko</span>
                <h1 class="text-capitalize mb-4 text-lg">TalasMap</h1>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="index.php" class="text-white-50">Home</a>
                  </li>
                  <li class="list-inline-item">
                    <span class="text-white">/</span>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-white">TalasMap</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section blog-wrap bg-gray">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="row">
          <div class="col-lg-12 mb-5">
              <div class="single-blog-item">
                  <h2 class="mt-3 mb-4"><?=$tk->nama_toko?></h2><br/>
                  <div class="blog-item-content bg-white p-5">
                      <img src="<?=base_url('assets/img/upload/').$tk->gambar?>" alt="" class="img-fluid rounded">
                      <img src="<?=base_url('assets/images/')?>Bintang/Bintang_5.png" alt="" class="mt-4"/>(<?=$tk->rating?>) 
                      <h3 class="mt-4">Deskripsi</h3>
                      <p class="mt-2"><?=$tk->deskripsi?></p>
                  </div>
              </div>
          </div>
      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="sidebar-wrap">
                        <div class="sidebar-widget latest-post card border-0 p-4 mb-3 mt-105">
                            <ul class="unstyle">
                                <li><h4>Kontak</h4></li>
                                <li><b class="propertyname">Alamat:</b> <?=$tk->alamat?></li>
                                <li><b class="propertyname">Waktu:</b> Pukul: <?=$tk->jam_buka?>-<?=$tk->jam_tutup?></li>
                                <li><b class="propertyname">Website:</b> <a href="<?=$tk->website?>"><?=$tk->website?></a></li>
                                <li><b class="propertyname">Telepon:</b> <?=$tk->no_telp?></li>      
                            <div class="media border-bottom py-3">

</div>
</div>
                  </div>   
                      <div class="sidebar-wrap">
                        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                            <ul class="unstyle">
                                <li><h4>Ulasan</h4></li>
                                <?php
                                $query = $this->db->query("SELECT * FROM tbl_ulasan LEFT JOIN tbl_user ON tbl_ulasan.id_user=tbl_user.id_user WHERE id_toko='$tk->id_toko'");
                                        foreach ($query->result() as $ulasan) :?>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-2">
                                                    <img src="<?= base_url("assets/image/").$ulasan->avatar?>" alt="" class="rounded img-fluid">
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <small><b> <?=$ulasan->username?></b></small>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <small>Rating: <b>
                                                                    <?= $ulasan->rating ?>
                                                                    </b>
                                                                </small>
                                                                <br>
                                                                <small>
                                                                    <?= $ulasan->komentar ?>
                                                                </small>
                                                                <br>
                                                                <small>
                                                                    <?= $ulasan->tanggal ?>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
</div>
                  </div>   
              </div>
          </div>
      </section>
      <?php endforeach?>