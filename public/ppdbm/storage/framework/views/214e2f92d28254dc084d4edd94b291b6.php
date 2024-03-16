<?php $__env->startSection('header2'); ?>
<?php echo $__env->make('layout.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('plugin-styles'); ?>
<link href="<?php echo e(asset('assets/plugins/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- BIODATA & PAS FOTO -->

<div class="position-sticky sticky-top">
    <div class="row">
        <div class="col-md-6">

            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
            <h4 class="mb-3 mb-md-0"> &nbsp; NO Pendaftaran : <?php echo e($hasilCari[0]->no_pendaftaran); ?></h4>
            <?php else: ?>
            <h4 class="mb-3 mb-md-0"> &nbsp; NO PENDAFTARAN : </h4>
            <?php endif; ?>

            <form action="/cari" method="POST">
                <?php echo csrf_field(); ?>

                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="mt-4" name="noPendaftaran" placeholder="No Pendaftaran"
                    value="<?php echo e(old('noPendaftaran', $hasilCari[0]->no_pendaftaran)); ?>">

                &nbsp;&nbsp;
                <button type="submit" name="Cari" class="btn btn-primary">Cari</button>
                <?php else: ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="noPendaftaran" class="mt-4" placeholder="No Pendaftaran"
                    value="<?php echo e($noPendaftaranSekarang); ?>">
                <button type="submit" name="Cari" class="btn btn-primary">Cari</button>
                <?php endif; ?>
            </form>

            <?php if($hasilCari == null): ?>
            <script>
                // Reset nilai input jika hasilCari == null
                        document.getElementById('searchForm').reset();
            </script>
            <?php endif; ?>

            <form action="/cariBack" method="POST">
                <?php echo csrf_field(); ?>

                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                <input type="hidden" name="noPendaftaran" value="<?php echo e($hasilCari[0]->no_pendaftaran); ?>">
                <button type="submit" name="Back" class="btn btn-success">Back</button>
                <?php else: ?>
                <input type="hidden" name="noPendaftaran" value="<?php echo e($noPendaftaranSekarang); ?>">
                <button type="submit" name="Back" class="btn btn-success">Back</button>
                <?php endif; ?>
            </form>

            <form action="/cariNext" method="post">
                <?php echo csrf_field(); ?>

                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                <input type="hidden" name="noPendaftaran" value="<?php echo e($hasilCari[0]->no_pendaftaran); ?>"
                    placeholder="NEXT">
                <button type="submit" name="Next" class="btn btn-success">Next</button>
                <?php else: ?>
                <input type="hidden" name="noPendaftaran" placeholder="NEXT" value="<?php echo e($noPendaftaranSekarang); ?>">
                <button type="submit" name="Next" class="btn btn-success">Next</button>
                <?php endif; ?>

            </form>

            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
            <h4 class="mb-3 mb-md-0 mt-3"> &nbsp; NAMA : <?php echo e($hasilCari[0]->nama_lengkap); ?></h4>
            <?php else: ?>
            <h4 class="mb-3 mb-md-0 mt-3"> &nbsp; NAMA: </h4>
            <?php endif; ?>

            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
            <h4 class="mb-3 mb-md-0 mt-1"> &nbsp; JALUR YANG DIPILIH : <?php echo e($hasilCari[0]->jalur_pendaftaran); ?></h4>
            <?php else: ?>
            <h4 class="mb-3 mb-md-0 mt-1"> &nbsp; JALUR YANG DIPILIH : </h4>
            <?php endif; ?>

        </div>

        <div class="col-md-6">
            <form class="forms-sample" action="<?php echo e(route('proses_verifikasi')); ?>" method="POST">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                <input type="hidden" name="no_pendaftaran" value="<?php echo e($verifikasiSementara[0]->no_pendaftaran); ?>">
                <?php endif; ?>

                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="pas_foto"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cFoto == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cFoto == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="pas_fotoh" name="pas_foto">
                    <label class="form-check-label" for="pas_foto">Pas Foto</label>
                    <?php endif; ?>
                </div>

                <div class="form-check form-check-inline mt-3">

                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="akte"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cAkte == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cAkte == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenAkte" name="akte">
                    <label class="form-check-label" for="akte">Akte</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="nisn"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cNisn == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cNisn == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenNisn" name="nisn">
                    <label class="form-check-label" for="nisn">NISN</label>
                    <?php endif; ?>
                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="rapot"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cRapot == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cRapot == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenRapot" name="rapot">
                    <label class="form-check-label" for="rapot">Raport</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="absah"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cAbsah == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cAbsah == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenAbsah" name="absah">
                    <label class="form-check-label" for="absah">Absah</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="kelakuan"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cKelakuan == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cKelakuan == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenKelakuan" name="kelakuan">
                    <label class="form-check-label" for="kelakuan">Kelakuan</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="grupWA"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cWa == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cWa == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenGrupWA" name="grupWA">
                    <label class="form-check-label" for="grupWA">GRUP WA</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="paralel"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cParalel == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cParalel == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenParalel" name="paralel">
                    <label class="form-check-label" for="paralel">Paralel</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="prestasi_utama"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasiUtama == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasiUtama == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenPrestasiUtama" name="prestasi_utama">
                    <label class="form-check-label" for="prestai_utama">Prestasi Utama</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="hafal"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cHafal == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cHafal == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenHafal" name="hafal">
                    <label class="form-check-label" for="hafal">Hafal</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="kip"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cKIP == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cKIP == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenKIP" name="kip">
                    <label class="form-check-label" for="kip">KIP</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="rataRata"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cRata == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cRata == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenRataRata" name="rataRata">
                    <label class="form-check-label" for="rataRata">Rata - Rata</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="prestasiPendukung1"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasi1 == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasi1 == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenPrestasiPendukung1" name="prestasiPendukung1">
                    <label class="form-check-label" for="prestasiPendukung1">Pendukung 1</label>
                    <?php endif; ?>

                </div>
                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="prestasiPendukung2"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasi2 == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cPrestasi2 == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenPrestasiPendukung2" name="prestasiPendukung2">
                    <label class="form-check-label" for="prestasiPendukung2">Pendukung 2</label>
                    <?php endif; ?>

                </div>

                <div class="form-check form-check-inline mt-3">
                    <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                    <input type="checkbox" class="form-check-input" id="verifikasi"
                        value="<?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cVerifikasi == 1 ? '1' : '0'); ?>" <?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->cVerifikasi == 1 ? 'checked' : ''); ?>

                    onchange="updateValue()">
                    <input type="hidden" id="hiddenVerifikasi" name="verifikasi">
                    <label class="form-check-label" for="verifikasi">
                        <?php if($verifikasiSementara[0]->relasi_ke_verifikasi->cVerifikasi == 1 && $namaVerificator != null): ?>
                        Sudah verifikasi Oleh : <?php echo e($namaVerificator['username']); ?>

                        <?php else: ?>
                        Sudah verifikasi Oleh : -
                        <?php endif; ?>
                    </label>
                    <?php endif; ?>
                </div>

                <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                <textarea class="mt-2" name="catatan" id="catatan" cols="30" rows="1" placeholder="Catatan"
                    oninput="updateValue()"><?php echo e($verifikasiSementara[0]->relasi_ke_verifikasi->catatan); ?></textarea>
                <?php endif; ?>

                <?php if($verifikasiSementara != null && !$verifikasiSementara->isEmpty()): ?>
                &nbsp;&nbsp;<button type="submit" class="btn btn-primary me-2" onclick="updateValue()">SIMPAN</button>
                <?php endif; ?>
            </form>
        </div>



    </div>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->no_wa); ?></p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">EMAIL AKTIF (EMAIL UTAMA DAN WAJIB GMAIL)
                                </h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->pekerjaan_ayah); ?>

                                </p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">AGAMA AYAH / WALI</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->agama_ayah); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT AYAH / WALI</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->alamat_ayah); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP AYAH / WALI</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->no_wa_ayah); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT EMAIL AYAH / WALI (CADANGAN 1)
                                    </h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ayah->email_ayah); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA IBU</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty() && !$hasilCari->isEmpty()): ?>
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
                                <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->pekerjaan_ibu); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">AGAMA IBU</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->agama_ibu); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT IBU</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->alamat_ibu); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP IBU</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->no_wa_ibu); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT EMAIL IBU (CADANGAN 2)</h6>
                                </div>
                                <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                <p class="tx-13"><?php echo e($hasilCari[0]->relasi_data_ibu->email_ibu); ?></p>
                                <?php else: ?>
                                <p>-</p>
                                <?php endif; ?>
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
                                    <td id="nilai_mtk_kls5_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_mtk_kls5_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_mtk_kls5_smt2">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_mtk_kls5_smt2 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_mtk_kls6_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_mtk_kls6_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>IPA/IPAS</th>
                                    <td id="nilai_ipa_kls5_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_ipa_kls5_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_ipa_kls5_smt2">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_ipa_kls5_smt2 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_ipa_kls6_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_ipa_kls6_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>B. INDONESIA</th>
                                    <td id="nilai_bi_kls5_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_bi_kls5_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_bi_kls5_smt2">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_bi_kls5_smt2 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                    <td id="nilai_bi_kls6_smt1">
                                        <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                                        <?php echo e($hasilCari[0]->relasi_nilai_rapor->nilai_bi_kls6_smt1 ?? '-'); ?>

                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rata-rata</th>
                                    <td class="align-center" id="rata_seluruh"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">PASS PHOTO</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">

                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <img align="center" <?php if($hasilCari !=null && !$hasilCari->isEmpty()): ?> <img align="center"
                                src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_pas_foto); ?>" width="350">
                            <?php else: ?>
                            <p>-</p> <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">AKTE KELAHIRAN</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_akte_kelahiran); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
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
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_bukti_nisn); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">SURAT KETERANGAN REKAPITULASI NILAI RAPOR</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sk_rekap_rapor); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">SURAT KETERANGAN KEABSAHAN DATA</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_keabsahan_data); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">SURAT KETERANGAN KELAKUAN BAIK</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sk_kelakuan_baik); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">BUKTI GABUNG GRUP WA</h6>
                    <br>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_bukti_gabung_grup); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- row -->


