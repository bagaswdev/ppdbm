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
                                        <a href="#" class="noble-ui-logo d-block mb-2">PEMILIHAN JALUR PPDBM<span>
                                                MTsN 1
                                                Kota
                                                Malang</span></a>
                                        <span class="badge bg-warning mb-4">Langkah 2</span>

                                        {{-- {{ $validasiData['pemilihan_jalur'] }} --}}

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <b>Opps!</b> {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <form action="{{ route('CekPemilihanJalurOpsiAfirmasiJawaban') }}" method="POST"
                                            class="forms-sample">
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            @csrf



                                            <p>*Anda memilih jalur <b>Afirmasi</b>, Silakan upload berkas KIP. (Berformat
                                                gambar png/jpg)</p>

                                            <div class="mb-3">


                                                {{-- <label class="form-label" for="formFile">File upload</label> --}}
                                                <input class="form-control mt-2" type="file" id="formFile"
                                                    name="berkas_kip">


                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary me-2 mb-2 mb-md-0 mt-5">LANJUT
                                                        LANGKAH SELANJUTNYA</button>
                                                    <a href="{{ route('PemilihanJalur') }}"
                                                        class="btn btn-success me-2 mb-2 mb-md-0 mt-5">
                                                        KEMBALI</button>
                                                    </a>
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
