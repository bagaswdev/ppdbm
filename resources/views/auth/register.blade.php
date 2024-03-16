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
                                <div class="auth-form-wrapper px-6 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">PPDBM<span> MTsN 1 Kota
                                            Malang</span></a>
                                    <h5 class="text-muted fw-normal mb-4">Buat akun peserta didik untuk daftar PPDBM
                                    </h5>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form action="{{ route('ProsesDaftarAkun') }}" method="POST" class="forms-sample">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="tb_data_user_nik" class="form-label">NIK Peserta Didik</label>
                                            <input type="text" class="form-control @error('tb_data_user_nik')
                                    is-invalid
                                @enderror" value="{{ old('tb_data_user_nik') }}" id=" tb_data_user_nik"
                                                autocomplete="NIK Peserta Didik" placeholder="3508672898998881"
                                                name="tb_data_user_nik">
                                            @error('tb_data_user_nik')
                                            <div class="alert alert-danger alert-dismissible invalid-feedback"
                                                role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="tb_data_user_nama" class="form-label">Nama Lengkap Peserta
                                                Didik</label>
                                            <input type="text" class="form-control @error('tb_data_user_nama')
                                    is-invalid
                                @enderror" value="{{ old('tb_data_user_nama') }}" id="tb_data_user_nama"
                                                name="tb_data_user_nama" autocomplete="Nama Lengkap Peserta Didik"
                                                placeholder="John Doe">
                                            @error('tb_data_user_nama')
                                            <div class="alert alert-danger alert-dismissible invalid-feedback"
                                                role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" value="{{ old('email') }}" id="email" name="email"
                                                placeholder="johndoe@gmail.com">
                                            @error('email')
                                            <div class="alert alert-danger alert-dismissible invalid-feedback"
                                                role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control @error('password')
                                    is-invalid
                                @enderror" value="{{ old('password') }}" id="password" name="password"
                                                autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                            <div class="alert alert-danger alert-dismissible invalid-feedback"
                                                role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 mt-5">BUAT
                                                AKUN</button>
                                        </div>
                                        <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Sudah mempunyai
                                            akun? KLIK DISINI
                                            UNTUK LOGIN</a>
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