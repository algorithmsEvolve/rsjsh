<!DOCTYPE html>
<html lang="en" class="grey darken-3">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('partials/css.php') ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12 valign-wrapper">
                <div class="col s2 valign-wrapper">
                    <img width="50px" height="50px" src="<?php echo base_url('assets/img/logo-rsjsh.png'); ?>" alt="" class="right-align">
                </div>
                <div class="col s10 white-text">
                    <h4> <b> RSJSH Infrastructure Reporting App </b></h4>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 center white-text">
                    <h6>Choose your position :</h6>
                </div>
            </div>
            <div class="row center">
                <div class="col s12 offset-s1">
                    <div class="col s4 m4">
                        <div class="card card1 blue darken-3 z-depth-4 card-homepage">
                            <a href="<?php echo base_url('login?divisi=pegawai'); ?>">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo base_url('assets/img/admin-icon.png'); ?>">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator white-text text-darken-4"> <b> Pegawai </b></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col s2"></div>
                    <div class="col s4 m4">
                        <div class="card card2 red darken-3 z-depth-4 card-homepage">
                            <a href="<?php echo base_url('login?divisi=teknisi'); ?>">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo base_url('assets/img/teknisi-icon.png'); ?>">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator white-text text-darken-4"> <b> Teknisi </b></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>