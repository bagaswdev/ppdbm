<?php $__env->startPush('plugin-styles'); ?>
    <link href="<?php echo e(asset('assets/plugins/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BIODATA & PAS FOTO -->

    <div class="position-sticky sticky-top">

        <?php if($hasilCari != null): ?>
            <h4 class="mb-3 mb-md-0"> &nbsp; NO Pendaftaran : <?php echo e($hasilCari[0]->no_pendaftaran); ?></h4>
        <?php else: ?>
            <h4 class="mb-3 mb-md-0"> &nbsp; NO PENDAFTARAN : </h4>
        <?php endif; ?>

        <form action="/cari" method="POST">
            <?php echo csrf_field(); ?>

            <?php if($hasilCari != null): ?>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="mt-4" name="noPendaftaran" placeholder="No Pendaftaran"
                    value="<?php echo e(old('noPendaftaran', $hasilCari[0]->no_pendaftaran)); ?>">
                &nbsp;&nbsp;<button type="submit" name="Cari" class="btn btn-primary">Cari</button>
            <?php else: ?>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="noPendaftaran" class="mt-4"
                    placeholder="No Pendaftaran" ">                                                                                                                    <button type="submit" name="Cari" class="btn btn-primary">Cari</button>
     <?php endif; ?>

        </form>
        <form action="/cariBack" method="POST">
            <?php echo csrf_field(); ?>

            <?php if($hasilCari != null): ?>
                <input type="hidden" name="noPendaftaran" value="<?php echo e($hasilCari[0]->no_pendaftaran); ?>">
                <button type="submit" name="Back" class="btn btn-success">Back</button>
            <?php else: ?>
                <input type="hidden" name="noPendaftaran"">
                <button type="submit" name="Back" class="btn btn-success">Back</button>
            <?php endif; ?>
        </form>
        <form action="/cariNext" method="post">
            <?php echo csrf_field(); ?>

            <?php if($hasilCari != null): ?>
                <input type="hidden" name="noPendaftaran" value="<?php echo e($hasilCari[0]->no_pendaftaran); ?>">
                <button type="submit" name="Next" class="btn btn-success">Next</button>
            <?php else: ?>
                <input type="hidden" name="noPendaftaran">
                <button type="submit" name="Next" class="btn btn-success">Next</button>
            <?php endif; ?>

        </form>
        <?php if($hasilCari != null): ?>
            <h4 class="mb-3 mb-md-0 mt-3"> &nbsp; NAMA : <?php echo e($hasilCari[0]->nama_lengkap); ?></h4>
        <?php else: ?>
            <h4 class="mb-3 mb-md-0 mt-3"> &nbsp; NAMA: </h4>
        <?php endif; ?>

        <?php if($hasilCari != null): ?>
            <h4 class="mb-3 mb-md-0 mt-1"> &nbsp; JALUR YANG DIPILIH : <?php echo e($hasilCari[0]->jalur_pendaftaran); ?></h4>
        <?php else: ?>
            <h4 class="mb-3 mb-md-0 mt-1"> &nbsp; JALUR YANG DIPILIH : </h4>
        <?php endif; ?>
    </div>



    <br><br>

    <div class="row">
        <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BIODATA CALON PESERTA DIDIK</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA LENGKAP : </h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->nama_lengkap); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NIK</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->nik); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NISN</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->nisn); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">SEKOLAH/MADRASAH ASAL (SD/MI)</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->sekolah_asal); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT SEKOLAH/MADRASAH ASAL</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->alamat_sekolah_asal); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">JENIS KELAMIN</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->jenis_kelamin); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TEMPAT LAHIR</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->tempat_lahir); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TANGGAL LAHIR</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->tanggal_lahir); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">AGAMA</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->agama); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->alamat); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->no_wa); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">EMAIL AKTIF (EMAIL UTAMA DAN WAJIB GMAIL)</h6>
                                </div>
                                <?php if($hasilCari != null): ?>
                                    <p class="tx-13"><?php echo e($hasilCari[0]->email_aktif_utama); ?></p>
                                <?php else: ?>
                                    <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <br><br>
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">DATA ORANG TUA / WALI</h6>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">NAMA AYAH / WALI</h6>
                                    </div>
                                    <?php if($hasilCari != null): ?>
                                        <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->nama_ayah); ?></p>
                                    <?php else: ?>
                                        <p>-</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">PEKERJAAN AYAH / WALI</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it= See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">AGAMA AYAH / WALI</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">ALAMAT AYAH / WALI</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP AYAH / WALI</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">ALAMAT EMAIL AYAH / WALI (CADANGAN 1)</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">NAMA IBU</h6>
                                    </div>
                                    <?php if($hasilCari != null): ?>
                                        <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->nama_ibu); ?></p>
                                    <?php else: ?>
                                        <p>-</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">PEKERJAAN IBU</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">AGAMA IBU</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">ALAMAT IBU</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP IBU</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">ALAMAT EMAIL IBU (CADANGAN 2)</h6>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">NILAI PENGETAHUAN RAPOR</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>KELAS 5 SMT1</th>
                                        <th>KELAS 5 SMT2</th>
                                        <th>KELAS 6 SMT1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>MATEMATIKA</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>IPA/IPAS</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>B. INDONESIA</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body ">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">PASS PHOTO</h6>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-full">
                            <div class="d-flex justify-content-between">
                                <img align="center"
                                    src="https://drive.google.com/thumbnail?id=1GndzmEGxGdviJ99PJ35SFZWz6a4V4QTc&sz=s1000"
                                    width="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- row -->

    <br>
    <div>
        <h4 class="mb-3 mb-md-0">UPLOAD BERKAS</h4>
    </div>
    <br>

    <!-- UPLOAD BERKAS -->
    <div class="row">
        <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">AKTE KELAHIRAN</h6>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA LENGKAP</h6>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TEMPAT LAHIR</h6>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TANGGAL LAHIR</h6>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA AYAH</h6>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA IBU</h6>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">NISN - </h6>
                    </div>

                    <br><br>
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">NILAI PENGETAHUAN RAPOR</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>KELAS 5 SMT1</th>
                                    <th>KELAS 5 SMT2</th>
                                    <th>KELAS 6 SMT1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>MATEMATIKA</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>IPA/IPAS</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>B. INDONESIA</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BUKTI AKTE KELAHIRAN</h6>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-full">
                            <div class="d-flex justify-content-between">
                                <img align="center"
                                    src="https://drive.google.com/thumbnail?id=1_wpvfAyCc5sh42QrVKxEL-fOcgyFiW4a&sz=s1000"
                                    width="600">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BUKTI NISN</h6>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-full">
                            <div class="d-flex justify-content-between">
                                <img align="center"
                                    src="https://drive.google.com/thumbnail?id=1Cl8pAi9eA4uz94tsejAEIafBJqwUkvdm&sz=s1000"
                                    width="600">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BUKTI REKAPITULASI NILAI RAPOR</h6>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-full">
                            <div class="d-flex justify-content-between">
                                <img align="center"
                                    src="https://drive.google.com/thumbnail?id=107-fH7S9Cun1D3fkxVLj6lBIaEY7JyRH&sz=s1000"
                                    width="600">
                            </div>
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppdb\resources\views/detail.blade.php ENDPATH**/ ?>