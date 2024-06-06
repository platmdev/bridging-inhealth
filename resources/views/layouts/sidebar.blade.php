<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('index')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{url('index')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    <a href="{{url('index')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Peserta</li>

                <li>
                    <a href="/peserta/daftar-peserta" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Daftar Peserta</span>
                    </a>
                </li>

                <li>
                    <a href="/peserta/eligibilitas" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Eligibilitas</span>
                    </a>
                </li>

                <li class="menu-title">Surat Jaminan Pelayanan</li>

                <li>
                    <a href="calendar" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>SJP</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>Rujukan Online</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="layouts-dark-sidebar">Terima Rujukan Online</a></li>
                        <li><a href="layouts-compact-sidebar">List Rujukan Online</a></li>
                        <li><a href="layouts-icon-sidebar">Rujuk Balik Kronis</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>List Pra-Registrasi</span>
                    </a>
                </li>

                <li class="menu-title">SYNC DATA</li>

                <li>
                    <a href="calendar" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Obat</span>
                    </a>
                </li>

                <li>
                    <a href="calendar" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Tindakan</span>
                    </a>
                </li>

                <li class="menu-title">Laporan</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>SJP</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="layouts-dark-sidebar">Rekap SJP</a></li>
                        <li><a href="layouts-compact-sidebar">Rekap Tindakan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>Rekap</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/laporan/rekap-poli">Rekap Poli</a></li>
                        <li><a href="layouts-compact-sidebar">Rekap Dokter</a></li>
                        <li><a href="layouts-compact-sidebar">Rekap Provider</a></li>
                    </ul>
                </li>

                <li class="menu-title">Klaim</li>

                <li>
                    <a href="chat" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span>Pengajuan Klaim</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
