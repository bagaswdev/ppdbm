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
    <div class="col-md-12 col-xl-12 stretch-card">
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
                            <h4 class="mb-4">Isilah Form Data Ibu Kandung Di bawah ini</h4>

                            <div class="row mt-4">
                                <label for="tb_data_ibu_kandung_nama" class="col-md-2 col-form-label">Nama ibu
                                    Kandung:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tb_data_ibu_kandung_nama"
                                        name="tb_data_ibu_kandung_nama" placeholder="Dewi">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="tb_data_ibu_kandung_nik" class="col-md-2 col-form-label">NIK ibu
                                    Kandung:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tb_data_ibu_kandung_nik"
                                        name="tb_data_ibu_kandung_nik" placeholder="34509089983938">
                                </div>
                            </div>



                            <div class="row mt-4">
                                <label for="tb_data_ibu_kandung_no_kk" class="col-md-2 col-form-label">NO KK
                                    ibu Kandung:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tb_data_ibu_kandung_no_kk"
                                        name="tb_data_ibu_kandung_no_kk" placeholder="35089900898989898">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="tb_data_ibu_kandung_status" class="col-md-2 col-form-label">Status:</label>
                                <div class="col-md-9 mt-2">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input"
                                                name="tb_data_ibu_kandung_status" id="tb_data_ibu_kandung_status_hidup">
                                            <label class="form-check-label" for="tb_data_ibu_kandung_status_hidup">
                                                Hidup
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input"
                                                name="tb_data_ibu_kandung_status"
                                                id="tb_data_ibu_kandung_status_meninggal">
                                            <label class="form-check-label" for="tb_data_ibu_kandung_status_meninggal">
                                                Meninggal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="tb_data_ibu_kandung_status"
                                    class="col-md-2 col-form-label">Hubungan:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tb_data_ibu_kandung_status"
                                        name="tb_data_ibu_kandung_status" value="Ibu Kandung" @disabled(true)>
                                </div>
                            </div>



                            <div class="d-flex justify-content-between mt-6">
                                <div class="text-start mt-4">
                                    <button type="submit" class="btn btn-success me-2 mb-2 mb-md-0">LIHAT LANGKAH
                                        SEBELUMNYA</button>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">SIMPAN & LANJUT
                                        LANGKAH SELANJUTNYA</button>
                                </div>
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