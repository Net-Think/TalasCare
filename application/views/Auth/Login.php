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
    <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.css">
    <script src="<?= base_url('assets/')?>bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center my-auto">
                    <div class="card shadow mt-5">
                        <div class="row">
                            <div class="col-md-5 d-none d-lg-block">
                                <img src="<?= base_url('assets/')?>image/talas.png" alt="..." class="img-fluid login">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Login</h3>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <?= $this->session->flashdata('message'); ?>
                                            <form action="<?= base_url ('Auth/Login') ?>" method="POST">
                                            <div class="form-group">
                                                <label class="label-auth">Username</label>
                                                <input type="text" class="form-profil" placeholder="Cnth. zaky" name="username">
                                                <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label class="label-auth">Password</label>
                                                <input type="password" class="form-profil" placeholder="Masukkan password" name="password">
                                                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <a href="#" class="label-auth d-flex justify-content-end mt-2">Lupa Password</a>
                                            <button type="submit" class="btn btn-purple-login col-12 text-center mt-4">Login</button>
                                            </form>
                                            <a href="<?= base_url('Auth/Register')?>"><button class="btn btn-secondary-login col-12 text-center mt-2">Daftar Akun</button></a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
    
    </html>