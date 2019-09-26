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
                <div class="col s3">
                    <?php foreach ($laporan->result() as $l) : ?>
                        <h6><b>Nomor Laporan </b></h6>
                </div>
                <div class="col s9">
                    <h6> <b>: <?php echo $l->nomor_laporan; ?> </b> </h6>
                </div>

                <div class="col s3">
                    <h6>Ruangan</h6>
                </div>
                <div class="col s9">
                    <h6>: <?php echo $l->ruangan; ?></h6>
                </div>

                <div class="col s3">
                    <h6>Bagian</h6>
                </div>
                <div class="col s9">
                    <h6>: <?php echo $l->bagian; ?></h6>
                </div>

                <div class="col s3">
                    <h6>Nama Pelapor</h6>
                </div>
                <div class="col s9">
                    <h6>: <?php echo $l->pelapor; ?></h6>
                </div>

                <div class="col s3">
                    <h6>Tanggal Lapor</h6>
                </div>
                <div class="col s9">
                    <h6>: <?php echo $l->tanggal; ?></h6>
                </div>

                <div class="col s3">
                    <h6>Status</h6>
                </div>
                <div class="col s9">
                    <h6>: <?php echo $l->status; ?></h6>
                </div>

                <div class="col s3">
                    <h6><b> Keterangan</b></h6>
                </div>
                <div class="col s9">
                    <h6> <b>: <?php echo $l->tambahan; ?></b></h6>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class="section">
        </div>
        <h6><b>Komentar</b></h6>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12 m12">

                <?php foreach ($pesan->result() as $p) : ?>
                    <!-- card komentar -->
                    <div class="card card-comment horizontal valign-wrapper">
                        <div class="card-image">
                            <i class="material-icons right large">account_circle</i>
                            <!-- <img src="https://lorempixel.com/100/190/nature/6"> -->
                        </div>
                        <h6 class="name-comment"> <b>
                                <?php $explode_nama = explode(' ', trim($p->nama_user));
                                    echo $explode_nama[0]; ?></b> <br><?php echo $p->divisi_user; ?>
                        </h6>
                        <div class="card-stacked">
                            <div class="card-content card-divider">
                                <p><?php echo $p->komentar; ?></p>
                            </div>

                        </div>
                        <div class="card-action">
                            <a href="#" class="teal-text">Reply</a>
                        </div>
                    </div>
                    <!-- end card komentar -->
                <?php endforeach; ?>

                <!-- input komentar -->
                <form action="" class="col s12 write-comment" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="tambahan"></textarea>
                            <label for="icon_prefix2">Tulis Komentar..</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Kirim
                        <i class="material-icons right">send</i>
                    </button>
                </form>


            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('admin/partials/js.php') ?>
</body>

</html>