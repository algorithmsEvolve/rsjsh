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
        <h5><?php echo $title; ?></h5>
        <div class="divider"></div>

        <!-- show laporan -->

        <!-- laporan air -->
        <?php
        $count = 0;
        foreach ($laporan_air->result() as $l1) :
            if ($count == 0) { ?>
                <div class="row">
                    <div class="col s4 m4">
                        <div class="card z-depth-4 red darken-2 white-text">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                                    <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                        Ruangan : <?php echo $l1->ruangan; ?> <br>
                                        Bagian : <?php echo $l1->bagian; ?> <br>
                                        Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                        Tanggal : <?php echo $l1->tanggal; ?> <br>
                                        Status : <?php echo $l1->status; ?>
                                    </p>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator white-text text-darken-4">
                                    <h5>Laporan Air</h5>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php $count++;
                    } elseif ($count == 3) { ?>

                    <div class="col s4 m4">
                        <div class="card z-depth-4 red darken-2 white-text">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                                    <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                        Ruangan : <?php echo $l1->ruangan; ?> <br>
                                        Bagian : <?php echo $l1->bagian; ?> <br>
                                        Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                        Tanggal : <?php echo $l1->tanggal; ?> <br>
                                        Status : <?php echo $l1->status; ?>
                                    </p>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator white-text text-darken-4">
                                    <h5>Laporan Air</h5>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $count = 0;
                } else { ?>
                <<div class="col s4 m4">
                    <div class="card z-depth-4 red darken-2 white-text">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                                <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                    Ruangan : <?php echo $l1->ruangan; ?> <br>
                                    Bagian : <?php echo $l1->bagian; ?> <br>
                                    Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                    Tanggal : <?php echo $l1->tanggal; ?> <br>
                                    Status : <?php echo $l1->status; ?>
                                </p>
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text text-darken-4">
                                <h5>Laporan Air</h5>
                            </span>
                        </div>
                    </div>
    </div>
<?php } ?>

<?php endforeach; ?>
<!-- end laporan air -->

<!-- laporan bangunan -->
<?php
$count = 0;
foreach ($laporan_bangunan->result() as $l1) :
    if ($count == 0) { ?>
        <div class="row">
            <div class="col s4 m4">
                <div class="card z-depth-4 green white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator white-text text-darken-4">
                            <h5>Laporan Bangunan</h5>
                        </span>
                    </div>
                </div>
            </div>
        <?php $count++;
            } elseif ($count == 4) { ?>

            <div class="col s4 m4">
                <div class="card z-depth-4 green white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator white-text text-darken-4">
                            <h5>Laporan Bangunan</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php $count = 0;
        } else { ?>
        <div class="col s4 m4">
            <div class="card z-depth-4 green white-text">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                        <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                            Ruangan : <?php echo $l1->ruangan; ?> <br>
                            Bagian : <?php echo $l1->bagian; ?> <br>
                            Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                            Tanggal : <?php echo $l1->tanggal; ?> <br>
                            Status : <?php echo $l1->status; ?>
                        </p>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator white-text text-darken-4">
                        <h5>Laporan Bangunan</h5>
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>

<?php endforeach; ?>
<!-- end laporan bangunan -->

<!-- laporan furnitur -->
<?php
$count = 0;
foreach ($laporan_furnitur->result() as $l1) :
    if ($count == 0) { ?>
        <div class="row">
            <div class="col s4 m4">
                <div class="card z-depth-4 yellow black-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator black-text text-darken-4">
                            <h5>Laporan Furnitur</h5>
                        </span>
                    </div>
                </div>
            </div>
        <?php $count++;
            } elseif ($count == 4) { ?>

            <div class="col s4 m4">
                <div class="card z-depth-4 yellow black-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator black-text text-darken-4">
                            <h5>Laporan Furnitur</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php $count = 0;
        } else { ?>
        <div class="col s4 m4">
            <div class="card z-depth-4 yellow black-text">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                        <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                            Ruangan : <?php echo $l1->ruangan; ?> <br>
                            Bagian : <?php echo $l1->bagian; ?> <br>
                            Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                            Tanggal : <?php echo $l1->tanggal; ?> <br>
                            Status : <?php echo $l1->status; ?>
                        </p>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator black-text text-darken-4">
                        <h5>Laporan Furnitur</h5>
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>

<?php endforeach; ?>
<!-- end laporan furnitur -->

<!-- laporan listrik -->
<?php
$count = 0;
foreach ($laporan_listrik->result() as $l1) :
    if ($count == 0) { ?>
        <div class="row">
            <div class="col s4 m4">
                <div class="card z-depth-4 blue white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator white-text text-darken-4">
                            <h5>Laporan Listrik</h5>
                        </span>
                    </div>
                </div>
            </div>
        <?php $count++;
            } elseif ($count == 4) { ?>

            <div class="col s4 m4">
                <div class="card z-depth-4 blue white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator white-text text-darken-4">
                            <h5>Laporan Listrik</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php $count = 0;
        } else { ?>
        <div class="col s4 m4">
            <div class="card z-depth-4 blue white-text">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="white-text">
                        <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                            Ruangan : <?php echo $l1->ruangan; ?> <br>
                            Bagian : <?php echo $l1->bagian; ?> <br>
                            Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                            Tanggal : <?php echo $l1->tanggal; ?> <br>
                            Status : <?php echo $l1->status; ?>
                        </p>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator white-text text-darken-4">
                        <h5>Laporan Listrik</h5>
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>

<?php endforeach; ?>
<!-- end laporan listrik -->

<!-- laporan peralatan -->
<?php
$count = 0;
foreach ($laporan_peralatan->result() as $l1) :
    if ($count == 0) { ?>
        <div class="row">
            <div class="col s4 m4">
                <div class="card z-depth-4 white black-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator black-text text-darken-4">
                            <h5>Laporan Peralatan</h5>
                        </span>
                    </div>
                </div>
            </div>
        <?php $count++;
            } elseif ($count == 4) { ?>

            <div class="col s4 m4">
                <div class="card z-depth-4 white black-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                            <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                                Ruangan : <?php echo $l1->ruangan; ?> <br>
                                Bagian : <?php echo $l1->bagian; ?> <br>
                                Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                                Tanggal : <?php echo $l1->tanggal; ?> <br>
                                Status : <?php echo $l1->status; ?>
                            </p>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator black-text text-darken-4">
                            <h5>Laporan Peralatan</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php $count = 0;
        } else { ?>
        <div class="col s4 m4">
            <div class="card z-depth-4 white black-text">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php echo base_url('admin/laporan/show_laporan') ?>" class="black-text">
                        <p class="laporan-card margin-left"><b><?php echo $l1->nomor_laporan; ?></b> <br>
                            Ruangan : <?php echo $l1->ruangan; ?> <br>
                            Bagian : <?php echo $l1->bagian; ?> <br>
                            Nama Pelapor : <?php echo $l1->pelapor; ?> <br>
                            Tanggal : <?php echo $l1->tanggal; ?> <br>
                            Status : <?php echo $l1->status; ?>
                        </p>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator black-text text-darken-4">
                        <h5>Laporan Peralatan</h5>
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>

<?php endforeach; ?>
<!-- end laporan peralatan -->


</div>
</div>
</div>
</div>

<!-- js -->
<?php $this->load->view('admin/partials/js.php') ?>
</body>

</html>