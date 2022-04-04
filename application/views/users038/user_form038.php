<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
</head>
<body>
    <h1>CATSHOP038</h1>
    <h3>USERS FORM</h3><hr>
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
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_038" value="<?=$username?>" required></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td>
                    <input type="radio" name="usertype_038" value="Manager" <?=$usertype=='Manager'?'checked':''?> required>Manager 
                    <input type="radio" name="usertype_038" value="Cashier" <?=$usertype=='Cashier'?'checked':''?> required>Cashier
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname_038" value="<?=$fullname?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('users038')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>