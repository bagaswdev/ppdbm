<?php $__env->startSection('header1'); ?>
<?php echo $__env->make('layout.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin-styles'); ?>
<link href="<?php echo e(asset('assets/plugins/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">


    <div>
        <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
    
</div>

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow-1">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 mb-md-0">Selamat Datang Bapak/Ibu <?php echo e(Auth::user()->username); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin-scripts'); ?>
<script src="<?php echo e(asset('assets/plugins/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/apexcharts/apexcharts.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
<script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/dashboard.blade.php ENDPATH**/ ?>