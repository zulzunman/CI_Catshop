<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATSHOP 038</title>
</head>
<body>
    <h1>CATSHOP 038</h1>
    <h3>CHANGE PASSWORD</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <form action="" method="post"> 
        <table>
            <tr>
                <td>OLD PASSWORD</td>
                <td><input type="password" name="oldpassword" required></td>
            </tr>
            <tr>
                <td>NEW PASSWORD</td>
                <td><input type="password" name="newpassword" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="change" value="CHANGE PASSWORD"></td>
            </tr>
        </table>
    </form>
    <hr>
    <a href="<?=base_url()?>"><h4>Back to Home</h4></a>
</body>
</html>