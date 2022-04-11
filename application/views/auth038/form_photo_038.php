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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body style="background-image: url(<?php echo base_url("asset/images/cato.jpg");?>); background-repeat: no-repeat; background-size: cover;">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-4 my-4">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-header bg-danger text-light text-center">
                                <h3 class="card-title text-center">Change Photo</h3>
                            </div>
                            <div class="card-body text-light" style="background-image: url(<?php echo base_url("asset/images/rota.jpg");?>); background-repeat: no-repeat; background-size: cover;">
                                <div class="text-center">
                                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="128" height="128" class="img-thumbnail">
                                </div>
                                <div class="card-title text-center"> <?=$this->session->flashdata('msg')?></div>
                                <div style="color: red;"><?=$error?></div>
                                <div class="text-center">
                                    <h4><?=$this->session->userdata('usertype')?></h4>
                                </div>
                                <div class="text-center">
                                    <input type="file" name="photo" required>
                                </div>
                                <div class="text-center my-2">
                                    <input type="submit" name="upload" value="UPLOAD PHOTO">
                                </div>
                                <div class="text-center my-2">
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
                made with <i class="fa fa-dragon" style="color:red;"> ZUNN</i>
            </div>
            </div>
        </footer>
</body>
</html>