<br>
<div>
    <h4 class="mb-3 mb-md-0">BERKAS PERINGKAT PARALEL</h4>
</div>
<br>

<!-- BERKAS PERINGKAT PARALEL -->
<div class="row">
    <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">PERINGKAT KELAS PARALEL</h6>
                </div>
                <br>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">BANYAK ROMBEL KELAS 6</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->banyak_rombel_kls6); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">PERINGKAT KELAS PARALEL</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->peringkat_kls_paralel); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">SURAT KETERANGAN PERINGKAT PARALEL</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sk_peringkat_paralel); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- row -->


<br>
<div>
    <h4 class="mb-3 mb-md-0">BERKAS PRESTASI UTAMA</h4>
</div>
<br>

<!-- BERKAS PRESTASI UTAMA -->
<div class="row">
    <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">PRESTASI UTAMA</h6>
                    <br><br>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">BIDANG LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->bidang_lomba); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JENIS LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->jenis_lomba); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TINGKAT LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->tingkat_lomba); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->penyelenggara); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_penyelenggara); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JUARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->juara); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TAHUN</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->tahun); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_lomba); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">BUKTI PRESTASI</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sertif_prestasi); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- row -->

<br>
<div>
    <h4 class="mb-3 mb-md-0">BERKAS PRESTASI PENDUKUNG 1 & PRESTASI PENDUKUNG 2</h4>
