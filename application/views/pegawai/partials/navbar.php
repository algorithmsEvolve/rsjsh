<div class="navbar-fixed">
    <nav class="grey darken-3">
        <div class="nav-wrapper">
            <a href="dashboard" class="brand-logo"><img src="<?php echo base_url('assets/img/logo-rsjsh.png'); ?>" alt="RSJHS Logo" height="60px" width="60px"></a>

            <!-- Dropdown Structure -->
            <ul id="laporan_DD" class="dropdown-content">
                <li><a href="<?php echo base_url('pegawai/laporan/show_laporan_semua'); ?>" class="">Semua Laporan</a></li>
                <li><a href="<?php echo base_url('pegawai/laporan/show_laporan_dk'); ?>" class="">Sedang Dikerjakan</a></li>
                <li><a href="<?php echo base_url('pegawai/laporan/show_laporan_mk'); ?>" class="">Menunggu Konfirmasi</a></li>
                <li><a href="<?php echo base_url('pegawai/laporan/show_laporan_s'); ?>" class="">Selesai</a></li>
            </ul>

            <ul id="jenis-masalah_DD" class="dropdown-content ">
                <li><a href="<?php echo base_url('pegawai/buat_laporan/bangunan') ?>" class="">Bangunan</a></li>
                <li><a href="<?php echo base_url('pegawai/buat_laporan/air') ?>" class="">Air</a></li>
                <li><a href="<?php echo base_url('pegawai/buat_laporan/listrik') ?>" class="">Listrik</a></li>
                <li><a href="<?php echo base_url('pegawai/buat_laporan/furnitur') ?>" class="">Furnitur</a></li>
                <li><a href="<?php echo base_url('pegawai/buat_laporan/peralatan') ?>" class="">Perlatan</a></li>
            </ul>

            <ul id="acc_DD" class="dropdown-content">
                <li><a href="<?php echo base_url('login/log_out') ?>" class="">Log Out</a></li>
            </ul>

            <ul id="pesan_DD" class="dropdown-content black-text" style="max-width:550px;">
                <?php
                $max = 1;
                foreach ($notif->result() as $n) :
                    if ($max <= 10) :
                        ?>
                        <li><a href="<?php
                                                $jenis_laporan = substr($n->nomor_laporan, 2, 1);

                                                if ($jenis_laporan == 'l') {
                                                    $jenis_laporan = 'laporan_listrik';
                                                } elseif ($jenis_laporan == 'f') {
                                                    $jenis_laporan = 'laporan_furnitur';
                                                } elseif ($jenis_laporan == 'b') {
                                                    $jenis_laporan = 'laporan_bangunan';
                                                } elseif ($jenis_laporan == 'a') {
                                                    $jenis_laporan = 'laporan_air';
                                                } elseif ($jenis_laporan == 'p') {
                                                    $jenis_laporan = 'laporan_peralatan';
                                                }

                                                echo base_url('pegawai/laporan/show_laporan_and_read?id=' . $n->nomor_laporan . '&&jenis_laporan=' . $jenis_laporan . '&&id_komentar=' . $n->id_komentar) ?>"><?php
                                                                                                                                                                                                            $explode_nama = explode(' ', trim($n->nama_user));
                                                                                                                                                                                                            $pesan = implode(' ', array_slice(explode(' ', $n->komentar), 0, 5));
                                                                                                                                                                                                            echo '<h6 style="font-size: 14px;"><b>' . $explode_nama[0] . '</b> mengomentari "' . $pesan . '..." pada <b>' . $n->nomor_laporan . '</b></h6>'; ?></a></li>
                <?php
                        $max++;
                    endif;
                endforeach; ?>
            </ul>


            <!-- navabar menu -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('pegawai/dashboard') ?>" class="bold-font">Home</a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="jenis-masalah_DD">Buat Laporan<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="laporan_DD">Laporan<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#" class=" dropdown-trigger bold-font" data-target="pesan_DD">Pesan
                        <?php if ($new_msg > 0) : ?>
                            <span class="new badge teal"><?php echo $new_msg; ?></span>
                        <?php endif; ?>
                    </a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="acc_DD"><?php $ex_nama = explode(' ', trim($this->session->userdata('nama_user')));
                                                                                        echo $ex_nama[0]; ?><i class="material-icons right">account_circle</i></a></li>

            </ul>

        </div>
    </nav>
</div>