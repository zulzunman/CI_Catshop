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
            <div class="container p-2 my-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login bg-warning my-5">
                        <form action="" method="post"> 
                            <div class="card-header bg-danger text-light text-center rounded">
                                <h3 class="card-title text-center">Login</h3>
                            </div>
                                <div class="card-body text-light rounded" style="background-image: url(<?php echo base_url("asset/images/rota.jpg");?>); background-repeat: no-repeat; background-size: cover;">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="username" class="form-control" placeholder="username" required>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-key"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="password" required>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="LOGIN" name="login" class="btn btn-primary">
                                    </div><br><br><br><br>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>