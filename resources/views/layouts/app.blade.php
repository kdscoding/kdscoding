@if (Request::is('dt_perusahaan', 'dt_departemen', 'dt_jabatan', 'dt_anggota', 'dt_simpanan', 'dt_pinjaman', 'dt_user'))
@php
    $dt = 'active';
    $dt_open = 'menu-open';
@endphp
@else
@php
    $dt = '';
    $dt_open = '';
@endphp
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('aset') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('aset') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ asset('aset') }}/index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar elevation-4 sidebar-light-navy">
            <a href="{{ asset('aset') }}/index3.html" class="brand-link bg-navy">
                <img src="{{ asset('aset') }}/dist/img/AdminLTELogo - Copy.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">kdscoding.id</span>
            </a>
            <div class="sidebar os-theme-dark">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ $dt_open }}">
                            <a href="#" class="nav-link {{ $dt }}">
                                <p>
                                    Data Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dt_perusahaan"
                                        class="nav-link {{ Request::is('dt_perusahaan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Perusahaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_departemen"
                                        class="nav-link {{ Request::is('dt_departemen') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Departemen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_jabatan"
                                        class="nav-link {{ Request::is('dt_jabatan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_anggota"
                                        class="nav-link {{ Request::is('dt_anggota') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Anggota</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_simpanan"
                                        class="nav-link {{ Request::is('dt_simpanan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Simpanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_pinjaman"
                                        class="nav-link {{ Request::is('dt_pinjaman') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pinjaman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dt_user" class="nav-link {{ Request::is('dt_user') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pengguna</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Simpanan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="ds_rekening" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Rekening</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="ds_mutasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mutasi Rekening</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Pinjaman
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dp_pengajuan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengajuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dp_pencairan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pencairan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dp_pinjaman" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pinjaman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Akunting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="da_akun" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Master Akun</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="da_mkas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mutasi Kas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="da_mnonkas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mutasi Non Kas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Laporan Akunting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="laporan/jurnal" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Jurnal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan/bukubesar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Buku Besar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan/aruskas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Arus Kas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan/labarugi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Laba Rugi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{ asset('aset') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('aset') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="{{ asset('aset') }}/dist/js/template.js"></script> --}}

    <script src="{{ asset('aset') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
