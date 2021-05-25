<body>
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <h2>Deskripsi</h2>
                <p>Sistem Presensi Mahasiswa berbasis website adalah sistem yang dibuat untuk administrator melakukan monitoring data. Sistem ini menampilkan data yang terdapat pada database diantaranya data mahasiswa, data matakuliah, dan data kehadiran. Admin hanya dapat melakukan hapus data dan mengunduh data pada seluruh data yang ditampilkan namun pada data matakuliah, admin juga dapat melakukan edit data tersebut.</p>
                <a href="<?php echo base_url(). 'auth/login'; ?>" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic">
                <a href="<?php echo base_url(). 'auth/login'; ?>" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Login</span></a>
            </div>
        </div>
    </div>
