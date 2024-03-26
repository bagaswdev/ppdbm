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
                <h4>Halaman Verifikasi Data Foto dan Grup WA</h4>
                <p>Lakukan proses verifikasi dengan teliti</p>
            </div>
        </div>
    </div>
</div> <!-- row -->


<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Data Bukti Gabung Grup WA</h6>
                </div><br>
                <div class="d-flex flex-column">
                    {{-- <div class="card-body"> --}}
                        <img src="https://storage.tally.so/5668c175-0122-4534-bcdb-5b34474b6fc0/Cuplikan-layar-GRUP-WA.png"
                            alt="" style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                        {{--
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">VERIFIKASI GRUP WA</h6>
                </div><br>
                <div class="d-flex flex-column">
                    <div class="row mt-4">
                        <label for="tb_data_ayah_kandung_status" class="col-md-2 col-form-label">Status:</label>
                        <div class="col-md-9 mt-2">
                            <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="tb_data_ayah_kandung_status"
                                        id="tb_data_ayah_kandung_status_hidup">
                                    <label class="form-check-label" for="tb_data_ayah_kandung_status_hidup">
                                        LOLOS
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="tb_data_ayah_kandung_status"
                                        id="tb_data_ayah_kandung_status_meninggal">
                                    <label class="form-check-label" for="tb_data_ayah_kandung_status_meninggal">
                                        TIDAK LOLOS
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <label for="tb_data_ayah_kandung_status" class="col-md-2 col-form-label">Status:</label>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Remember me
                            </label>
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