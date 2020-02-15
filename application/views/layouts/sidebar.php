
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="<?=site_url()?>assets/images/icon/logo.png" alt="Cool Admin" /> -->
                    <h1>AdminPBB</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="<?=base_url()?>welcome">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="<?=base_url()?>datasppt/terimapembayaran" >
                            <i class="fa fa-money"></i>Terima Pembayaran</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-th"></i>Master Data <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="<?=base_url()?>profil"><i class="fas fa-map-marker-alt"></i>  Profil</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>datasppt"><i class="fas fa-database"></i> Data SPPT</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>petugas"><i class="fas fa-user"></i> Data Petugas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-print"></i>Laporan <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url()?>pbbterhutang"><i class="fas fa-circle"></i> PBB Terhutang</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>pbblunas"><i class="fas fa-circle"></i> PBB Lunas</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>setorpbb"><i class="fas fa-circle"></i> Setor PBB</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>rekapitulasipbb"><i class="fas fa-circle"></i> Rekapitulasi PBB</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?=base_url()?>login/logout"><i class="zmdi zmdi-power"></i> Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->