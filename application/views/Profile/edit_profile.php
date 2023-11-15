<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="nqiBR_4BjU4P4pg1u6hihB5cDmhubifJf3o9vbKANOs" />
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
                                                <img src="<?= base_url('assets/image/').$user['avatar']?>" width="40" height="40" class="rounded" alt="">
                                            <div class="filter-text">
                                                <span class="title-filter"><?= $user['nama']?></span>
                                                <span class="subtitle-filter"><?= $user['alamat']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="w-auto d-none d-lg-block">
                            <div class="item-side">
                                    <div class="filter">
                                        <a href="<?= base_url('Profile/editProfile')?>">
                                            <div class="body-filter">
                                                    <img src="<?= base_url('assets/image/') ?>profile.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Edit Profil</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="post_forum.php">
                                            <div class="body-filter">
                                                    <img src="<?= base_url('assets/image/') ?>forum.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Postingan Forum</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="<?= base_url('Auth/Login/logout') ?>">
                                            <div class="body-filter">
                                                    <img src="<?= base_url('assets/image/') ?>keluar.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Keluar</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="card-forum">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Edit Profil</h3>
                                </div>
                                <form action="<?= base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mt-2 mb-5">
                                    <div class="col-2">
                                        <span>Avatar</span>
                                        <div class="col-12" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="100" height="100">
                                        </div>
                                        <img src="<?= base_url('assets/image/').$user['avatar']?>" id="hilang" style="display: block;" class="rounded" width="100" height="100" alt="">
                                        <div class="image-upload">
                                            <label for="file-input">
                                                <a class="btn btn-purple mt-1">Edit Avatar</a>
                                            </label>
                                            <input id="file-input" type="file" name="avatar" accept="image/*" onchange="loadFile(event)" onclick="hide()"/>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-profil" name="nama" value="<?= $user['nama']?>" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Username</label>
                                            <input type="text" class="form-profil" name="username" value="<?= $user['username']?>" readonly required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Nomor Telepon</label>
                                            <input type="text" class="form-profil" name="no_telepon" value="<?= $user['no_telepon']?>" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Email</label>
                                            <input type="text" class="form-profil" name="email" value="<?= $user['email']?>" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-profil" name="tanggal_lahir" value="<?= $user['tanggal_lahir']?>" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Alamat</label>
                                            <textarea type="text" class="form-profil" rows="7" name="alamat" required><?= $user['alamat']?></textarea>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-purple">Simpan</button>
                                                </form>
                                            </div>
                                            <div class="col-4">
                                            <button class="btn btn-purple-secondary"><a href="<?= base_url('Profile') ?>" style="color:#C082B1;">Batal</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script>
        function hide() {
            $('#show ').css("display", "block");
            $('#hilang ').css("display", "none");
        }
    </script>
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