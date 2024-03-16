<?php $__env->startPush('plugin-styles'); ?>
    <link href="<?php echo e(asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Pendaftar</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jalur Yang Dipilih</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($l->no_pendaftaran); ?></td>
                                        <td><?php echo e($l->nisn); ?></td>
                                        <td><?php echo e($l->nama_lengkap); ?></td>
                                        <td><?php echo e($l->jalur_pendaftaran); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin-scripts'); ?>
    <script src="<?php echo e(asset('assets/plugins/datatables-net/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <script src="<?php echo e(asset('assets/js/data-table.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppdb\resources\views/data.blade.php ENDPATH**/ ?>