@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">



    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-2 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('') }})">
                            
                        </div>
                    </div>

                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">HALAMAN UNTUK INPUT HASIL JAWABAN <span>TES AKADEMIK PPDBM 2024</span></a>
                            <!-- <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk mengakses aplikasi</h5> -->
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif

                            <a href="//docs.google.com/forms/d/e/1FAIpQLSerWMBVnNZb6JXHS66onjzEX0c8DjuDEhPkdc6d4-1nq-vIbw/viewform?usp=sf_link" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MEMASUKKAN HASIL JAWABAN KAMU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection