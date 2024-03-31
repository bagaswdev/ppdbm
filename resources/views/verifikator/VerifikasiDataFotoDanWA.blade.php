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
                <h4>Halaman Verifikasi Data Foto, Grup WA & KIP</h4>
                <p>Lakukan proses verifikasi dengan teliti</p>

            </div>
        </div>
    </div>
</div> <!-- row -->


@if ($data)
<div class="row sticky-label">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <form action="{{ route('cariDataSiswaSesuaiId') }}" method="POST" class="forms-sample">
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
                            <input type="text" class="form-control" id="exampleInputUsername2" name="tb_data_siswa_id"
                                placeholder="Contoh: 2400101" value="{{ $data->tb_data_siswa_id }}">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="btn-icon-prepend"
                                    data-feather="search"></i> CARI</button>
            </form>
            <form action="{{ route('back') }}" method="POST" class="forms-sample mx-3">
                @csrf
                <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="back">
                <button type="submit" class="btn btn-danger btn-icon">
                    <i data-feather="arrow-left"></i>
                </button>
            </form>
            <form action="{{ route('next') }}" method="POST" class="forms-sample">
                @csrf
                <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="next">
                <button type="submit" class="btn btn-success btn-icon" id="next">
                    <i data-feather="arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body scroll">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0"><b>Upload FOTO, WA & KIP</b></h6>
                </div><br>
                <div class="d-flex flex-column">


                    @if($data && $data->foto && $data->foto->tb_data_foto_file)
                    <img src="{{ $data->foto->tb_data_foto_file }}" alt=""
                        style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                    @else
                    <p>-</p>
                    @endif

                </div>


                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Data Bukti Gabung Grup WA</h6>
                    </div><br>
                    <div class="d-flex flex-column">

                        @if($data && $data->relasi_ke_table_data_grup_wa &&
                        $data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_file)
                        <img src="{{ $data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_file }}" alt=""
                            style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                        @else
                        <p>-</p>
                        @endif
                    </div>
                </div>

                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Data KIP</h6>
                    </div><br>
                    <div class="d-flex flex-column">
                        @if($data && $data->kip && $data->kip->tb_data_kip_file)
                        <img src="{{ $data->kip->tb_data_kip_file }}" alt=""
                            style="display: block; max-height: 50%; max-width: 100%; margin: auto;">
                        @else
                        <p>TIdak mendaftar Jalur Afirmasi / KIP</p>
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
                    <h6 class="card-title mb-0">data inputan pendaftar</h6>
                </div><br>
                <form action="{{ route('simpanDataVerifikasiFotoWAKIP') }}" method="POST" class="forms-sample">
                    @csrf
                    {{-- VERIFIKASI FOTO --}}
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="row">

                                <div class="d-flex align-items-center border-bottom py-3">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            @if ($data && $data->tb_data_siswa_id)
                                            <h6 class="fw-normal text-body mb-1">No Pendaftaran: {{
                                                $data->tb_data_siswa_id
                                                }}</h6>
                                            @else
                                            <h6 class="fw-normal text-body mb-1">No Pendaftaran: -</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center border-bottom py-3 mb-4">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            @if ($data && $data->tb_data_siswa_nama)
                                            <h6 class="fw-normal text-body mb-1">Nama Peserta Didik : {{
                                                $data->tb_data_siswa_nama
                                                }}</h6>
                                            @else
                                            <h6 class="fw-normal text-body mb-1">Nama Peserta Didik : -</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-baseline mb-3 mt-4">
                                    <h6 class="card-title mb-0">PROSES VERIFIKASI FOTO</h6>
                                </div><br>

                                <label for="tb_data_ayah_kandung_status"
                                    class="col-md-3 col-form-label">Verifikasi:</label>
                                <div class="col-md-9 mt-2">

                                    <div class="form-check mb-3">
                                        @if ($data && $data->foto && $data->foto->tb_data_user_verifikator_id)
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                            name="tb_data_user_verifikator_id" value="1" checked>
                                        <label class="form-check-label" for="exampleCheck1">Sudah Di Verifikasi
                                            Oleh</label>
                                        <span class="badge rounded-pill bg-danger">{{
                                            $data->foto->fk_dari_table_data_user_verifikator->tb_data_user_verifikator_nama
                                            }}</span>
                                        @elseif ($data && $data->foto && $data->foto->tb_data_user_verifikator_id
                                        === null)
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                            name="tb_data_user_verifikator_id" value="1">
                                        <label class="form-check-label" for="exampleCheck1">Belum Di Verifikasi</label>
                                        <span class="badge rounded-pill bg-danger">-</span>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <label for="tb_data_ayah_kandung_status" class="col-md-3 col-form-label">Status:</label>
                            <div class="col-md-9 mt-2">
                                <div class="d-flex align-items-center">

                                    @if ($data->foto->tb_data_foto_status == "0")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_foto_status" id="tb_data_foto_status">
                                        <label class="form-check-label" for="tb_data_foto_status">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_foto_status" id="tb_data_foto_status" checked>
                                        <label class="form-check-label" for="tb_data_foto_status">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @elseif ($data->foto->tb_data_foto_status == "1")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_foto_status" id="tb_data_foto_status_lolos" checked>
                                        <label class="form-check-label" for="tb_data_foto_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_foto_status" id="tb_data_foto_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_foto_status_tidak_lolos">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_foto_status" id="tb_data_foto_status_lolos">
                                        <label class="form-check-label" for="tb_data_foto_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_foto_status" id="tb_data_foto_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_foto_status_tidak_lolos">
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
                                @if ($data && $data->foto && $data->foto->tb_data_foto_alasan)
                                <label for="tb_data_foto_alasan" class="col-md-3 col-form-label">Alasan:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="tb_data_foto_alasan"
                                        name="tb_data_foto_alasan" placeholder="Karena ..."
                                        value="{{ $data->foto->tb_data_foto_alasan }}">
                                </div>
                                @elseif ($data && $data->foto && $data->foto->tb_data_foto_alasan === null)
                                <label for="tb_data_foto_alasan" class="col-md-3 col-form-label">Alasan :</label>
                                <div class="col-md-9 mt-md-0 mt-2">
                                    <!-- Tambahkan kelas mt-md-0 di sini -->
                                    <input type="text" class="form-control" id="tb_data_foto_alasan"
                                        name="tb_data_foto_alasan" placeholder="Karena ..." value="">
                                </div>

                                @endif

                            </div>
                        </div>


                    </div>
                    {{-- AKHIR VERIFIKASI FOTO --}}

                    <br>

                    {{-- VERIFIKASI GRUP WA --}}

                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="row">

                                <div class="d-flex justify-content-between align-items-baseline mb-3 mt-4">
                                    <h6 class="card-title mb-0">PROSES VERIFIKASI GRUP WA</h6>
                                </div><br>

                                <label for="tb_data_ayah_kandung_status"
                                    class="col-md-3 col-form-label">Verifikasi:</label>
                                <div class="col-md-9 mt-2">

                                    <div class="form-check mb-3">
                                        @if ($data && $data->relasi_ke_table_data_grup_wa &&
                                        $data->relasi_ke_table_data_grup_wa->tb_data_user_verifikator_id)
                                        <input type="checkbox" class="form-check-input" value="1"
                                            id="tb_data_user_verifikator_id_verifikasi_grup_wa"
                                            name="tb_data_user_verifikator_id_verifikasi_grup_wa" checked>
                                        <label class="form-check-label"
                                            for="tb_data_user_verifikator_id_verifikasi_grup_wa">Sudah Di Verifikasi
                                            Oleh</label>
                                        <span class="badge rounded-pill bg-danger">{{
                                            $data->relasi_ke_table_data_grup_wa->fk_dari_table_data_user_verifikator->tb_data_user_verifikator_nama
                                            }}</span>
                                        @elseif ($data && $data->relasi_ke_table_data_grup_wa &&
                                        $data->relasi_ke_table_data_grup_wa->tb_data_user_verifikator_id === null)
                                        <input type="checkbox" class="form-check-input" value="1"
                                            id="tb_data_user_verifikator_id_verifikasi_grup_wa"
                                            name="tb_data_user_verifikator_id_verifikasi_grup_wa">
                                        <label class="form-check-label"
                                            for="tb_data_user_verifikator_id_verifikasi_grup_wa">Belum Di
                                            Verifikasi</label>
                                        <span class="badge rounded-pill bg-danger">-</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="tb_data_grup_wa" class="col-md-3 col-form-label">Status:</label>
                            <div class="col-md-9 mt-2">
                                <div class="d-flex align-items-center">


                                    @if ($data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_status == "0")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_lolos">
                                        <label class="form-check-label" for="tb_data_grup_wa_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_tidak_lolos"
                                            checked>
                                        <label class="form-check-label" for="tb_data_grup_wa_status_tidak_lolos">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @elseif ($data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_status == "1")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_lolos" checked>
                                        <label class="form-check-label" for="tb_data_grup_wa_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_grup_wa_status_tidak_lolos">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_lolos">
                                        <label class="form-check-label" for="tb_data_grup_wa_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0"
                                            name="tb_data_grup_wa_status" id="tb_data_grup_wa_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_grup_wa_status_tidak_lolos">
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
                                @if ($data && $data->relasi_ke_table_data_grup_wa &&
                                $data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_alasan)
                                <label for="tb_data_grup_wa_alasan" class="col-md-3 col-form-label">Alasan:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="tb_data_grup_wa_alasan"
                                        name="tb_data_grup_wa_alasan" placeholder="Karena ..."
                                        value="{{ $data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_alasan }}">
                                </div>
                                @elseif ($data && $data->relasi_ke_table_data_grup_wa &&
                                $data->relasi_ke_table_data_grup_wa->tb_data_grup_wa_alasan === null)
                                <label for="tb_data_grup_wa_alasan" class="col-md-3 col-form-label">Alasan :</label>
                                <div class="col-md-9 mt-md-0 mt-2">
                                    <!-- Tambahkan kelas mt-md-0 di sini -->
                                    <input type="text" class="form-control" id="tb_data_grup_wa_alasan"
                                        name="tb_data_grup_wa_alasan" placeholder="Karena ..." value="">
                                </div>

                                @endif

                            </div>
                        </div>


                    </div>

                    {{-- AKHIR VERIFIKASI GRUP WA --}}
                    <br>


                    {{-- KIP --}}

                    <div class="d-flex justify-content-between align-items-baseline mt-3">
                        <h6 class="card-title mb-0">VERIFIKASI DATA KIP</h6>
                    </div><br>

                    @if($data && $data->kip && $data->kip->tb_data_kip_file)
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="row">

                                <label for="tb_data_ayah_kandung_status"
                                    class="col-md-3 col-form-label">Verifikasi:</label>
                                <div class="col-md-9 mt-2">

                                    <div class="form-check mb-3">
                                        @if ($data && $data->kip &&
                                        $data->kip->tb_data_user_verifikator_id)
                                        <input type="checkbox" class="form-check-input" value="1"
                                            id="tb_data_user_verifikator_id_verifikasi_kip"
                                            name="tb_data_user_verifikator_id_verifikasi_kip" checked>
                                        <label class="form-check-label"
                                            for="tb_data_user_verifikator_id_verifikasi_kip">Sudah Di
                                            Verifikasi
                                            Oleh</label>
                                        <span class="badge rounded-pill bg-danger">{{
                                            $data->kip->fk_dari_table_data_user_verifikator->tb_data_user_verifikator_nama
                                            }}</span>
                                        @elseif ($data && $data->kip &&
                                        $data->kip->tb_data_user_verifikator_id === null)
                                        <input type="checkbox" class="form-check-input" value="1"
                                            id="tb_data_user_verifikator_id_verifikasi_kip"
                                            name="tb_data_user_verifikator_id_verifikasi_kip">
                                        <label class="form-check-label"
                                            for="tb_data_user_verifikator_id_verifikasi_kip">Belum Di
                                            Verifikasi</label>
                                        <span class="badge rounded-pill bg-danger">-</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="tb_data_foto_grup_wa" class="col-md-3 col-form-label">Status:</label>
                            <div class="col-md-9 mt-2">
                                <div class="d-flex align-items-center">


                                    @if ($data->kip->tb_data_kip_status == "0")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1" name="tb_data_kip_status"
                                            id="tb_data_kip_status_lolos">
                                        <label class="form-check-label" for="tb_data_kip_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0" name="tb_data_kip_status"
                                            id="tb_data_kip_status_tidak_lolos" checked>
                                        <label class="form-check-label" for="tb_data_kip_status_tidak_lolos">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @elseif ($data->kip->tb_data_kip_status == "1")
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1" name="tb_data_kip_status"
                                            id="tb_data_foto_grup_wa_status_lolos" checked>
                                        <label class="form-check-label" for="tb_data_foto_grup_wa_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0" name="tb_data_kip_status"
                                            id="tb_data_kip_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_kip_status_tidak_lolos">
                                            TIDAK LOLOS
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="1" name="tb_data_kip_status"
                                            id="tb_data_kip_status_lolos">
                                        <label class="form-check-label" for="tb_data_kip_status_lolos">
                                            LOLOS
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" value="0" name="tb_data_kip_status"
                                            id="tb_data_kip_status_tidak_lolos">
                                        <label class="form-check-label" for="tb_data_kip_status_tidak_lolos">
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
                                @if ($data && $data->kip &&
                                $data->kip->tb_data_kip_alasan)
                                <label for="tb_data_kip_alasan" class="col-md-3 col-form-label">Alasan:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="tb_data_kips_alasan"
                                        name="tb_data_kip_alasan" placeholder="Karena ..."
                                        value="{{ $data->kip->tb_data_kip_alasan }}">
                                </div>
                                @elseif ($data && $data->kip &&
                                $data->kip->tb_data_kip_alasan === null)
                                <label for="tb_data_kip_alasan" class="col-md-3 col-form-label">Alasan :</label>
                                <div class="col-md-9 mt-md-0 mt-2">
                                    <!-- Tambahkan kelas mt-md-0 di sini -->
                                    <input type="text" class="form-control" id="tb_data_kip_alasan"
                                        name="tb_data_kip_alasan" placeholder="Karena ..." value="">
                                </div>

                                @endif

                            </div>
                        </div>


                    </div>
                    @else
                    <p>TIdak mendaftar Jalur Afirmasi / KIP</p>
                    @endif



                    <input type="hidden" value="{{ $data->tb_data_siswa_id }}" name="tb_data_siswa_id">
                    {{-- BUTTON SUBMIT --}}
                    <button type="submit" class="btn btn-primary me-2 mt-6 w-100">SIMPAN DATA VERIFIKASI</button>

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
                <a href="{{ route('VerifikasiDataFotoDanWA') }}" class="btn btn-primary me-2 mt-3 w-100">KEMBALI
                    VERIFIKASI</a>

            </div>
        </div>
    </div>
</div> <!-- row -->


@endif





@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush