<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            APP<span> PPDBM</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item ">
                <a href="{{ route('dashboardVerifikasi') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>


            {{-- HALAMAN VERIFIKASI --}}
            <li class="nav-item nav-category">Verifikator</li>
            <li class="nav-item ">
                <a href="{{ route('VerifikasiDataFotoDanWA') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data Foto & WA</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('VerifikasiDataAkta') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data Akta</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('VerifikasiDataNisn') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data NISN</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('VerifikasiDataKK') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data KK</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('VerifikasiDataKeabsahan') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data Keabsahan</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('VerifikasiDataKelakuan') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data Kelakuan</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('VerifikasiDataRekap') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Verifikasi Data Rekap</span>
                </a>
            </li>

        </ul>
    </div>
</nav>