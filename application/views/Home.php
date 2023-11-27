<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h2 class="wow fadeInUp" data-wow-delay=".2s">Mari Bersama Lawan Hama dan Penyakit</h2>
              <p class="wow fadeInUp mt-20" data-wow-delay=".4s"> Sebuah website sumber informasi dan komunitas peduli tanaman talas di Bogor. Bergabunglah dengan Komunitas Peduli Tanaman Talas di Bogor melalui TalasCare! Disini kita bisa berbagi pengalaman dan berkontribusi untuk menjaga ketahanan pangan salah satu komoditas unggulan utama kota Bogor. </p>
              <div class="hero-btns">
                <a href="<?= base_url('Auth/Login')?>" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Gabung Sekarang</a>
                <a href="<?= base_url('TalasAi')?>" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Konsultasi AI</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
              <img src="<?= base_url('assets/')?>img/hero/icon.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= hero-section end ========================= -->
    <!-- ========================= feature-section start ========================= -->
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-1">
                <i class="lni lni-heart"></i>
              </div>
              <div class="content">
                <h3>Solusi Kesehatan Tanaman Talas Yang Terpercaya</h3>
                <p> Jadi solusi permasalahan tanaman talas Anda dari ahli yang terpercaya. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-2">
                <i class="lni lni-eye"></i>
              </div>
              <div class="content">
                <h3>Deteksi Hama dan Penyakit Tanaman Talas dengan AI</h3>
                <p> Fitur TalasAI memudahkan Anda untuk deteksi hama dan penyakit tanaman talas Anda. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-3">
                <i class="lni lni-grow"></i>
              </div>
              <div class="content">
                <h3>Berkontribusi untuk Mendukung Ketahanan Pangan Indonesia</h3>
                <p> Menjadi salah satu komoditas utama yang berasal dari Bogor. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= feature-section end ========================= -->
    <!-- ========================= feature-section start ========================= -->
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-12 col-xl-12 col-lg-8">
            <div class="section-title text-center mb-30">
              <h1 class="mb-50 wow fadeInUp" data-wow-delay=".2s"> Pesebaran Toko Obat Hama di Bogor </h1>
              <div class="widget">
                <div class="widget-item">
                  <h1><?php foreach ($total as $ttl):?><?=$ttl->total ?><?php endforeach?></h1>
                  <p>Total Toko Obat Hama</p>
                </div>
                <div class="widget-item">
                  <h1><?php foreach ($total as $ttl):?><?=$ttl->kota ?><?php endforeach?></h1></h1>
                  <p> di Kota Bogor</p>
                </div>
                <div class="widget-item">
                  <h1><?php foreach ($total as $ttl):?><?=$ttl->kabupaten ?><?php endforeach?></h1>
                  <p>di Kabupaten Bogor</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="single-feature">
              <div class="content">
                <div id="map">
                  <iframe src="<?= base_url('assets/')?>maps/index.html" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <a href="<?= base_url ('TalasMaps')?>" class="map-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Lihat Lebih Lengkap</a>
            </div>
          </div>
        </div>
    </section>
    <!-- ========================= feature-section end ========================= -->
    <!-- ========================= tracking-section start ========================= -->
    <section class="search-section pt-100">
      <div class="container pt-100">
        <div class="row align-items-left">
          <div class="search-content">
            <div class="section-title text-left mb-50">
              <h1 class="mb-40 wow fadeInUp text-center" data-wow-delay=".2s"> Ciri-ciri Umum Tanaman Talas Anda <br> Terjangkit Hama dan Penyakit </h1>
              <div class="container">
                <div class="row">
                  <div class="col-xl-6 col-lg-6">
                    <div class="blog-item">
                      <img src="<?= base_url('assets/')?>images/talas-lubang.png" alt="" class="img-fluid rounded float-left" />
                    </div>
                  </div>
                  <div class="text-left col-xl-6  col-lg-6">
                    <h3>Daun Tanaman Berlubang</h3>
                    <p> Biasanya, hama yang sudah diketahui sering menyerang tanaman talas dengan ciri-ciri di antaranya:
                    <ul>
                      <li>
                        <b>• Ngengat Elang Anggur</b>
                      </li>
                      <li>
                        <b>• Belalang Bertanduk Pendek</b>
                      </li>
                      <li>
                        <b>• Wereng Pucuk Teh,</b>
                      </li>
                      <li>
                        <b>• dan Ulat Grayak. </b>
                      </li>
                    </ul> (Carmichael et al.2008) </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="talasInfo.php" class="map-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Ayo Ketahui Lebih Banyak!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
    </section>
    <!-- ========================= tracking-section end ========================= -->
    <section class="search-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 order-last order-lg-first">
            <div class="search-content">
              <div class="section-title mb-40">
                <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s"> Cara Mencegah Tanaman Talas Agar Tidak Terjangkit Hama & Penyakit </h1>
                <p class="wow fadeInUp" data-wow-delay=".4s"> Berikut adalah beberapa cara mencegah tanaman talas agar tidak hama dan penyakit </p>
              </div>
              <div class="app-info">
                <div class="single-info">
                  <div class="icon-style color-1" style="padding:15px">
                    <h2>
                      <i class="lni lni-checkmark"></i>
                    </h2>
                  </div>
                  <h4>Menjaga kebersihan tanaman</h4>
                </div>
                <div class="single-info">
                  <div class="icon-style color-2" style="padding:15px">
                    <h2>
                      <i class="lni lni-protection"></i>
                    </h2>
                  </div>
                  <h4>Menghindari kelembaban berlebih</h4>
                </div>
                <div class="single-info">
                  <div class="icon-style color-3" style="padding:15px">
                    <h2>
                      <i class="lni lni-layers"></i>
                    </h2>
                  </div>
                  <h4>Menjaga jarak antara tanaman</h4>
                </div>
              </div>
              <p> Menerapkan praktik-praktik ini dapat membantu menjaga tanaman talas Anda tetap sehat dan produktif, sambil mengurangi risiko serangan hama dan penyakit. Penting untuk selalu memantau dan merawat tanaman secara berkala untuk memastikan kesehatannya. </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="search-img text-lg-right img-solusi">
              <img src="<?= base_url('assets/')?>img/plan/cvb.png" width="100%" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= search-section start ========================= -->
    <section class="search-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="search-content">
            <div class="section-title text-center mb-40">
              <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s"> 3 Fitur Andalan TalasCare </h1>
            </div>
            <div class="app-info">
              <div class="single-info">
                <img src="<?= base_url('assets/')?>image/beranda/forum.png">
                <h4>Forum Diskusi</h4>
              </div>
              <div class="single-info">
                <img src="<?= base_url('assets/')?>image/beranda/talasdetection.png">
                <h4>TalasMap</h4>
              </div>
              <div class="single-info">
                <img src="<?= base_url('assets/')?>image/beranda/talasai.png">
                <h4>TalasAI</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- ========================= search-section end ========================= -->
    <!-- FAQ Section Starts -->
    <section id="faq">
      <div class="container my-5 py-5 ">
        <h2 class="text-center  mb-5">Frequently asked questions</h2>
        <div class="accordion col-md-10 offset-md-1" id="accordionPanelsStayOpenExample">
          <?php foreach($faq as $fq):?>
          <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-<?= $fq->id_faq ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"> <?= $fq->pertanyaan ?> </button>
            </h2>
            <div id="panelsStayOpen-<?=$fq->id_faq?>" class="accordion-collapse collapse">
              <div class="accordion-body">
                <p><?= $fq->jawaban ?></p>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>