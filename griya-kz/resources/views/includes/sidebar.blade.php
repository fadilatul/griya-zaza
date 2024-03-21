<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">

        </div>
        <div class="sidebar-brand-text mx-3">Griya Khitam Zaza</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        @if (Auth::user()->role_id == 1)
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        @else
        <a class="nav-link" href="/dokter">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        @endif

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    @if (Auth::user()->role_id == '1')
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pendaftaran</span></a>
    </li>
    @else
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pemeriksaan</span></a>
    </li>
    @endif



    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->