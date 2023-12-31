<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/')?>img/icon.png" />

    <title>Dashboard Admin</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/')?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/')?>css/style-admin.css" rel="stylesheet">
    <style>
        #show {
            display: none;
        }
    </style>
        <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/iocwxw35757j8qzuql2r9vzsrf9h2a14pk4tu0pfr7ts6o3s/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    </script>
</head>

<body id="page-top">    
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar-white sidebar sidebar-purple accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/admin/')?>img/Logo.svg" class="img-fluid" alt="">
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-4 mb-3">

<!-- Nav Item -->
<li class="nav-item <?php if ($this->uri->segment(2) == "Dashboard") { echo 'active';} ?>">
    <a class="nav-link" href="<?= base_url('Admin/Dashboard')?>">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item <?php if ($this->uri->segment(2) == "Pengguna") { echo 'active';} ?>">
                <a class="nav-link" href="<?= base_url('Admin/Pengguna')?>">
                <i class="fa-solid fa-users"></i>
                    <span>Pengguna</span>
                </a>
</li>
<li class="nav-item <?php if ($this->uri->segment(2) == "TokoObat") { echo 'active';} ?>">
    <a class="nav-link" href="<?= base_url('Admin/TokoObat')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Toko Obat</span>
    </a>
</li>
<li class="nav-item <?php if ($this->uri->segment(2) == "TalasInfo") { echo 'active';} ?>">
                <a class="nav-link" href="<?= base_url('Admin/TalasInfo')?>">
                <i class="fa-solid fa-leaf"></i>
                    <span>Talas Info</span>
                </a>
</li>
<li class="nav-item <?php if ($this->uri->segment(2) == "Blog") { echo 'active';} ?>">
    <a class="nav-link" href="<?= base_url('Admin/Blog')?>">
        <i class="fa-solid fa-blog"></i>
        <span>Blog</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Admin/Forum')?>">
        <i class="fa-solid fa-message"></i>
        <span>Forum</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href=" " data-toggle="modal" data-target="#logoutModal">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block my-0 mt-3 mb-4">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link purple d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Talas Care</span>
                    <img class="img-profile rounded-circle"
                        src="<?= base_url('assets/admin/')?>img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->