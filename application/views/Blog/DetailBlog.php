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
    <?php foreach($blog as $blg):?>
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="single-blog-item">
                <h2 class="mt-3 mb-4"><?= $blg->judul ?></h2><br/>
                <div class="blog-item-meta bg-gray py-1 px-2">
                    <span class="text-black text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?= $blg->nama ?></span>
                    <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?= $blg->tanggal ?></span>
                </div>
    
                <div class="blog-item-content bg-white p-5">
                    <img src="<?= base_url('assets/img/blog/').$blg->gambar?>" alt="" class="img-fluid rounded">
                    <p><?= $blg->isi?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
    
        <div class="sidebar-widget card border-0 mb-3">
            <img src="../assets/img/blog/avatar1.jpg" alt="" class="img-fluid rounded">
            <div class="card-body p-4 text-center">
                <h5 class="mb-0 mt-4"><?= $blg->nama ?></h5>
                <p>Admin</p>
                <!-- <ul class="list-inline author-socials">
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-behance text-muted"></i></a>
                    </li>
                </ul> -->
            </div>
        </div>
    
        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
            <h5>Recent Posts</h5>
            <?php foreach($recentblog as $recent):?>
            <div class="media border-bottom py-3">
                <a href="<?= base_url('Blog/detail/'.$recent->id_blog)?>">
                    <img class="mr-4 img-fluid rounded" width="100" src="<?= base_url('assets/img/blog/').$recent->gambar?>" alt="">
                </a>
                <div class="media-body">
                <h6 class="my-2"><a href="<?= base_url('Blog/detail/'.$recent->id_blog)?>"><?= $recent->judul?></a></h6>
                    <span class="text-sm text-muted"><?= $recent->tanggal ?></span>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    
        <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
            <h5 class="mb-4">Tags</h5>
    
            <a href="#">Tanaman</a>
            <a href="#">Talas</a>
            <a href="#">Manfaat</a>
            <a href="#">Bogor</a>
            <a href="#">Ketahanan Pangan</a>
            <a href="#">Pangan Lokal</a>
            <a href="#">Pangan Tradisional</a>
            <a href="#">Perkebunan Talas</a>
        </div>
    </div>
                </div>   
            </div>
        </div>
    </section>

    <!-- ========================= hero-section end ========================= -->