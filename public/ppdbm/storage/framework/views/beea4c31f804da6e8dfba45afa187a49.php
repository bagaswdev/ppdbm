<!DOCTYPE html>
<!--
Template Name: NobleUI - Laravel Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_laravel
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

    <title>PPDBM - MTsN 1 KOTA MALANG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- CSRF Token -->
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <style>
        /* Gaya CSS untuk membuat formulir menjadi inline */
        form {
            display: inline-block;
            margin-right: 10px;
            /* Atur margin kanan antara formulir */
        }

        .position-fixed {
            z-index: 1000;
            margin-top: -1%;
        }

        .dropdown {
            z-index: 1000;
        }
    </style>

    <link rel="shortcut icon" href="<?php echo e(asset('/favicon.ico')); ?>">

    <!-- plugin css -->
    <link href="<?php echo e(asset('assets/fonts/feather-font/css/iconfont.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <!-- end plugin css -->

    <?php echo $__env->yieldPushContent('plugin-styles'); ?>

    <!-- common css -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
    <!-- end common css -->

    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body data-base-url="<?php echo e(url('/')); ?>">

    <script src="<?php echo e(asset('assets/js/spinner.js')); ?>"></script>

    <div class="main-wrapper" id="app">
        <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">

            <?php echo $__env->yieldContent('header1'); ?>
            <?php echo $__env->yieldContent('header2'); ?>

            
            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <!-- base js -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
    <?php echo $__env->yieldPushContent('plugin-scripts'); ?>
    <!-- end plugin js -->

    <!-- common js -->
    <script src="<?php echo e(asset('assets/js/template.js')); ?>"></script>
    <!-- end common js -->


    <script>
        $(document).ready(function() {
            $('#customCheck').click(function() {
                $(this).prop('checked', !$(this).prop('checked'));
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            calculateAverage('nilai_mtk_kls5_smt1', 'nilai_mtk_kls5_smt2', 'nilai_mtk_kls6_smt1', 'rata_seluruh');
            calculateAverage('nilai_ipa_kls5_smt1', 'nilai_ipa_kls5_smt2', 'nilai_ipa_kls6_smt1', 'rata_seluruh');
            calculateAverage('nilai_bi_kls5_smt1', 'nilai_bi_kls5_smt2', 'nilai_bi_kls6_smt1', 'rata_seluruh');
        });

        function calculateAverage(id1, id2, id3, resultId) {
            var nilai1 = parseFloat($('#' + id1).text()) || 0;
            var nilai2 = parseFloat($('#' + id2).text()) || 0;
            var nilai3 = parseFloat($('#' + id3).text()) || 0;

            var rataRata = (nilai1 + nilai2 + nilai3) / 3;
            $('#' + resultId).text(rataRata.toFixed(2));
        }
    </script>

    <script>
        function updateValue() {
                var checkboxFoto = document.getElementById('pas_foto');
                var hiddenInputFoto = document.getElementById('pas_fotoh');

                var checkboxAkte = document.getElementById('akte');
                var hiddenInputAkte = document.getElementById('hiddenAkte');

                var checkboxNisn = document.getElementById('nisn');
                var hiddenInputNisn = document.getElementById('hiddenNisn');

                var checkboxRapot = document.getElementById('rapot');
                var hiddenInputRapot = document.getElementById('hiddenRapot');

                var checkboxAbsah = document.getElementById('absah');
                var hiddenInputAbsah = document.getElementById('hiddenAbsah');

                var checkboxKelakuan = document.getElementById('kelakuan');
                var hiddenInputKelakuan = document.getElementById('hiddenKelakuan');

                var checkboxGrupWA = document.getElementById('grupWA');
                var hiddenInputGrupWA = document.getElementById('hiddenGrupWA');

                var checkboxParalel = document.getElementById('paralel');
                var hiddenInputParalel = document.getElementById('hiddenParalel');

                var checkboxPrestasiUtama = document.getElementById('prestasi_utama');
                var hiddenInputPrestasiUtama = document.getElementById('hiddenPrestasiUtama');

                var checkboxHafal = document.getElementById('hafal');
                var hiddenInputHafal = document.getElementById('hiddenHafal');

                var checkboxKIP = document.getElementById('kip');
                var hiddenInputKIP = document.getElementById('hiddenKIP');

                var checkboxRataRata = document.getElementById('rataRata');
                var hiddenInputRataRata = document.getElementById('hiddenRataRata');

                var checkboxPrestasiPendukung1 = document.getElementById('prestasiPendukung1');
                var hiddenInputPrestasiPendukung1 = document.getElementById('hiddenPrestasiPendukung1');

                var checkboxPrestasiPendukung2 = document.getElementById('prestasiPendukung2');
                var hiddenInputPrestasiPendukung2 = document.getElementById('hiddenPrestasiPendukung2');

                var checkboxVerifikasi = document.getElementById('verifikasi');
                var hiddenInputVerifikasi = document.getElementById('hiddenVerifikasi');

                // ...

                if (checkboxFoto.checked) {
                    hiddenInputFoto.value = 1;
                } else {
                    hiddenInputFoto.value = 0;
                }

                if (checkboxAkte.checked) {
                    hiddenInputAkte.value = 1;
                } else {
                    hiddenInputAkte.value = 0;
                }

                if (checkboxNisn.checked) {
                    hiddenInputNisn.value = 1;
                } else {
                    hiddenInputNisn.value = 0;
                }

                if (checkboxRapot.checked) {
                    hiddenInputRapot.value = 1;
                } else {
                    hiddenInputRapot.value = 0;
                }

                if (checkboxAbsah.checked) {
                    hiddenInputAbsah.value = 1;
                } else {
                    hiddenInputAbsah.value = 0;
                }

                if (checkboxKelakuan.checked) {
                    hiddenInputKelakuan.value = 1;
                } else {
                    hiddenInputKelakuan.value = 0;
                }

                if (checkboxGrupWA.checked) {
                    hiddenInputGrupWA.value = 1;
                } else {
                    hiddenInputGrupWA.value = 0;
                }

                if (checkboxParalel.checked) {
                    hiddenInputParalel.value = 1;
                } else {
                    hiddenInputParalel.value = 0;
                }

                if (checkboxPrestasiUtama.checked) {
                    hiddenInputPrestasiUtama.value = 1;
                } else {
                    hiddenInputPrestasiUtama.value = 0;
                }

                if (checkboxHafal.checked) {
                    hiddenInputHafal.value = 1;
                } else {
                    hiddenInputHafal.value = 0;
                }

                if (checkboxKIP.checked) {
                    hiddenInputKIP.value = 1;
                } else {
                    hiddenInputKIP.value = 0;
                }

                if (checkboxRataRata.checked) {
                    hiddenInputRataRata.value = 1;
                } else {
                    hiddenInputRataRata.value = 0;
                }

                if (checkboxPrestasiPendukung1.checked) {
                    hiddenInputPrestasiPendukung1.value = 1;
                } else {
                    hiddenInputPrestasiPendukung1.value = 0;
                }

                if (checkboxPrestasiPendukung2.checked) {
                    hiddenInputPrestasiPendukung2.value = 1;
                } else {
                    hiddenInputPrestasiPendukung2.value = 0;
                }

                if (checkboxVerifikasi.checked) {
                    hiddenInputVerifikasi.value = 1;
                } else {
                    hiddenInputVerifikasi.value = 0;
                }

            }
    </script>


    <?php echo $__env->yieldPushContent('custom-scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\ppdb\resources\views/layout/master.blade.php ENDPATH**/ ?>