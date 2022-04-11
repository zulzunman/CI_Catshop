<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
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
            <div class="container p-5 my-5" >
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login">
                            <?php
                            $username='';
                            $usertype='';
                            $fullname='';
                            if(isset($user)){
                                $username=$user->username_038;
                                $usertype=$user->usertype_038;
                                $fullname=$user->fullname_038;
                            }
                            ?>
                            <form action="" method="post">
                            <div class="card-header bg-danger text-light text-center">
                                <h3 class="card-title">USERS FORM</h3>
                            </div>
                            <div class="card-body text-light" style="background-image: url(<?php echo base_url("asset/images/caty.jpg");?>); background-repeat: no-repeat; background-size: cover;">
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="username_038" value="<?=$username?>" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="usertype_038" value="Manager" <?=$usertype=='Manager'?'checked':''?> required>Manager
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="usertype_038" value="Cashier" <?=$usertype=='Cashier'?'checked':''?> required>Cashier
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="fullname_038" class="form-control" placeholder="Fullname" value="<?=$fullname?>" required>
                                </div>
                                <div class="text-center p-1">    
                                    <input type="submit" class="btn btn-primary" value="SAVE" name="submit">
                                    <a href="<?=site_url('users038')?>"><input class="btn btn-primary" type="button" value="CANCEL"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form><br><br>
                    <footer class="footer footer-default">
                        <div class="container p-2 my-2 bg-blue-900">
                        <div class="copyright float-right">
                            made with <i class="fa fa-dragon" style="color:blue;"> ZUNN</i>
                        </div>
                        </div>
                    </footer>
</body>
</html>