</div>
<br>

<!-- BERKAS PRESTASI PENDUKUNG 1 & PRESTASI PENDUKUNG 2 -->
<div class="row">
    <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">PRESTASI PENDUKUNG 1 </h6>
                </div>
                <br><br>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">BIDANG LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->bidang_lomba_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JENIS LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->jenis_lomba_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TINGKAT LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->tingkat_lomba_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->penyelenggara_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_penyelenggara_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JUARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->juara_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TAHUN</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->tahun_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_lomba_1); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">PRESTASI PENDUKUNG 2 </h6>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">BIDANG LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->bidang_lomba_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JENIS LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->jenis_lomba_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TINGKAT LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->tingkat_lomba_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->penyelenggara_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA PENYELENGGARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_penyelenggara_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JUARA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->juara_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">TAHUN</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13"><?php echo e($hasilCari[0]->relasi_berkas_prestasi->tahun_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">NAMA LOMBA</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->nama_lomba_2); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">BUKTI PRESTASI PENDUKUNG 1</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sertif_prestasi1); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">BUKTI PRESTASI PENDUKUNG 2</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sertif_prestasi2); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- row -->

<br>
<div>
    <h4 class="mb-3 mb-md-0">BERKAS TAHFIDZ</h4>
</div>
<br>

<!-- BERKAS TAHFIDZ -->
<div class="row">
    <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">TAHFIDZ</h6>
                    <br>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal text-body mb-1">JUMLAH HAFAL QUR'AN</h6>
                            </div>
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <p class="tx-13">
                                <?php echo e($hasilCari[0]->relasi_berkas_prestasi->jumlah_hafal_quran); ?>

                            </p>
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">SURAT KETERANGAN REKAPITULASI HAFAL AL QUR'AN</h6>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_sk_rekap_hafal_quran); ?>"
                                width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


<br>
<div>
    <h4 class="mb-3 mb-md-0">BERKAS AFIRMASI</h4>
</div>
<br>

<!-- BERKAS AFIRMASI -->
<div class="row">
    <div class="col-lg-5 col-xl-5 grid-margin grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">(KIP) / (PKH) / (KKS) / (SKTM)</h6>
                    <br>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-full">
                        <div class="d-flex justify-content-between">
                            <?php if($hasilCari != null && !$hasilCari->isEmpty()): ?>
                            <img align="center" src="<?php echo e($hasilCari[0]->relasi_link_berkas->link_kip); ?>" width="600">
                            <?php else: ?>
                            <p>-</p>
                            <?php endif; ?>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/detail.blade.php ENDPATH**/ ?>