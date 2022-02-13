<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{URL::to('/')}}" class="mb-5">
            <img src="{{URL::to('assets/images/mahaputra1.png')}}" class="img-fluid"
                 style="max-width: 185px; height: auto; margin-left: 10%; margin-right: 10%;" alt="logo icon">
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol mt-2">
        <li class="sidebar-header">MAIN NAVIGATION</li>

        <li>
            <a href="{{URL::to('/')}}" class="">
                <i class="icon-home"></i> <span>Dashboard</span> <i class=""></i>
            </a>

        <li>

        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="icon-user"></i> <span>Kelola Pegawai</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{URL::to('/admin/gaji')}}"><i class="fa fa-money icons"></i>Gaji</a></li>
                <li><a href="{{URL::to('/admin/pegawai')}}"><i class="icon-user icon"></i> Pegawai</a></li>
            </ul>

        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="icon-user"></i> <span>Kelola Jabatan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{URL::to('/admin/kelas')}}"><i class="fa fa-list-alt"></i>Daftar Jabatan</a></li>
                <li><a href="{{URL::to('/admin/kelas')}}"><i class="fa fa-plus"></i>Create Jabatan</a></li>

            </ul>
        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="fa fa-file icon"></i> <span>Lamaran</span> <i class=""></i>
            </a>

        </li>
     </ul>

</div>
