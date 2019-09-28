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

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="center">Buat Laporan Peralatan</h5>
            </div>
        </div>

        <label class="row">
            <form action="<?php echo base_url('pegawai/buat_laporan/proses_input_peralatan'); ?>" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="pelapor" value="<?php echo $this->session->userdata('nama_user'); ?>" hidden>
                        <input type="text" name="id" value="<?php echo $this->session->userdata('id_user'); ?>" hidden>
                        <input id="ruangan" type="text" class="validate" name="ruangan">
                        <label for="ruangan">Ruangan</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="bagian" type="text" class="validate" name="bagian">
                        <label for="bagian">Bagian</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pilih_keluhan" type="text" class="validate" name="nama_peralatan">
                        <label for="pilih_keluhan">Nama Peralatan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label>
                            <input type="radio" class="with-gap" name="group-1" value="Rusak Total">
                            <span>Rusak Total</span>
                        </label>
                    </div>
                    <div class="input-field col s6">
                        <label>
                            <input type="radio" class="with-gap" name="group-1" value="Perlu Maintenance/Pengecekan">
                            <span>Perlu Maintenance/Pengecekan</span>
                        </label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2" class="materialize-textarea" name="tambahan"></textarea>
                        <label for="icon_prefix2">Tambahan..</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Kirim
                    <i class="material-icons right">send</i>
                </button>
            </form>
    </div>
    <!-- end content -->

    <!-- js -->
    <?php $this->load->view('pegawai/partials/js.php') ?>
    <?php
    $id = $this->input->get('id');
    if ($id == 1) : ?>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Input Berhasil</h4>
                <p>Laporan Peralatan berhasil di input.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#modal1').modal();
                $('#modal1').modal('open');
            });
        </script>
    <?php endif; ?>
</body>

</html>