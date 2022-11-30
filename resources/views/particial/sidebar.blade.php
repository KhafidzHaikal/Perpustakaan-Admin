        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item {{ Request::is('buku') ? 'active':'' }}">
                <a class="nav-link" href="/buku">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('ruangan') ? 'active':'' }}">
                <a class="nav-link" href="/ruangan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ruangan</span></a>
            </li>
            {{-- <li class="nav-item {{ Request::is('wa-bot') ? 'active':'' }}">
                <a class="nav-link" href="/ruangan">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>WA Bot</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>