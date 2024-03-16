@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-1 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('') }})">
                            
                        </div>
                    </div>

                    <div class="col-md-10 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">DAFTAR ULANG <span>PPDBM JALUR PRESTASI, TERPADU & AFILIASI</span></a>
                            <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk daftar ulang ppdbm</h5>
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif
                            <a href="https://tally.so/r/mO5xZa" target="_blank" class="btn btn-primary col-xl-12">DAFTAR ULANG</a>
                            <br><br>
                            <a href="//docs.google.com/spreadsheets/d/1KS_pI88dkRBI6uXhf5pTtR_I7SSd6yCoTzK-ypwaeOQ/edit?usp=sharing" target="_blank" class="btn btn-success col-xl-12">LIHAT DATA MASUK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection