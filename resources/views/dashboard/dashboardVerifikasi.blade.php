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


                @auth
                <p>Welcome, {{ Auth::user()->tb_data_user_nama }}</p>
                @endauth




                <p>VERIFIKASIIIII</p>
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