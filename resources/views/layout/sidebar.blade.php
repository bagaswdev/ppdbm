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
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Tahapan Pendaftaran</li>
            <li class="nav-item ">
                <a href="{{ route('form_data_siswa') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">1. Data Calon Peserta Didik*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('form_data_ayah_kandung') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">2. Data Ayah Kandung*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('form_data_ibu_kandung') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">3. Data Ibu Kandung*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('form_data_wali_kandung') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">4. Data Wali*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('form_data_raport') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">5. Data Raport*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">6. Upload Berkas*</span>
                </a>
            </li>
            <!-- <li class="nav-item ">
                <a href="{{ route('upload_berkas_akta') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">6. Upload Berkas Akta*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_kk_siswa') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">7. Upload Berkas KK Siswa*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_kk_ayah_kandung') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">8. Upload Berkas KK Ayah Kandung*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_kk_ibu_kandung') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">9. Upload Berkas KK Ibu Kandung*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_kk_wali') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">10. Upload Berkas KK wali*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_nisn') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">11. Upload Berkas NISN*</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_foto') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">12. Upload Berkas Foto Siswa*</span>
                </a>
            </li>-->
            <li class="nav-item ">
                <a href="{{ route('upload_berkas_kip') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">7 Upload Berkas KIP*</span>
                </a>
            </li>



            {{-- <li class="nav-item nav-category">web apps</li>
            <li class="nav-item ">
                <a href="{{ url('/detail') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Data</span>
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
