<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
</head>
<body>
    <h1>CATSHOP038</h1>
    <h3>USERS LIST</h3>
    <h4><a href="<?=base_url()?>">HOME</a></h4><hr>
    <a href="<?=site_url('users038/add')?>">Add new user</a><hr>
    <table border="1">
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
</body>
</html>