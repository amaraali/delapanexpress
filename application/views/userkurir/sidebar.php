        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengiriman Ekspedisi</div>
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
                            <a class="nav-link pb-0" href="<?= base_url('userkurir'); ?>">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>
                    </li>

            <!-- Divider -->
                <hr class="sidebar-divider mt-3">

            <!-- Heading -->
                <div class="sidebar-heading">
                    Laporan
                </div>

                <!-- Nav Item Dashboard -->
                <li class="nav-item active">
                    <!-- Nav Item Dashboard -->   
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="<?= base_url('userkurir/datapengiriman'); ?>">
                        <i class="fa fa-fw fa-address-book"></i>
                        <span>Data Pengiriman</span></a>
                    </li>
                </li>
                
            <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Nav Item Dashboard -->
                <li class="nav-item active">
                    <!-- Nav Item Dashboard -->   
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="<?= base_url('autentifikasi/logout'); ?>">
                       <i class="fas fa-sign-out-alt"></i>
                        <span>Log-out</span></a>
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
        
        