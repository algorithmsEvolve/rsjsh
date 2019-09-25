<div class="navbar-fixed">
    <nav class="grey darken-3">
        <div class="nav-wrapper">
            <a href="dashboard" class="brand-logo"><img src="<?php echo base_url('assets/img/logo-rsjsh.png'); ?>" alt="RSJHS Logo" height="60px" width="60px"></a>

            <!-- Dropdown Structure -->
            <ul id="laporan_DD" class="dropdown-content">
                <li><a href="<?php echo base_url('admin/laporan/show_laporan_semua'); ?>" class="">Semua Laporan</a></li>
                <li><a href="<?php echo base_url('admin/laporan/show_laporan_dk'); ?>" class="">Sedang Dikerjakan</a></li>
                <li><a href="<?php echo base_url('admin/laporan/show_laporan_mk'); ?>" class="">Menunggu Konfirmasi</a></li>
                <li><a href="<?php echo base_url('admin/laporan/show_laporan_s'); ?>" class="">Selesai</a></li>
            </ul>

            <ul id="jenis-masalah_DD" class="dropdown-content ">
                <li><a href="<?php echo base_url('admin/buat_laporan/bangunan') ?>" class="">Bangunan</a></li>
                <li><a href="<?php echo base_url('admin/buat_laporan/air') ?>" class="">Air</a></li>
                <li><a href="<?php echo base_url('admin/buat_laporan/listrik') ?>" class="">Listrik</a></li>
                <li><a href="<?php echo base_url('admin/buat_laporan/furnitur') ?>" class="">Furnitur</a></li>
                <li><a href="<?php echo base_url('admin/buat_laporan/peralatan') ?>" class="">Perlatan</a></li>
            </ul>


            <!-- navabar menu -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('admin/dashboard') ?>" class="bold-font">Home</a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="jenis-masalah_DD">Buat Laporan<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="laporan_DD">Laporan<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#" class="bold-font">Profil</a></li>
                <li><a href="#" class="bold-font">Pesan<span class="new badge teal">4</span></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="acc_DD">Viki<i class="material-icons right">account_circle</i></a></li>

            </ul>

        </div>
    </nav>
</div>