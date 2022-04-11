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
<body class="p-2 mb-1" style="background-image: url(<?php echo base_url("asset/images/bg.jpg");?>);">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-2 my-3 bg-light rounded">
                <div class="card-header text-center">
                    <h3 class="card-title">USERS LIST</h3>
                </div>
                <a href="<?=base_url()?>" class="btn btn-primary my-1">HOME</a>
                <a href="<?=site_url('users038/add')?>" class="btn btn-primary my-1">Add new user</a><br>
                <table border="2" align="center" class="table table-info table-striped my-2">
                    <tr>
                        <th>Userid</th>
                        <th>Username</th>
                        <th>Usertype</th>
                        <th>Fullname</th>
                        <th colspan="3">Action</th>
                    </tr>
                    <?php $i=1; foreach($users as $user) { ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$user->username_038?></td>
                        <td><?=$user->usertype_038?></td>
                        <td><?=$user->fullname_038?></td>
                        <td><a href="<?=site_url('users038/edit/'.$user->userid_038)?>">Edit</a></td>
                        <td><a href="<?=site_url('users038/delete/'.$user->userid_038)?>" onclick="return confirm('are you sure ?')">Delete</a></td>
                        <td><a href="<?=site_url('users038/reset/'.$user->usertype_038)?>" onclick="return confirm('Are you sure reset password?')">Reset Password</a></td>
                    </tr><?php } ?>
                </table>
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