<!DOCTYPE html>
<html lang="en">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('admin/partials/css.php') ?>
</head>

<body>

    <!-- navbar -->
    <?php $this->load->view('admin/partials/navbar.php') ?>
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
                            <h6>: Viki Hardiyanto</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2">
                            <h6 class="grey-text">Ruangan</h6>
                        </div>
                        <div class="col s4">
                            <h6>: Mawar</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2">
                            <h6 class="grey-text">Instalasi</h6>
                        </div>
                        <div class="col s4">
                            <h6>: Bangunan</h6>
                        </div>
                    </div>
                </div>

                <div class="col s6 right-align">
                    <h5>Laporan Keseluruhan</h5> <br>
                    <h3>258</h3>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h5>Laporan Saya :</h5>
                </div>
            </div>
            <div class="row center">
                <div class="col s4">
                    <h5>258</h5> <br>
                    <h6>Total</h6>
                </div>
                <div class="col s4">
                    <h5>200</h5> <br>
                    <h6>Diterima</h6>
                </div>
                <div class="col s4">
                    <h5>58</h5> <br>
                    <h6>Selesai</h5>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section center">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s2 m2">

                    <div class="card yellow z-depth-4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/furnitur.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Furnitur</span>
                        </div>
                    </div>

                </div>
                <div class="col s2 m2">

                    <div class="card blue z-depth-4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/listrik.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text text-darken-4">Listrik</span>
                        </div>
                    </div>

                </div>
                <div class="col s2 m2">

                    <div class="card red z-depth-4 darken-2">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/air.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text text-darken-4">Air</span>
                        </div>
                    </div>

                </div>


                <div class="col s2 m2">

                    <div class="card z-depth-4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/peralatan.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Peralatan</span>
                        </div>
                    </div>

                </div>
                <div class="col s2 m2">

                    <div class="card green z-depth-4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/bangunan.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text text-darken-4">Bangunan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('admin/partials/js.php') ?>
</body>

</html>