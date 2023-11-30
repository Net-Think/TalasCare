<!-- ========================= hero-section start ========================= -->
<section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">Our blog</span>
              <h1 class="text-capitalize mb-4 text-lg">TalasCare Blog</h1>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="<?= base_url() ?>" class="text-white-50">Home</a>
                </li>
                <li class="list-inline-item">
                  <span class="text-white">/</span>
                </li>
                <li class="list-inline-item">
                  <a href="<?= base_url('Blog') ?>" class="text-white">Blog</a>
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
            <?php foreach($blog as $blg):?>
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img src="<?= base_url('assets/img/blog/'.$blg->gambar)?>" alt="" class="img-fluid rounded"/>
              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?= $blg->nama ?></span>
                  <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?= $blg->tanggal ?></span>
                </div>
                <h3 class="mt-3 mb-3">
                  <a href="<?= base_url('Blog/detail/'.$blg->id_blog)?>"><?= $blg->judul ?></a>
                </h3>
                <a href="<?= base_url('Blog/detail/'.$blg->id_blog)?>" class="btn btn-small btn-main btn-round-full">Details</a>
              </div>
            </div>
          </div>
          <?php endforeach?>
          

        <div class="row justify-content-center mt-5">
          <div class="col-lg-6 text-center">
            <nav class="navigation pagination d-inline-block">
              <div class="nav-links">
                <a class="prev page-numbers" href="#">Prev</a>
                <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#">Next</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================= hero-section end ========================= -->