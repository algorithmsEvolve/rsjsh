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
                    <h4>Login Admin</h4>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="col s6 offset-s3 white z-depth-4 login-style" style="padding:40px;">
                        <form action="<?php echo base_url('login'); ?>"></form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="bagian" type="text" class="validate" name="bagian">
                                <label for="bagian">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="bagian" type="text" class="validate" name="bagian">
                                <label for="bagian">Password</label>
                            </div>
                        </div>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>