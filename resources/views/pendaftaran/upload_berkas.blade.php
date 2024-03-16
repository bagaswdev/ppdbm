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

    <!-- Upload Berkas Foto Siswa Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas Foto Siswa Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas Foto Siswa</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_foto_file"><button type="button"
                                                        class="dropify-clear">Remove</>
                                                        <div class="dropify-preview" style="display: none;"><span
                                                                class="dropify-render"></span>
                                                            <div class="dropify-infos">
                                                                <div class="dropify-infos-inner">
                                                                    <p class="dropify-filename"><span
                                                                            class="file-icon"></span>
                                                                        <span class="dropify-filename-inner">WhatsApp Image
                                                                            2024-03-01 at
                                                                            19.59.18_6bbe3903.jpg</span>
                                                                    </p>
                                                                    <p class="dropify-infos-message">Drag and drop or click
                                                                        to
                                                                        replace</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas Akta Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas Akta Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas Akta</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_akta_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at 19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas NISN Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas NISN Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas NISN</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_nisn_file"><button type="button"
                                                        class="dropify-clear">Remove</>
                                                        <div class="dropify-preview" style="display: none;"><span
                                                                class="dropify-render"></span>
                                                            <div class="dropify-infos">
                                                                <div class="dropify-infos-inner">
                                                                    <p class="dropify-filename"><span
                                                                            class="file-icon"></span>
                                                                        <span class="dropify-filename-inner">WhatsApp Image
                                                                            2024-03-01 at
                                                                            19.59.18_6bbe3903.jpg</span>
                                                                    </p>
                                                                    <p class="dropify-infos-message">Drag and drop or click
                                                                        to
                                                                        replace</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas KK Siswa Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas KK Calon Peserta Didik Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas KK Siswa</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_siswa_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas KK Ayah Kandung Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas KK Ayah Kandung Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas KK Ayah Kandung</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_ayah_kandung_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas KK Ibu Kandung Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas KK Ibu Kandung Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas KK Ibu Kandung</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_ibu_kandung_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas KK Wali Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas KK Wali Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas KK Wali</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_wali_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas Surat Keabsahan Data Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas Surat Keabsahan Data Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas Surat Keabsahan Data</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_wali_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas Surat Keterangan Kelakuan Baik Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas Surat Keterangan Kelakuan Baik Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas Surat Keterangan Kelakuan Baik</h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_wali_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- row -->

    <!-- Upload Berkas WhatsApp Di bawah ini -->
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
                                <h4 class="mb-4">Upload Berkas Bukti Screenshot Gabung Grup Whatsapp Di bawah ini</h4>

                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Upload Berkas Bukti Screenshot Gabung Grup Whatsapp
                                                </h6>
                                                <div class="dropify-wrapper">
                                                    <div class="dropify-message"><span class="file-icon">
                                                            <p>Drag and drop a file here or click</p>
                                                        </span>
                                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                                    </div>
                                                    <div class="dropify-loader" style="display: none;"></div>
                                                    <div class="dropify-errors-container">
                                                        <ul></ul>
                                                    </div><input type="file" id="myDropify"
                                                        name="tb_data_kk_wali_file"><button type="button"
                                                        class="dropify-clear">Remove</button>
                                                    <div class="dropify-preview" style="display: none;"><span
                                                            class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename"><span
                                                                        class="file-icon"></span>
                                                                    <span class="dropify-filename-inner">WhatsApp Image
                                                                        2024-03-01 at
                                                                        19.59.18_6bbe3903.jpg</span>
                                                                </p>
                                                                <p class="dropify-infos-message">Drag and drop or click to
                                                                    replace</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
