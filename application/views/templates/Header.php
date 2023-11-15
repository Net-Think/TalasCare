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
    <link rel="stylesheet" href="<?= base_url('assets/ai/')?>style.css" />
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
    <!-- preloader end -->
    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?php base_url()?>">
                  <img src="<?= base_url('assets/')?>img/logo/logo.png" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar justify-content-end" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a href="<?= base_url()?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= base_url('Forum')?>">Forum</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= base_url('Blog')?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="page-scroll" href="#download">Talas</a>
                      <div class="dropdown-content">
                        <a href="<?= base_url('TalasInfo')?>">TalasInfo</a>
                        <a href="<?= base_url('TalasAi')?>">TalasAI</a>
                        <a href="<?= base_url('TalasMaps')?>">TalasMaps</a>
                      </div>
                    </li>
                    <li class="nav-item2">
                    <?php
                        if ($this->session->userdata('status') == 'login') : ?>
                        <li class="nav-item dropdown">
                          <a class="page-scroll" href="#download"><img src="<?= base_url('assets/image/'). $user['avatar']?>" alt="avatar" class="img rounded" width="30" height="30"></a>
                          <div class="dropdown-content">
                            <a href="<?= base_url('Profile')?>">Profil</a>
                            <a href="<?= base_url('Auth/Login/logout')?>">Logout</a>
                          </div>
                        </li>
                        <?php else : ?>
                          <div class="border-first-button">
                            <a href="<?= base_url('Auth/Login')?>">Sign In</a>
                          </div>
                        <?php endif ?>
                    </li>
                    <!-- <li class="nav-item3"><div class="border-first-button"><a href="#contact">Sign Up</a></div></li> -->
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->