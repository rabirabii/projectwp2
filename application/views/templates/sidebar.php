        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-music"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sasando</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Looping Menu-->
            <div class="sidebar-heading">
                Home
            </div>
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Dashboard</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('lagu/album'); ?>">
                    <i class="fa fa-fw fa music"></i>
                    <span>Data Album</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('lagu/genre'); ?>">
                    <i class="fa fa-fw fa music"></i>
                    <span>Genre Lagu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('lagu'); ?>">
                    <i class="fa fa-fw fa music"></i>
                    <span>Data Lagu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('musisi'); ?>">
                    <i class="fa fa-fw fa music"></i>
                    <span>Data Musisi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/member'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Data Anggota</span></a>
            </li>
            </li>

            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Transaksi
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('index.php/vip'); ?>">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span>Data Pembelian VIP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('index.php/vip/beli_lagu'); ?>">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span>Data Pembelian Lagu</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Laporan
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_lagu'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Data Lagu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_member'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Data Anggota</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_vip'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Pembelian VIP</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --   > 
        
        