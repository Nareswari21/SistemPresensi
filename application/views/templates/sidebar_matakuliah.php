<body>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/logo/logo2.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <!-- <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-message-info">
                                        <a href="<?php echo base_url(). 'auth/logout'; ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Hi Admin!</h3>
                                                    <p>Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
       
   <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" href="<?=base_url()?>dashboard">Dashboard</a>
                                </li>
                                <li><a data-toggle="collapse" href="<?=base_url()?>mahasiswa">Mahasiswa</a>
                                </li>
                                <li><a data-toggle="collapse" href="<?=base_url()?>mahasiswa">Matakuliah</a>
                                </li>
                                <li><a data-toggle="collapse" href="<?=base_url()?>kehadiran">Kehadiran</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a  href="<?=base_url()?>dashboard"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li><a href="<?=base_url()?>mahasiswa"><i class="notika-icon notika-support"></i> Mahasiswa</a>
                        </li>
                        <li class="active"><a href="<?=base_url()?>matakuliah"><i class="notika-icon notika-edit"></i> Matakuliah</a>
                        </li>
                        <li><a href="<?=base_url()?>kehadiran"><i class="notika-icon notika-windows"></i>Kehadiran</a>
                        </li>
                    </ul>
                    <!-- <div class="tab-content custom-menu-content">
                        <div id="dashboard" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>dashboard">Home</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mahasiswa" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>mahasiswa">Data Mahasiswa</a>
                                </li>
                            </ul>
                        </div>
                        <div id="matakuliah" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>matakuliah">Data Matakuliah</a>
                                </li>
                            </ul>
                        </div>
                        <div id="kehadiran" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>kehadiran">Data Kehadiran</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->