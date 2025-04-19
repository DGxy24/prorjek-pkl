<?php $__env->startSection('container'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket Masuk</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID Tiket</th>
                    <th scope="col">Tanggal Lapor</th>
                    <th scope="col">Nama Bagian</th>
                    <th scope="col">Permasalah</th>
                    <th scope="col">Penjelasan</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->created_at->translatedformat('l-d-M-Y')); ?></td>
                        <td><?php echo e($item->bagian->nama_bagian); ?></td>
                        <td><?php echo e($item->permasalahan->jenis_masalah); ?></td>
                        <td><?php echo e($item->penjelasan); ?></td>
                        <td><?php echo e($item->tindakan); ?></td>
                        
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="showTicketDetails('<?php echo e($item->id); ?>','<?php echo e($item->user->name); ?>'
                                ,'<?php echo e($item->created_at->translatedformat('l-d F Y')); ?>',
                                '<?php echo e($item->bagian->nama_bagian); ?>', '<?php echo e($item->permasalahan->jenis_masalah); ?>',
                                 '<?php echo e($item->penjelasan); ?>', '<?php echo e($item->tindakan); ?>');
                                status();
                                ">

                                <span data-feather="eye"><i class="bi bi-eye-fill"></i></span>
                            </button>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ticket Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm">
                        <tr>
                            <th>ID Tiket</th>
                            <td id="modalTicketId"></td>
                        </tr>
                        <tr>
                            <th>Nama Pelapor</th>
                            <td id="modalTicketNama"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lapor</th>
                            <td id="modalTanggalLapor"></td>
                        </tr>
                        <tr>
                            <th>Nama Bagian</th>
                            <td id="modalNamaBagian"></td>
                        </tr>
                        <tr>
                            <th>Permasalah</th>
                            <td id="modalPermasalah"></td>
                        </tr>
                        <tr>
                            <th>Penjelasan</th>
                            <td id="modalPenjelasan"></td>
                        </tr>
                        <tr>
                            <th>Tindakan</th>
                            <td id="modalTindakan"></td>
                        </tr>
                    </table>
                </div>

                <div class="modal-footer">
                    <form id="link_terima" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-success" type="submit">Setuju</button>
                    </form>

                    <form id="link_tolak" method="POST">

                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger" type="submit">Tolak</button>

                    </form>
                    
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard-admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program\PKL\prorjek-pkl\resources\views/Dashboard-admin/Tiket-masuk/index.blade.php ENDPATH**/ ?>