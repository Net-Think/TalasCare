<!-- ========================= hero-section start ========================= -->
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">TalasInfo</span>
              <h1 class="text-capitalize mb-4 text-lg">Info Tanaman Talas</h1>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="<?= base_url() ?>" class="text-white-50">Home</a>
                </li>
                <li class="list-inline-item">
                  <span class="text-white">/</span>
                </li>
                <li class="list-inline-item">
                  <a href="<?= base_url('TalasInfo') ?>" class="text-white">TalasInfo</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section blog-wrap bg-gray">
      <div class="container mt-5">
        <h1 class="mb-25 wow fadeInUp" style="margin-top: -80px; text-align: center" data-wow-delay=".2s">
          Hama Tanaman Talas
        </h1>
        <div class="row mb-30">
          <?php foreach($hama as $hm):?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="<?= base_url('assets/images/').$hm->gambar ?>" style="max-width: 100%; height: 200px" alt="Gambar Card"/>
              <div class="card-body">
                <h3 class="card-title"><?= $hm->nama ?></h3>
                <p class="card-text text-truncate">
                  <?= $hm->deskripsi ?>
                </p>
                <a href="<?= base_url('TalasInfo/detail/').$hm->id_hama ?>" class="btn btn-small btn-main btn-round-full">Lihat Detail</a>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="container mt-5">
        <h1 class="mb-25 wow fadeInUp" style="margin-top: 40px; text-align: center" data-wow-delay=".2s">
          Penyakit Tanaman Talas
        </h1>
        <div class="row mb-30">
        <?php foreach($penyakit as $pnykt):?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="<?= base_url('assets/images/').$pnykt->gambar ?>" style="max-width: 100%; height: 200px" alt="Gambar Card"/>
              <div class="card-body">
                <h3 class="card-title"><?= $pnykt->nama ?></h3>
                <p class="card-text text-truncate">
                <?= $pnykt->deskripsi ?>
                </p>
                <a href="<?= base_url('TalasInfo/detail/').$pnykt->id_hama ?>" class="btn btn-small btn-main btn-round-full">Lihat Detail</a>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <!-- ========================= hero-section end ========================= -->