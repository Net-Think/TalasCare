<!-- ========================= hero-section start ========================= -->
<section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <span class="text-white">Our blog</span>
                <h1 class="text-capitalize mb-4 text-lg">TalasCare Info</h1>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="<?= base_url() ?>" class="text-white-50">Home</a>
                  </li>
                  <li class="list-inline-item">
                    <span class="text-white">/</span>
                  </li>
                  <li class="list-inline-item">
                    <a href="<?= base_url('TalasInfo') ?>" class="text-white">Talas Info</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php foreach($info as $inf):?>
      <section class="section blog-wrap bg-gray">
          <div class="container">
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
    <!-- ========================= hero-section end ========================= -->