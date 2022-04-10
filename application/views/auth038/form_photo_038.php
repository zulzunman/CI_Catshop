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
<body class="p-2 mb-1 bg-secondary" class="bg-gradient">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-4 my-4 bg-light rounded">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-header text-center">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="128" height="128" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">CURRENT PHOTO</h3>
                                    <h6><?=$this->session->userdata('usertype')?></h6>
                                </div>
                                <div class="card-title text-center"> <?=$this->session->flashdata('msg')?></div>
                            </div>
                            <div style="color: red;"><?=$error?></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <p>NEW PHOTO</p>
                            <input type="file" name="photo" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="submit" name="upload" value="UPLOAD PHOTO">
                        </div>
                    </div>
                    </div>
                </form><br>
                <a href="<?=base_url()?>" class="btn btn-primary">Back to Home</a>
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