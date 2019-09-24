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

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="center">Buat Laporan Furnitur</h5>
            </div>
        </div>

        <label class="row">
            <form action="<?php echo base_url('admin/buat_laporan/proses_input'); ?>" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="ruangan" type="text" class="validate">
                        <label for="ruangan">Ruangan</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="bagian" type="text" class="validate">
                        <label for="bagian">Bagian</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pilih_keluhan" type="text" class="validate">
                        <label for="pilih_keluhan">Pilih Keluhan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label>
                            <input type="radio" class="with-gap" name="group-1">
                            <span>Rusak Parah</span>
                        </label>
                    </div>
                    <div class="input-field col s6">
                        <label>
                            <input type="radio" class="with-gap" name="group-1">
                            <span>Rusak Ringan</span>
                        </label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
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
    <?php $this->load->view('admin/partials/js.php') ?>
</body>

</html>