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
        <div class="section">
            <div class="row">
                <div class="col s2"></div>
                <div class="col s4 m3">

                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/furnitur.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Furnitur<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>

                </div>
                <div class="col s4 m3">

                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/listrik.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Listrik<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>

                </div>
                <div class="col s4 m3">

                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/air.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Air<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col s2"></div>
                <div class="col s4 m3">

                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/peralatan.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Peralatan<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>

                </div>
                <div class="col s4 m3">

                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/bangunan.png'); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Bangunan<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s2"></div>
            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('admin/partials/js.php') ?>
</body>

</html>