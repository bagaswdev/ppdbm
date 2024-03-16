@extends('layout.master2')

@section('content')
{{-- <div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-2 pe-md-0">
                        <div class="auth-side-wrapper"
                            style="background-image: url(https://www.nobleui.com/laravel/template/demo1/assets/images/photos/img6.jpg)">

                        </div>
                    </div>

                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">VERIFIKASI <span>PPDBM</span></a>
                            <h5 class="text-muted fw-normal mb-4">Silahkan Login Terlebih Dahulu.</h5>
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif
                            <form action="{{ route('otentikasi') }}" method="POST" class="forms-sample">
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
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="email"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        autocomplete="current-password" placeholder="Password" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">Login</button>
                                    <!-- <a href="{{ url('/') }}" class="btn btn-primary me-2 mb-2 mb-md-0">Login</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


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
                                <div class="auth-form-wrapper px-6 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">PPDBM<span> MTsN 1 Kota
                                            Malang</span></a>
                                    <h5 class="text-muted fw-normal mb-4">LOGIN AKUN </h5>

                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{ session('error') }}
                                    </div>
                                    @endif

                                    <form action="{{ route('dashboard') }}" method="POST" class="forms-sample">
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

                                        <div class="mb-3">
                                            <label for="nik_peserta_didik" class="form-label">NIK Peserta Didik</label>
                                            <input type="text" class="form-control" id="nik_peserta_didik"
                                                name="nik_peserta_didik" autocomplete="NIK Calon Siswa"
                                                placeholder="3508672898998881">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                autocomplete="current-password" placeholder="Password">
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">LOGIN
                                                AKUN</button>
                                        </div>
                                        <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Belum
                                            mempunyai
                                            akun? KLIK DISINI
                                            UNTUK MEMBUAT AKUN</a>
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