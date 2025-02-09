<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?= base_url() ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">TRANSAKSI</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Penjualan Produk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested-nav">
                            <a class="nav-link" href="<?= base_url('jual')?>">Transaksi</a>
                            <a class="nav-link" href="/jual/laporan">Laporan</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Penjualan Layanan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested-nav">
                            <a class="nav-link" href="<?= base_url('juallay')?>">Transaksi</a>
                            <a class="nav-link" href="/juallay/laporan">Laporan</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Pembelian Barang
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= base_url('beli') ?>">Transaksi</a>
                            <a class="nav-link" href="/beli/laporan">Laporan</a>
                        </nav>
                    </div>
                    <div class=" sb-sidenav-menu-heading">Master
                    </div>
                    <?php if (session()->role == "Owner" || session()->role == "Kasir" || session()->role == "Manajer" || session()->role == "Kapster") : ?>
                    <a class=" nav-link" href="<?= base_url('layanan') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                        Data Layanan
                    </a>
                    <?php endif; ?>
                    <?php if (session()->role == "Owner" || session()->role == "Kasir" || session()->role == "Manajer" || session()->role == "Logistik") : ?>
                    <a class="nav-link" href="<?= base_url('barang') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Data Barang
                    </a>
                    <?php endif; ?>
                    <?php if (session()->role == "Owner" || session()->role == "Manajer") : ?>
                    <a class="nav-link" href="<?= base_url('pegawai') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Data Karyawan
                    </a>
                    <?php endif; ?>
                    <?php if (session()->role == "Owner" || session()->role == "Manajer" || session()->role == "Admin") : ?>
                    <a class="nav-link" href="<?= base_url('customer') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Data Customer
                    </a>
                    <?php endif; ?>
                    <?php if (session()->role == "Owner" || session()->role == "Manajer" || session()->role == "Admin") : ?>
                    <a class="nav-link" href="<?= base_url('supplier') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                        Data Supplier
                    </a>
                    <?php endif; ?>
                    <?php if (session()->role == "Owner" || session()->role == "Admin" || session()->role == "Manajer") : ?>
                    <a class="nav-link" href="<?=base_url()?>/users">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Data User
                    </a>
                    <?php endif; ?>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                        aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseError" aria-expanded="false"
                                aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <?php if (session()->role == "Owner") : ?>
                <div class="small">Logged in as:</div>
                Owner
                <?php endif; ?>
                <?php if (session()->role == "Admin") : ?>
                <div class="small">Logged in as:</div>
                Admin
                <?php endif; ?>
                <?php if (session()->role == "Manajer") : ?>
                <div class="small">Logged in as:</div>
                Manajer
                <?php endif; ?>
                <?php if (session()->role == "Karyawan") : ?>
                <div class="small">Logged in as:</div>
                Karyawan
                <?php endif; ?>
            </div>
        </nav>
    </div>
    <!-- <div id="layoutSidenav_content"></div> -->