<!DOCTYPE html>
<html lang="en">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('teknisi/partials/css.php') ?>
</head>

<body>

    <!-- navbar -->
    <?php $this->load->view('teknisi/partials/navbar.php') ?>
    <!-- end navbar -->

    <div class="container">
        <div class="section">
            <div class="row">

                <div class="col s6">
                    <div class="row">
                        <div class="col s2">
                            <h6 class="grey-text">Nama</h6>
                        </div>
                        <div class="col s4">
                            <h6>: <?php echo $this->session->userdata('nama_user'); ?></h6>
                        </div>
                    </div>
                    <h5>Teknisi</h5>
                </div>

                <div class="col s6 right-align">
                    <h5>Laporan Keseluruhan</h5> <br>
                    <h3><?php echo $total_laporan; ?></h3>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/laporan-icon.png'); ?>" alt="" width="200px" height="200px">
                </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    <h5>Laporan Yang Sudah Ditangani :</h5>
                </div>
            </div>
            <div class="row center">
                <div class="col s4">
                    <h5><?php echo $total_laporan; ?></h5> <br>
                    <h6>Total</h6>
                </div>
                <div class="col s4">
                    <h5><?php echo $laporan_diterima; ?></h5> <br>
                    <h6>Diterima</h6>
                </div>
                <div class="col s4">
                    <h5><?php echo $laporan_selesai; ?></h5> <br>
                    <h6>Selesai</h5>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <!-- js -->
    <?php $this->load->view('teknisi/partials/js.php') ?>
</body>

</html>