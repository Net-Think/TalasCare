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
                <h6 class="m-0 font-weight-bold font-primary">Grafik Total Forum Diupload Per Tanggal</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="forumChart"></>
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
                <h6 class="m-0 font-weight-bold font-primary">Perbandingan Jumlah Hama dan Penyakit</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="hamaPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        var ctx = document.getElementById("forumChart");
        var forumChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($forum_counts, 'tanggal')); ?>,
                datasets: [{
                    label: 'Jumlah Forum',
                    backgroundColor: 'rgba(192, 130, 177, 0.2)', // Ganti dengan #C082B1
                    borderColor: '#C082B1', // Ganti dengan #C082B1
                    borderWidth: 1,
                    data: <?php echo json_encode(array_column($forum_counts, 'forum_count')); ?>,
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'day',
                            displayFormats: {
                                day: 'YYYY-MM-DD'
                            }
                        },
                        distribution: 'series',
                        ticks: {
                            source: 'auto',
                        },
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "#FFF",  // Ganti dengan warna putih
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            },
        });
    </script>
    <script>
        var ctx = document.getElementById("hamaPieChart");
        var hamaPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode(array_column($hama_counts, 'jenis')); ?>,
                datasets: [{
                    data: <?php echo json_encode(array_column($hama_counts, 'jumlah')); ?>,
                    backgroundColor: ['#C082B1', '#E8BDDD'], // Ganti dengan warna sesuai keinginan
                }],
            },
            options: {
                maintainAspectRatio: false,
            },
        });
    </script>