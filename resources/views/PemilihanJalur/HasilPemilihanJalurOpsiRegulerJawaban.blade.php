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

                                    <a href="#" class="noble-ui-logo d-block mb-2">Hasil Pengecekan<span>
                                            Data</span></a>


                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{ session('error') }}
                                    </div>
                                    @endif

                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif


                                    <div class="mb-3">


                                        <p>Mohon maaf, datamu tidak terdaftar di jalur pendaftaran prestasi
                                            gelombang sebelumnya. Silakan klik tombol di bawah ini untuk memilih
                                            jalur yang sesuai.</p>



                                        <div>

                                            <a href="{{ route('PemilihanJalur') }}" class="badge bg-primary mt-4"> KLIK
                                                DISINI UNTUK
                                                MEMILIH JALUR REGULER
                                                <i class="btn-icon-append" data-feather="link"></i>
                                            </a>
                                        </div>

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