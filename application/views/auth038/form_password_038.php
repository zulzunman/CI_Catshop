<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATSHOP 038</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body style="background-image: url(<?php echo base_url("asset/images/cato.jpg");?>); background-repeat: no-repeat; background-size: cover;">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login">
                            <div class="text-center"><?=$this->session->flashdata('msg')?></div>
                            <form action="" method="post">
                                <div class="card-header bg-danger text-light text-center">
                                    <h3 class="card-title text-center">CHANGE PASSWORD</h3>
                                </div>
                                <div class="card-body text-light" style="background-image: url(<?php echo base_url("asset/images/caty.jpg");?>); background-repeat: no-repeat; background-size: cover;">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" name="oldpassword" class="form-control" placeholder="OLD PASSWORD" required>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" name="newpassword" class="form-control" placeholder="NEW PASSWORD" required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" name="change" value="CHANGE PASSWORD" class="btn btn-primary">
                                        <a href="<?=base_url()?>" class="btn btn-primary">Back to Home</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
        <footer class="footer footer-default">
            <div class="container p-2 my-2 bg-blue-900">
            <div class="copyright float-right">
                made with <i class="fa fa-dragon" style="color:blue;"> ZUNN</i>
            </div>
            </div>
        </footer>
</body>
</html>