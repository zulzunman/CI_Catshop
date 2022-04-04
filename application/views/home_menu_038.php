<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 038</title>
</head>
<body>
    <h1>CATSHOP 038</h1>
    <h3>APPS MENU</h3>
    <hr>
    <ul>
        <li><a href="<?=site_url('cats038')?>">Manage Cats</a></li>
        <li><a href="<?=site_url('categories038')?>">Manage Categories</a></li>
        <?php if ($this->session->userdata('usertype')=='Manager') { ?>
        <li><a href="<?=site_url('users038')?>">Manage Users</a></li>
        <li><a href="<?=site_url('cats038/sales')?>">Sales Report</a></li><?php } ?>
        <hr>
        <h4>Welcome <?=$this->session->userdata('fullname')?>, you are login as <?=$this->session->userdata('usertype')?></h4>
        <li><img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="128" height="128"></li>
        <li><a href="<?=site_url('auth038/changephoto')?>">Change Photo</a></li>
        <li><a href="<?=site_url('auth038/changepass')?>">Change Password</a></li>
        <li><a href="<?=site_url('auth038/logout')?>">Logout</a></li>
    </ul>
    
</body>
</html>