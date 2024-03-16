@extends('layout.master')

@section('header1')
    @include('layout.header1')
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Selamat Datang</h4>
                    <p>Silakan mengisi setiap form untuk melakukan pendaftaran</p>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
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
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NIK : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NISN : </h6>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NO KK : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">SEKOLAH/MADRASAH ASAL (SD/MI) : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT SEKOLAH/MADRASAH ASAL : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">JENIS KELAMIN : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TEMPAT LAHIR : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">TANGGAL LAHIR : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">ALAMAT : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NOMOR WHATSAPP : </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">DATA ORANG TUA / WALI CALON PESERTA DIDIK</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA AYAH : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NIK AYAH : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NO KK AYAH : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">STATUS : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">HUBUNGAN AYAH : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA IBU : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NIK IBU : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NO KK IBU : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">STATUS : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">HUBUNGAN IBU : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NAMA WALI : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NIK WALI : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">NO KK WALI : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">STATUS : </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">HUBUNGAN WALI : </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>

    <div class="row">
        <div class="col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">NILAI PENGETAHUAN RAPORT</h6>
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
                                    </td>
                                    <td id="nilai_mtk_kls5_smt2">
                                    </td>
                                    <td id="nilai_mtk_kls6_smt1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>IPA/IPAS</th>
                                    <td id="nilai_ipa_kls5_smt1">
                                    </td>
                                    <td id="nilai_ipa_kls5_smt2">
                                    </td>
                                    <td id="nilai_ipa_kls6_smt1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>B. INDONESIA</th>
                                    <td id="nilai_bi_kls5_smt1">
                                    </td>
                                    <td id="nilai_bi_kls5_smt2">
                                    </td>
                                    <td id="nilai_bi_kls6_smt1">
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
    </div> <!-- row -->

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS PAS PHOTO</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">PAS PHOTO</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS AKTA KELAHIRAN</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">AKTA KELAHIRAN</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS NISN</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">BUKTI NISN</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS KK CALON PESERTA DIDIK</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">KK CALON PESERTA DIDIK</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS KK AYAH KANDUNG</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">KK AYAH KANDUNG</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS KK IBU KANDUNG</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">KK IBU KANDUNG</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS KK WALI</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">KK WALI</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS SURAT KEABSAHAN DATA</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">SURAT KEABSAHAN DATA</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS SURAT KETERANGAN KELAKUAN BAIK</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">SURAT KETERANGAN KELAKUAN BAIK</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Berkas Bukti Screenshot Gabung Grup Whatsapp</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Bukti Screenshot Gabung Grup Whatsapp</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS SURAT KETERANGAN REKAPITULASI NILAI RAPORT</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">SURAT KETERANGAN REKAPITULASI NILAI RAPORT</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body scroll">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">BERKAS KIP / SKTM</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">KIP / SKTM</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
