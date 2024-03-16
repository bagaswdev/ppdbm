@extends('layout.master2')

@section('content')


<div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-9 col-xl-9 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pe-md-0">
                                <div class="auth-side-wrapper"
                                    style="background-image: url({{ asset('bgweb/bgm1new.jpg') }})">
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-0">
                                <div class="auth-form-wrapper px-4 py-5">

                                    <div class="alert alert-primary mb-5" role="alert">
                                        <i data-feather="alert-circle"></i>
                                        Anda Berhasil Login Sebagai "John Doe" -
                                        <a href="{{ route('logout') }}" class="badge bg-danger"> Klik Di sini Untuk
                                            Logout Aplikasi
                                            <i class="btn-icon-append" data-feather="log-out"></i>
                                        </a>
                                    </div>
                                    <a href="#" class="noble-ui-logo d-block mb-2">PEMILIHAN JALUR PPDBM<span> MTsN 1
                                            Kota
                                            Malang</span></a>
                                    <span class="badge bg-warning mb-4">Langkah 1</span>

                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{ session('error') }}
                                    </div>
                                    @endif

                                    <form action="{{ route('PemilihanJalurOpsiReguler') }}" method="POST"
                                        class="forms-sample">
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @csrf

                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" id="jalur_pendaftaran"
                                                name="pemilihan_jalur">
                                                <option selected="" value="">PILIH JALUR PENDAFTARAN DISINI</option>
                                                <option value="reguler-pertanyaan">JALUR REGULER</option>
                                                <option value="afirmasi">JALUR AFRIMASI</option>
                                            </select>
                                            @error('pemilihan_jalur')
                                            <div class="alert alert-danger alert-dismissible mt-1" role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @enderror

                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary me-2 mb-2 mb-md-0 mt-5">LANJUT
                                                    LANGKAH SELANJUTNYA</button>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection