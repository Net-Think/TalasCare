<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="nqiBR_4BjU4P4pg1u6hihB5cDmhubifJf3o9vbKANOs" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/')?>img/icon.png" />
    <title>TalasCare | Forum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>bootstrap/css/bootstrap.css">
    <script src="<?=base_url('assets/')?>bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white topbar static-top shadow">
        <div class="container-fluid min-top">
            <img class="navbar-brand" width="109" src="<?=base_url('assets/')?>image/logo.png" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="<?= base_url() ?>"><img src="<?=base_url('assets/')?>image/home.svg" alt=""></a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item">
                        <div class="justify-content-md-center">
                            <form class="d-flex my-auto d-inline w-500">
                                <input class="form-search" type="search" placeholder="Cari forum" aria-label="Search">
                            </form>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link notification" href="<?= base_url('Profile/notifikasi')?>"><img src="<?=base_url('assets/')?>image/lonceng.svg" alt=""></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if ($this->session->userdata('status') == 'login') : ?>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded" src="<?= base_url('assets/image/'). $user['avatar']?>" alt="avatar" width="30" height="30">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['username']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('Profile')?>">
                                <img src="<?=base_url('assets/')?>image/profil.svg" alt="">
                                Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('Auth/Login/logout')?>">
                                <img src="<?=base_url('assets/')?>image/logout.svg" alt="">
                                Keluar
                            </a>
                        </div>
                    </li>
                    <?php else : ?>
                            <div class="border-first-button">
                                <a href="<?= base_url('Auth/Login')?>"><button class="btn btn-purple">Sign In</button></a>
                            </div>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container-fluid">
            <div class="row mt-4 mb-5">
                <div class="col-3">
                        <div class="row">
                            <div class="w-auto d-none d-lg-block">
                                <div class="item-side">
                                    <div class="filter">
                                        <div class="body-filter">
                                            <div class="filter-icon">
                                                <img src="<?=base_url('assets/')?>image/new.svg" alt="">
                                            </div>
                                            <div class="filter-text">
                                                <span class="title-filter">Terbaru dan Terkini</span>
                                                <span class="subtitle-filter">Temukan pembaruan terkini</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter active-filter">
                                        <div class="body-filter">
                                            <div class="filter-icon">
                                                <img src="<?=base_url('assets/')?>image/popular.svg" alt="">
                                            </div>
                                            <div class="filter-text">
                                                <span class="title-filter">Populer hari ini</span>
                                                <span class="subtitle-filter">Temukan topik teratas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="w-auto d-none d-lg-block">
                                <div class="item-side-trending">
                                    <div class="trending">
                                        <span class="trending-tag">Tag Populer</span>
                                        <div class="body-trending">
                                            <span class="title-trending">#talas</span>
                                            <span class="subtitle-trending">82.645 Diposting dengan tag ini</span>
                                        </div>
                                        <div class="body-trending">
                                            <span class="title-trending">#hama</span>
                                            <span class="subtitle-trending">65.523 Diposting • Trending</span>
                                        </div>
                                        <div class="body-trending">
                                            <span class="title-trending">#serangga</span>
                                            <span class="subtitle-trending">51,354 • Trending di Bogor</span>
                                        </div>
                                        <div class="body-trending">
                                            <span class="title-trending">#heppotioncalerino</span>
                                            <span class="subtitle-trending">48,029 Diposting oleh tag ini</span>
                                        </div>
                                        <div class="body-trending">
                                            <span class="title-trending">#spodopteralitura</span>
                                            <span class="subtitle-trending">51,354 • Trending di Bogor</span>
                                        </div>
                                        <div class="body-trending">
                                            <span class="title-trending">#agriusconvolvuli</span>
                                            <span class="subtitle-trending">48,029 Diposting oleh tag ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                        <?php
                        if ($this->session->userdata('status') == 'login') : ?>
                            <div class="card-upload">
                                <form action="<?= base_url('Forum/insertforum')?>" method="POST" enctype="multipart/form-data">
                                <div class="form-komen">
                                    <img src="<?= base_url('assets/image/'). $user['avatar']?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                        <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user')?>">
                                        <input type="text" class="input-post col-12" placeholder="Tulis sesuatu" name="isi">
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="<?=base_url('assets/')?>image/upload.svg" type="button" data-toggle="collapse" data-target="#collapsePost" aria-expanded="false" aria-controls="collapseExample"/>
                                        </label>
                                        <input id="file-input" type="file" name="gambar" accept="image/*" onchange="loadFile(event)" onclick="hide()"/>
                                    </div>                                    
                                    <button type="submit" class="btn btn-purple">Buat Postingan</button>
                                </div>
                                </form>
                                <div class="collapse" id="collapsePost">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="300">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else : ?>
                            <div class="border-first-button justify-content-center">
                                <p>Masuk untuk menambah forum</p>
                                <a href="<?= base_url('Auth/Login')?>"><button class="btn btn-purple">Sign In</button></a>
                            </div>
                        <?php endif ?>
                        </div>
                    </div>
                    <?php foreach ($forum as $frm):?>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-forum">
                                <div class="display-name">
                                    <img src="<?= base_url('assets/image/').$frm->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                    <div class="text-name">
                                        <span class="name"><?= $frm->username ?> <span class="upload-time">• <?= $frm->tanggal ?></span></span>
                                    </div>
                                </div>
                                <span class="title-forum"><?= $frm->isi ?></span>
                                <div class="tags">
                                    <div class="tag">
                                        talas
                                    </div>
                                    <div class="tag">
                                        sakit
                                    </div>
                                    <div class="tag">
                                        hama
                                    </div>
                                </div>
                                <?php if ($frm->image != NULL) : ?>
                                <div class="foto-forum">
                                    <img class="img-fluid" src="<?=base_url('assets/img/forum/').$frm->image?>" alt="">
                                </div>
                                <?php else : ?>
                                <?php endif ?>
                                <?php if ($this->session->userdata('status') == 'login' && $frm->id_user == $user['id_user']) : ?>
                                <div class="action">
                                <button class="btn btn-action like-button <?= (isset($frm->liked) && $frm->liked) ? 'liked' : '' ?>" data-forum-id="<?= $frm->id_forum ?>" onclick="likeForum(this)">
                                    <img src="<?=base_url('assets/')?>image/like.svg" alt="">
                                        <span class="like-count"><?= $frm->jumlah_suka ?></span>
                                    </button>
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample<?= $frm->id_forum ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $frm->jumlah_komentar ?>
                                    </button>
                                    <button class="btn btn-action" onclick="shareContent()">
                                        <img src="<?=base_url('assets/')?>image/share.svg" alt=""> Bagikan
                                    </button>
                                    <a href="<?= base_url('Forum/hapusForum/' . $frm->id_forum) ?>" class="btn btn-action" onclick="return confirm('Anda yakin ingin menghapus forum ini?')">
                                        <img src="<?= base_url('assets/image/trash.svg') ?>" alt="Hapus">
                                        Hapus
                                    </a>
                                </div>
                                <?php elseif($this->session->userdata('status') == 'login') : ?>
                                    <div class="action">
                                    <button class="btn btn-action like-button <?= (isset($frm->liked) && $frm->liked) ? 'liked' : '' ?>" data-forum-id="<?= $frm->id_forum ?>" onclick="likeForum(this)">
                                    <img src="<?=base_url('assets/')?>image/like.svg" alt="">
                                        <span class="like-count"><?= $frm->jumlah_suka ?></span>
                                    </button>
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample<?= $frm->id_forum ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $frm->jumlah_komentar ?>
                                    </button>
                                    <button class="btn btn-action" onclick="shareContent()">
                                        <img src="<?=base_url('assets/')?>image/share.svg" alt=""> Bagikan
                                    </button>
                                </div>
                                <?php else: ?>
                                    <div class="action">
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample<?= $frm->id_forum ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $frm->jumlah_komentar ?>
                                    </button>
                                    <button class="btn btn-action" onclick="shareContent()">
                                        <img src="<?=base_url('assets/')?>image/share.svg" alt=""> Bagikan
                                    </button>
                                    </div>
                                <?php endif ?>
                                <div class="collapse col-12" id="collapseExample<?=$frm->id_forum?>">
                                    <div class="card-komen">
                                        <?php if ($this->session->userdata('status') == 'login') : ?>
                                        <form action="<?= base_url('Forum/insertkomentar')?>" method="POST">
                                        <div class="form-komen">
                                            <img src="<?= base_url('assets/image/'). $user['avatar']?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                                <input type="text" class="input-komen col-12" placeholder="Tulis balasan" name="isi" required>
                                                <input type="hidden" class="input-komen col-12" name="id_user_forum" value="<?=$frm->id_user?>">
                                                <input type="hidden" class="input-komen col-12" name="id_user" value="<?=$user['id_user']?>">
                                                <input type="hidden" class="input-komen col-12" name="id_forum" value="<?= $frm->id_forum ?>">
                                            <button class="btn btn-purple" type="submit">Posting Balasan</button>                                            
                                        </div>
                                        </form>
                                        <?php endif ?>
                                        <?php $id_forum = $frm->id_forum;
                                        $query = $this->db->query("SELECT *, (SELECT COUNT(*) FROM tbl_balasan WHERE tbl_balasan.id_komentar = tbl_komentar.id_komentar) AS jumlah_balasan FROM tbl_komentar LEFT JOIN tbl_user ON tbl_komentar.id_user=tbl_user.id_user WHERE id_forum='$id_forum' ORDER BY id_komentar desc");
                                        foreach ($query->result() as $komentar) :?>
                                        <div class="komentar col-12">
                                            <img src="<?= base_url('assets/image/').$komentar->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name"><?= $komentar->username ?> <span class="upload-time">• <?= $komentar->tanggal ?></span></span>
                                                </div>
                                                <span class="komen-text"><?= $komentar->isi ?></span>
                                                <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseBalasan<?= $komentar->id_komentar?>" aria-expanded="false" aria-controls="collapseBalasan"><img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $komentar->jumlah_balasan?></button>
                                            </div>
                                        </div>
                                        <div class="collapse col-12" id="collapseBalasan<?=$komentar->id_komentar?>">
                                    <div class="card-komen col-12">
                                    <?php if ($this->session->userdata('status') == 'login') : ?>
                                        <form action="<?= base_url('Forum/insertbalasan')?>" method="POST">
                                        <div class="form-komen">
                                            <img src="<?= base_url('assets/image/'). $user['avatar']?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                                <input type="text" class="input-komen col-12" placeholder="Tulis balasan" name="isi" required>
                                                <input type="hidden" class="input-komen col-12" name="id_user" value="<?=$user['id_user']?>">
                                                <input type="hidden" class="input-komen col-12" name="id_user_penerima" value="<?=$komentar->id_user?>">
                                                <input type="hidden" class="input-komen col-12" name="id_komentar" value="<?= $komentar->id_komentar ?>">
                                            <button class="btn btn-purple" type="submit">Posting</button>                                            
                                        </div>
                                        </form>
                                        <?php endif?>
                                        <?php $id_komentar = $komentar->id_komentar;
                                        $query = $this->db->query("SELECT * FROM tbl_balasan LEFT JOIN tbl_user ON tbl_balasan.id_user=tbl_user.id_user WHERE id_komentar='$id_komentar' ORDER BY id_balasan desc");
                                        foreach ($query->result() as $balasan) :?>
                                        <div class="komentar col-12">
                                            <img src="<?= base_url('assets/image/').$balasan->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name"><?= $balasan->username ?> <span class="upload-time">• <?= $balasan->tanggal ?></span></span>
                                                </div>
                                                <span class="komen-text"><?= $balasan->isi ?></span>
                                            </div>
                                        </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <script>
    // Pastikan untuk memuat jQuery sebelumnya dalam skrip Anda
    function likeForum(button) {
        var forumId = $(button).data('forum-id');

        $.ajax({
            url: '<?= base_url('Forum/likeForum') ?>',
            type: 'POST',
            data: { forum_id: forumId },
            dataType: 'json',
            success: function(response) {
                var likeCountSpan = $(button).find('.like-count');
                likeCountSpan.text(response.jumlah_like);

                if (response.liked_status === 1) {
                    $(button).addClass('liked');
                } else {
                    $(button).removeClass('liked');
                }
            }
        });
    }
</script>

    <script>
        function hide() {
            $('#show ').css("display", "block");
        }
    </script>
    <script>
        function shareContent() {
            var urlToShare = "<?=base_url('Forum/').$frm->id_forum ?>";
            var titleToShare = "Contoh Halaman Bagikan";
            if (navigator.share) {
                navigator.share({
                    title: titleToShare,
                    url: urlToShare
                })
                .then(() => console.log('Berhasil membagikan.'))
                .catch((error) => console.error('Gagal membagikan: ', error));
            } else {
                alert("Maaf, browser Anda tidak mendukung fitur berbagi.");
            }
        }
    </script>
</body>
</html>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
    
    </html>