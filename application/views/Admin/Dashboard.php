<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 font-primary">Dashboard Admin Talas Care</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <?php foreach($total as $ttl):?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">
                            Total User</div>
                        <div class="h5 mb-0 font-weight-bold font-primary"><?=$ttl->totaluser?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x purple"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">
                            Total Forum</div>
                        <div class="h5 mb-0 font-weight-bold font-primary"><?=$ttl->totalforum?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x purple"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">
                            Total Blog</div>
                        <div class="h5 mb-0 font-weight-bold font-primary"><?=$ttl->totalblog?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file fa-2x purple"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Total Toko Obat
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold font-primary"><?=$ttl->totaltoko?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fa-solid fa-store fa-2x purple"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold font-primary">Grafik Total Pengunjung Website (Bulan)</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Filter:</div>
                        <a class="dropdown-item" href="#">Bulan Sebelumnya</a>
                        <a class="dropdown-item" href="#">Bulan Selanjutnya</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold font-primary">Kategori Pengunjung Website</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Filter:</div>
                        <a class="dropdown-item" href="#">Jumlah Signed In</a>
                        <a class="dropdown-item" href="#">Jumlah Not Signed In</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle purple"></i> Signed In
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle purple-secondary"></i> Not Signed In
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>