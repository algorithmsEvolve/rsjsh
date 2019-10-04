<!DOCTYPE html>
<html lang="en" class="grey darken-3">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('partials/css.php') ?>
</head>

<body>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 white-text center">
                    <h4>Register <?php echo ucfirst($divisi); ?></h4>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="col s8 offset-s2 white z-depth-4 login-style" style="padding:40px;">
                        <form action="<?php echo base_url('login/register_user'); ?>" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="divisi" value="<?php echo $divisi; ?>" hidden>
                                    <input id="nip" type="number" class="validate" name="nip" required>
                                    <label for="nip">NIP (Nomor Induk Pegawai)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nama" type="text" class="validate" name="nama" required>
                                    <label for="nama">Nama</label>
                                </div>
                            </div>
                            <?php if ($divisi == "pegawai") : ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="ruangan" type="text" class="validate" name="ruangan" required>
                                        <label for="ruangan">Ruangan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="instalasi" type="text" class="validate" name="instalasi" required>
                                        <label for="instalasi">Instalasi</label>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" name="password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <label>
                                        <input type="checkbox" onclick="showPass()" />
                                        <span>Show Password</span>
                                    </label>
                                </div>
                            </div>
                            <?php
                            $masuk = $this->input->get('masuk');
                            if ($masuk != NULL) : ?>
                                <h6 class="red-text">Harap periksa kembali isian anda.</h6> <br>
                            <?php endif; ?>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
    <script>
        function showPass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>