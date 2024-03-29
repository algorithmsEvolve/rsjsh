<!DOCTYPE html>
<html lang="en">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('pegawai/partials/css.php') ?>
</head>

<body>

    <!-- navbar -->
    <?php $this->load->view('pegawai/partials/navbar.php') ?>
    <!-- end navbar -->

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s4">
                    <?php foreach ($laporan->result() as $l) : ?>
                        <h6><b>Nomor Laporan </b></h6>
                </div>
                <div class="col s8">
                    <h6> <b>: <?php echo $l->nomor_laporan; ?> </b> </h6>
                </div>

                <div class="col s4">
                    <h6>Ruangan</h6>
                </div>
                <div class="col s8">
                    <h6>: <?php echo $l->ruangan; ?></h6>
                </div>

                <div class="col s4">
                    <h6>Bagian</h6>
                </div>
                <div class="col s8">
                    <h6>: <?php echo $l->bagian; ?></h6>
                </div>

                <div class="col s4">
                    <h6>Nama Pelapor</h6>
                </div>
                <div class="col s8">
                    <h6>: <?php echo $l->pelapor; ?></h6>
                </div>

                <div class="col s4">
                    <h6>Tanggal Lapor</h6>
                </div>
                <div class="col s8">
                    <h6>: <?php echo $l->tanggal; ?></h6>
                </div>

                <div class="col s4">
                    <h6>Status</h6>
                </div>
                <div class="col s8">
                    <h6>: <?php echo $l->status;
                                $status_laporan = $l->status; ?></h6>
                </div>

                <div class="col s4">
                    <h6><b> Keterangan</b></h6>
                </div>
                <div class="col s8">
                    <h6> <b>: <?php echo $l->tambahan; ?></b></h6>
                </div>
                <?php if ($status_laporan == "Selesai" && $l->barang_yang_diganti != "") : ?>
                    <div class="col s4">
                        <h6><b>Barang yang diganti</b></h6>
                    </div>
                    <div class="col s8">
                        <h6>: <?php echo $l->barang_yang_diganti; ?></h6>
                    </div>
                <?php endif; ?>

                <?php if ($status_laporan == "Selesai" || $status_laporan == "Sedang Dikerjakan") : ?>
                    <div class="col s4">
                        <h6><b>Dikerjakan Oleh</b></h6>
                    </div>
                    <div class="col s8">
                        <?php foreach ($data_user->result() as $du) : if ($du->NIP == $l->nip_teknisi) : ?>
                                <h6>: <?php echo $du->nama_user . " (" . $l->nip_teknisi . ")"; ?></h6>
                        <?php endif;
                                endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php
                $nomor_laporan = $l->nomor_laporan;
                $pelapor = $l->pelapor;
            endforeach; ?>
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
                            <a href="#icon_prefix2" class="teal-text">Reply</a>
                        </div>
                    </div>
                    <!-- end card komentar -->
                <?php endforeach; ?>

                <!-- input komentar -->
                <form action="<?php echo base_url('pegawai/laporan/input_komentar'); ?>" class="col s12 write-comment" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nomor_laporan" value="<?php echo $nomor_laporan; ?>" hidden>
                            <input type="text" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" hidden>
                            <input type="text" name="divisi_user" value="<?php echo ucfirst($this->session->userdata('divisi')); ?>" hidden>
                            <input type="text" name="pelapor" value="<?php echo $this->session->userdata('nama_user'); ?>" hidden>
                            <input type="text" name="jenis_laporan" value="<?php echo $this->input->get('jenis_laporan'); ?>" hidden>
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="komentar" required></textarea>
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
    <?php $this->load->view('pegawai/partials/js.php') ?>
</body>

</html>