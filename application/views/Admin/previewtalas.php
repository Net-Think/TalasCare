<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TalasCare - Website komunitas peduli tanaman talas</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/')?>img/icon.png" />
    <!-- ========================= CSS here ========================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/main.css" />
</head>
  <body>
    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php foreach($dinfo as $inf):?>
      <section class="section blog-wrap bg-gray">
          <div class="container">
              <div class="row">
                <div class="col-12">
               <a class="text-dark" href="<?= base_url('Admin/TalasInfo') ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg> Preview</a>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-8">
                      <div class="row">
          <div class="col-lg-12 mb-5">
              <div class="single-blog-item">
                  <h2 class="mt-3 mb-4"><?= $inf->nama ?></h2><br/>
                  <div class="blog-item-content bg-white p-5">
                      <img src="<?= base_url('assets/images/').$inf->gambar?>" alt="" class="img-fluid rounded">
                      <p class="mt-5"><?=$inf->deskripsi?></p>
                     
                  </div>
              </div>
          </div>
      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="sidebar-wrap">
                        
      
          <div class="sidebar-widget latest-post card border-0 p-4 mb-3 mt-105">
            
              <ul class="unstyle">
                <li><b class="propertyname">Pencegahan:</b></li>
                <?=$inf->pencegahan?><br/>
                <li><b class="propertyname">Pengobatan:</b></li>
                <?=$inf->pengobatan?>
            </ul>
      
             
      
              <div class="media border-bottom py-3">
            
          </div>
      
         
      </div>
                  </div>   
              </div>
          </div>
      </section>
      <?php endforeach?>
    <!-- ========================= footer end ========================= -->
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>
    <!-- ========================= JS here ========================= -->
    <script src="<?= base_url('assets/')?>js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="<?= base_url('assets/')?>js/count-up.min.js"></script>
    <script src="<?= base_url('assets/')?>js/wow.min.js"></script>
    <script src="<?= base_url('assets/')?>js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  </body>
</html>