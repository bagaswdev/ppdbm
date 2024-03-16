<?php $__env->startSection('content'); ?>
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-2 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url(<?php echo e(url('')); ?>)">
                            
                        </div>
                    </div>

                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">VERIFIKASI <span>PPDBM</span></a>
                            <h5 class="text-muted fw-normal mb-4">Silahkan Login Terlebih Dahulu.</h5>
                            <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <b>Opps!</b> <?php echo e(session('error')); ?>

                            </div>
                            <?php endif; ?>
                            <form action="<?php echo e(route('otentikasi')); ?>" method="POST" class="forms-sample">
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
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="email"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        autocomplete="current-password" placeholder="Password" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">Login</button>
                                    <!-- <a href="<?php echo e(url('/')); ?>" class="btn btn-primary me-2 mb-2 mb-md-0">Login</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/auth/login.blade.php ENDPATH**/ ?>