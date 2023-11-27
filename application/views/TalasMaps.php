
    <style>
      input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
      }
  
      input[type="submit"] {
        padding: 8px 16px;
        background-color: #8743DF;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }
  
      input[type="submit"]:hover {
        background-color: #69318F;
      }

      #map {
                height: 500px;
            }
            .popup-image-container img {
    border: 2px solid #000; /* Adjust the border style and color as needed */
    border-radius: 50%; /* Optional: If you want a circular border */
}

    </style>
  </head>
  <body>
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-12 col-xl-12 col-lg-8">
            <div class="section-title text-center mb-30">
              <h2 class="mb-50 wow fadeInUp" data-wow-delay=".2s">
              Pesebaran Toko Obat Hama di Bogor
              </h2>
                <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-feature">
                      <div class="content">
                      <div id="map">
                        
                      </div>
                    </div>
                </div>
                </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= tracking-section start ========================= -->
    <section id="tracking" class="tracking-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <!-- ========================= Filter-section end ========================= -->
          <!-- ========================= Content-section start ========================= -->
          <div class="col-lg-12 col-12 col-xl-12">
            <div class="tracking-content">
              <div class="section-title mb-50 text-center">
                <h1>Toko Obat</h1>
              </div>
              <div class="row mb-30">
                <?php foreach($toko as $tk):?>
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img
                      src="<?=base_url('assets/img/upload/').$tk->gambar?>"
                      style="max-width: 100%; height: 167px"
                      alt="Gambar Card"
                    />
                    <div class="card-body">
                      <h3 class="card-title"><?= $tk->nama_toko?></h3>
                      <img src="assets/images/Bintang/Bintang_5.png" height="15">(<?=$tk->rating?>)<br/><br/>
                      <a href="<?= base_url('TalasMaps/detailtoko/').$tk->id_toko?>" class="btn btn-small btn-main btn-round-full">Lihat Detail</a>
                    </div>
                  </div>
                </div>
                <?php endforeach?>
              </div>
            </div>
          </div>
          <!-- ========================= Content-section end ========================= -->
        </div>
      </div>
    </section>
