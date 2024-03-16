@extends('layout.master')

@section('header1')
    @include('layout.header1')
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">


        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">

                        <form action="#" method="POST">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf

                            <div class="card-body">
                                <h4 class="mb-4">Isilah Form Data Calon Peserta Didik Di bawah ini</h4>

                                <div class="row mt-4">
                                    <label for="nik" class="col-md-2 col-form-label">NIK Calon Peserta Didik:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="nik" name="tb_data_siswa_nik"
                                            placeholder="3507621909009990">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_nama" class="col-md-2 col-form-label">Nama Calon Peserta
                                        Didik:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_nama"
                                            name="tb_data_siswa_nama" placeholder="John Doe">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_nisn" class="col-md-2 col-form-label">NISN Calon Peserta
                                        Didik:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_nisn"
                                            name="tb_data_siswa_nisn" placeholder="09090909">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_no_kk" class="col-md-2 col-form-label">NO KK Calon Peserta
                                        Didik:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_no_kk"
                                            name="tb_data_siswa_no_kk" placeholder="35089900898989898">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_sekolah_asal" class="col-md-2 col-form-label">Sekolah
                                        Asal:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_sekolah_asal"
                                            name="tb_data_siswa_sekolah_asal" placeholder="35089900898989898">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_alamat_sekolah_asal" class="col-md-2 col-form-label">Alamat
                                        Sekolah
                                        Asal:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_alamat_sekolah_asal"
                                            name="tb_data_siswa_alamat_sekolah_asal" placeholder="35089900898989898">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_jenis_kelamin" class="col-md-2 col-form-label">Jenis
                                        Kelamin:</label>
                                    <div class="col-md-9 mt-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"
                                                    name="tb_data_siswa_jenis_kelamin"
                                                    id="tb_data_siswa_jenis_kelamin_laki_laki">
                                                <label class="form-check-label" for="tb_data_siswa_jenis_kelamin_laki_laki">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"
                                                    name="tb_data_siswa_jenis_kelamin"
                                                    id="tb_data_siswa_jenis_kelamin_perempuan">
                                                <label class="form-check-label" for="tb_data_siswa_jenis_kelamin_perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_tempat_lahir" class="col-md-2 col-form-label">Tempat
                                        Lahir:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_tempat_lahir"
                                            name="tb_data_siswa_tempat_lahir" placeholder="Malang">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_tanggal_lahir" class="col-md-2 col-form-label">Tanggal
                                        Lahir:</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" id="tb_data_siswa_tanggal_lahir"
                                            name="tb_data_siswa_tanggal_lahir" placeholder="Malang">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_alamat" class="col-md-2 col-form-label">Alamat Calon Peserta
                                        Didik:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="tb_data_siswa_alamat"
                                            name="tb_data_siswa_alamat" placeholder="Malang">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <label for="tb_data_siswa_wa" class="col-md-2 col-form-label">WhatsApp:</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" id="tb_data_siswa_wa"
                                            name="tb_data_siswa_wa" placeholder="082345678909">
                                    </div>
                                </div>


                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">SIMPAN &
                                        LANJUT LANGKAH SELANJUTNYA</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->




@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
