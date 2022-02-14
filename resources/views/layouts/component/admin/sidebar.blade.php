<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('assets-2/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">RockerAdmin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="{{ url('/admin/dashboard') }}" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javacsript:void(0)" class="waves-effect">
                <i class="icon-user"></i> <span>Pegawai</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/pegawai') }}"><i class="fa fa-circle-o"></i> Daftar pegawai</a></li>
            </ul>
            <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/gaji') }}"><i class="fa fa-circle-o"></i> Gaji</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('/admin/jabatan') }}" class="waves-effect">
                <i class="icon-home"></i> <span>Jabatan</span>
            </a>
        </li>
    </ul>

</div>
