<?php $__env->startSection('container'); ?>
    

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Admin<h1>
    </div>

    <div class="row mb-4">
        <!-- Card Jumlah Tiket -->
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Tiket</h5>
                            <h3 class="card-text" id="totalTickets"><?php echo e($tiket); ?></h3>
                            <!-- Ganti dengan jumlah tiket dinamis -->
                        </div>
                        <div class="icon">
                            <i class="bi bi-ticket-perforated-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Akun Pengguna -->
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Jumlah Akun Pengguna</h5>
                            <h3 class="card-text" id="totalUsers"><?php echo e($akun); ?></h3>
                            <!-- Ganti dengan jumlah akun dinamis -->
                        </div>
                        <div class="icon">
                            <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            
        </div>
    </div>

    <div class="col-md-7">
        <h3 class="h3">Persentasi Tiket<h3>
                <canvas id="barchartTiket" style="width: 100%;"></canvas>
    </div>

    <div class="container">
        <div class="col-md-12">
            <h4> Bidang</h4>
            <canvas id="barchartBidang" style="width: 100%;"></canvas>
        </div>
        <div class="mt-3"></div>
        <div class="col-md-12">
            <h4> Jenis Masalah</h4>
            <canvas id="barchartMasalah" style="width: 100%;"></canvas>
        </div>
    </div>
    <script>
        var ctx = document.getElementById("barchartTiket").getContext("2d");
        var barchartTiket = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Persentasi Tiket"], // Hanya satu bagian
                datasets: [{
                    label: "Diajukan",
                    data: [<?php echo e($ajukan); ?>],
                    backgroundColor: [
                        "rgba(54, 162, 235, 0.5)", // Biru untuk Diajukan
                    ],
                    borderColor: [
                        "rgba(54, 162, 235, 1)", // Biru untuk Diajukan
                    ],
                    borderWidth: 3,
                }, {
                    label: "Dalam Proses",
                    data: [<?php echo e($proses); ?>],
                    backgroundColor: [
                        "rgba(255, 205, 86, 0.5)", // Kuning untuk Dalam Proses
                    ],
                    borderColor: [
                        "rgba(255, 205, 86, 1)", // Kuning untuk Dalam Proses
                    ],
                    borderWidth: 3,
                }, {
                    label: "Ditolak",
                    data: [<?php echo e($tolak); ?>],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.5)", // Merah untuk Ditolak
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)", // Merah untuk Ditolak
                    ],
                    borderWidth: 3,
                }, {
                    label: "Selesai",
                    data: [<?php echo e($terima); ?>],
                    backgroundColor: [
                        "rgba(75, 192, 192, 0.5)" // Hijau untuk Selesai
                    ],
                    borderColor: [
                        "rgba(75, 192, 192, 1)" // Hijau untuk Selesai
                    ],
                    borderWidth: 3,
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>

    <script>
        // bar chart bidang
        var ctx = document.getElementById("barchartBidang").getContext("2d");
        // var bagian = <?php echo json_encode($bagian->toArray()); ?>;
        var barchartBidang = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    <?php $__currentLoopData = $bagian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($item->nama_bagian); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                datasets: [{
                    label: "Jumlah Tiket",
                    // Jika Bagian ditambah, jangan lupa menambahkan variabelnya kesini juga
                    data: [<?php echo e($bagian1); ?>, <?php echo e($bagian2); ?>, <?php echo e($bagian3); ?>,
                        <?php echo e($bagian4); ?>,
                        <?php echo e($bagian5); ?>, <?php echo e($bagian6); ?>, <?php echo e($bagian7); ?>,
                        <?php echo e($bagian8); ?>, <?php echo e($bagian9); ?>,
                    ],
                    backgroundColor: "rgba(72, 189, 58, 0.5)",
                    borderColor: "rgba(72, 189, 58, 1)",
                    borderWidth: 2,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
        //  end bar chart bidang

        // barchart masalah
        var ctx = document.getElementById("barchartMasalah").getContext("2d");
        var barchartMasalah = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    <?php $__currentLoopData = $masalah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($item->jenis_masalah); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                datasets: [{

                    label: "Jumlah Tiket",
                    // Jika jenis masalah ditambah, jangan lupa menambahkan variabelnya kesini juga
                    data: [<?php echo e($masalah1); ?>, <?php echo e($masalah2); ?>, <?php echo e($masalah3); ?>,
                        <?php echo e($masalah4); ?>,
                        <?php echo e($masalah5); ?>, <?php echo e($masalah6); ?>, <?php echo e($masalah7); ?>,
                        <?php echo e($masalah8); ?>,
                        <?php echo e($masalah9); ?>,
                    ],
                    backgroundColor: "rgba(255, 72, 20, 0.5)",
                    borderColor: "rgba(255, 72, 20, 1)",
                    borderWidth: 2,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
        // end barchart masalah
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard-admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program\PKL\prorjek-pkl\resources\views/dashboard-admin/index.blade.php ENDPATH**/ ?>