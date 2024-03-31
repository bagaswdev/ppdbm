@extends('layout.masterVerifikasi')

@section('headerVerifikasi')
    @include('layout.headerVerifikasi')
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Halaman Verifikasi Data Kelakuan</h4>
                    <p>Lakukan proses verifikasi dengan teliti</p>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    @if ($data)
        <div class="row sticky-label">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <form action="{{ route('KelakuanCariDataSiswaSesuaiId') }}" method="POST" class="forms-sample">
                        @csrf
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <label for="exampleInputUsername2" class="col-md-2 col-form-label text-center">Cari No
                                    Peserta</label>
                                <div class="col-md-4 btn-block">
                                    <input type="text" class="form-control" id="exampleInputUsername2"
                                        name="tb_data_siswa_id" placeholder="Contoh: 2400101"
                                        value="{{ $data->tb_data_siswa_id }}">
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="btn-icon-prepend"
                                            data-feather="search"></i> CARI</button>

                    </form>
                    <form action="{{ route('KelakuanBack') }}" method="POST" class="forms-sample mx-3">
                        @csrf
                        <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="KelakuanBack">
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="arrow-left"></i>
                        </button>
                    </form>
                    <form action="{{ route('KelakuanNext') }}" method="POST" class="forms-sample">
                        @csrf
                        <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="KelakuanNext">
                        <button type="submit" class="btn btn-success btn-icon" id="KelakuanNext">
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
                            <h6 class="card-title mb-0"><b>Hasil Upload Kelakuan</b></h6>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex flex-column">

                                @if ($data && $data->relasi_ke_table_kelakuan && $data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_file)
                                    <img src="{{ $data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_file }}"
                                        alt=""
                                        style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                                @else
                                    <p>-</p>
                                @endif

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
                        <form action="{{ route('simpanDataVerifikasiKelakuan') }}" method="POST" class="forms-sample">
                            @csrf

                            <div class="d-flex flex-column">
                                <div class="d-flex flex-column">
                                    <div class="row">

                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">No Pendaftaran :
                                                        {{ $data->tb_data_siswa_id }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">Nama Peserta Didik :
                                                        {{ $data->tb_data_siswa_nama }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">Tempat Lahir :
                                                        {{ $data->tb_data_siswa_tempat_lahir }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">Tanggal Lahir :
                                                        {{ $data->tb_data_siswa_tanggal_lahir ?? 'Tidak mengisi' }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom py-3 mb-4">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">Alamay :
                                                        {{ $data->tb_data_siswa_alamat }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom py-3 mb-4">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">Sekolah Asal :
                                                        {{ $data->tb_data_siswa_sekolah_asal }}</h6>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-center border-bottom py-3 mb-4">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="fw-normal text-body mb-1">NISN :
                                                        {{ $data->tb_data_siswa_nisn }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-baseline mb-3 mt-4">
                                            <h6 class="card-title mb-0">PROSES VERIFIKASI</h6>
                                        </div><br>

                                        <label for="tb_data_ayah_kandung_status"
                                            class="col-md-3 col-form-label">Verifikasi:</label>
                                        <div class="col-md-9 mt-2">

                                            <div class="form-check mb-3">
                                                @if ($data && $data->relasi_ke_table_kelakuan && $data->relasi_ke_table_kelakuan->tb_data_user_verifikator_id)
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                        name="tb_data_user_verifikator_id" value="1" checked>
                                                    <label class="form-check-label" for="exampleCheck1">Sudah Di
                                                        Verifikasi
                                                        Oleh</label>
                                                    <span
                                                        class="badge rounded-pill bg-danger">{{ $data->relasi_ke_table_kelakuan->fk_dari_table_data_user_verifikator->tb_data_user_verifikator_nama }}</span>
                                                @elseif ($data && $data->relasi_ke_table_kelakuan && $data->relasi_ke_table_kelakuan->tb_data_user_verifikator_id === null)
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                        name="tb_data_user_verifikator_id" value="1">
                                                    <label class="form-check-label" for="exampleCheck1">Belum Di
                                                        Verifikasi</label>
                                                    <span class="badge rounded-pill bg-danger">-</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="tb_data_akta_status" class="col-md-3 col-form-label">Status:</label>
                                    <div class="col-md-9 mt-2">
                                        <div class="d-flex align-items-center">

                                            @if ($data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_status == '0')
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="1"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_kelakuan_baik_status">
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status">
                                                        LOLOS
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="0"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_kelakuan_baik_status" checked>
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status">
                                                        TIDAK LOLOS
                                                    </label>
                                                </div>
                                            @elseif ($data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_status == '1')
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="1"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_kelakuan_baik_status" checked>
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status">
                                                        LOLOS
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="0"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_nisn_status_tidak_lolos">
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status">
                                                        TIDAK LOLOS
                                                    </label>
                                                </div>
                                            @else
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="1"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_kelakuan_baik_status_l">
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status_l">
                                                        LOLOS
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" value="0"
                                                        name="tb_data_kelakuan_baik_status"
                                                        id="tb_data_kelakuan_baik_status_tl">
                                                    <label class="form-check-label" for="tb_data_kelakuan_baik_status_tl">
                                                        TIDAK LOLOS
                                                    </label>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <div class="row align-items-center">
                                        <!-- Tambahkan kelas align-items-center di sini -->
                                        @if ($data && $data->relasi_ke_table_kelakuan && $data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_alasan)
                                            <label for="tb_data_nisn_alasan"
                                                class="col-md-3 col-form-label">Alasan:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    id="tb_data_kelakuan_baik_alasan" name="tb_data_kelakuan_baik_alasan"
                                                    placeholder="Karena ..."
                                                    value="{{ $data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_alasan }}">
                                            </div>
                                        @elseif ($data && $data->relasi_ke_table_kelakuan && $data->relasi_ke_table_kelakuan->tb_data_kelakuan_baik_alasan === null)
                                            <label for="tb_data_kelakuan_baik_alasan"
                                                class="col-md-3 col-form-label">Alasan
                                                :</label>
                                            <div class="col-md-9 mt-md-0 mt-2">
                                                <!-- Tambahkan kelas mt-md-0 di sini -->
                                                <input type="text" class="form-control"
                                                    id="tb_data_kelakuan_baik_alasan" name="tb_data_kelakuan_baik_alasan"
                                                    placeholder="Karena ..." value="">
                                            </div>
                                        @endif

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
                                    <label for="tb_data_siswa_sekolah_asal" class="col-md-3 col-form-label">Sekolah Asal
                                    </label>
                                    <div class="col-md-9 mt-md-0 mt-2">
                                        <!-- Tambahkan kelas mt-md-0 di sini -->
                                        <input type="text" class="form-control" id="tb_data_siswa_sekolah_asal"
                                            name="tb_data_siswa_sekolah_asal" placeholder="Pembenahan">
                                    </div>
                                </div>
                            </div>





                            {{-- BUTTON SUBMIT --}}
                            <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="tb_data_siswa_id">
                            <button type="submit" class="btn btn-primary me-2 mt-6 w-100">SIMPAN PROSES
                                VERIFIKASI</button>

                        </form>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    @else
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4>Maaf, No Pendaftar Tidak Ada</h4>
                        <a href="{{ route('VerifikasiDataKelakuan') }}" class="btn btn-primary me-2 mt-3 w-100">KEMBALI
                            VERIFIKASI</a>

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
