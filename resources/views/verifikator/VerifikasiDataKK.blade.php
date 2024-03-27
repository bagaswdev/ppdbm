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
                <h4>Halaman Verifikasi Data KK</h4>
                <p>Lakukan proses verifikasi dengan teliti</p>
            </div>
        </div>
    </div>
</div> <!-- row -->

<div class="row sticky-label">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <form action="">
                <div class="card-body ">
                    <div class="row justify-content-center">
                        <label for="exampleInputUsername2" class="col-md-2 col-form-label text-center">Cari No
                            Peserta</label>
                        <div class="col-md-4 btn-block">
                            <input type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="Contoh: 2400101">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="btn-icon-prepend"
                                    data-feather="search"></i> CARI</button>
                            <button type="button" class="btn btn-danger btn-icon">
                                <i data-feather="arrow-left"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-icon">
                                <i data-feather="arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0"><b>Hasil Upload KK</b></h6>
                </div>
                <div class="mt-4">
                    <div class="d-flex flex-column">
                        <img src="https://storage.tally.so/5668c175-0122-4534-bcdb-5b34474b6fc0/Cuplikan-layar-GRUP-WA.png"
                            alt="" style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">DATA INPUTAN PENDAFTAR</h6>
                </div><br>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column">
                        <div class="row">

                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">No Peserta : 1234</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">NIK : 00000000000000</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">Nama Peserta Didik : John Doe</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">Tempat Lahir : Malang</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3 mb-4">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-normal text-body mb-1">Tanggal Lahir : 1 Januari 2024</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-baseline mb-3 mt-4">
                                <h6 class="card-title mb-0">PROSES VERIFIKASI</h6>
                            </div><br>

                            <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">Verifikasi:</label>
                            <div class="col-md-9 mt-2">

                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Verifikiasi Sekarang</label>
                                    <span class="badge rounded-pill bg-danger"> Belum diverifikasi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">Status:</label>
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

                    <div class="d-flex flex-column">
                        <div class="row align-items-center">
                            <!-- Tambahkan kelas align-items-center di sini -->
                            <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">Alasan
                                :</label>
                            <div class="col-md-9 mt-md-0 mt-2">
                                <!-- Tambahkan kelas mt-md-0 di sini -->
                                <input type="text" class="form-control" id="tb_data_ibu_kandung_nama"
                                    name="tb_data_ibu_kandung_nama" placeholder="Karena ...">
                            </div>
                        </div>
                    </div>


                </div>

                {{-- Pembenahan dari verifikator --}}
                <div class="d-flex justify-content-between align-items-baseline mt-6 mb-2">
                    <h6 class="card-title mb-0">PEMBENAHAN DARI VERIFIKATOR</h6>
                </div>

                <div class="d-flex flex-column my-3">
                    <div class="row align-items-center">
                        <!-- Tambahkan kelas align-items-center di sini -->
                        <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">NIK
                        </label>
                        <div class="col-md-9 mt-md-0 mt-2">
                            <!-- Tambahkan kelas mt-md-0 di sini -->
                            <input type="text" class="form-control" id="tb_data_ibu_kandung_nama"
                                name="tb_data_ibu_kandung_nama" placeholder="Pembenahan">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column my-3">
                    <div class="row align-items-center">
                        <!-- Tambahkan kelas align-items-center di sini -->
                        <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">Nama
                        </label>
                        <div class="col-md-9 mt-md-0 mt-2">
                            <!-- Tambahkan kelas mt-md-0 di sini -->
                            <input type="text" class="form-control" id="tb_data_ibu_kandung_nama"
                                name="tb_data_ibu_kandung_nama" placeholder="Pembenahan">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column my-3">
                    <div class="row align-items-center">
                        <!-- Tambahkan kelas align-items-center di sini -->
                        <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">TTL
                        </label>
                        <div class="col-md-9 mt-md-0 mt-2">
                            <!-- Tambahkan kelas mt-md-0 di sini -->
                            <input type="date" class="form-control" id="tb_data_ibu_kandung_nama"
                                name="tb_data_ibu_kandung_nama" placeholder="Pembenahan">
                        </div>
                    </div>
                </div>




                {{-- BUTTON SUBMIT --}}
                <button type="submit" class="btn btn-primary me-2 mt-6 w-100">SIMPAN PROSES VERIFIKASI</button>
            </div>
        </div>
    </div> <!-- row -->
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush