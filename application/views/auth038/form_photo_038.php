<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATSHOP 038</title>
</head>
<body>
    <h1>CATSHOP 038</h1>
    <h3>CHANGE PHOTO</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data"> 
        <table>
            <tr>
                <td>CURRENT PHOTO</td>
                <td><img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="128" height="128"></td>
            </tr>
            <tr>
                <td>NEW PHOTO</td>
                <td><input type="file" name="photo" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="upload" value="UPLOAD PHOTO"></td>
            </tr>
        </table>
    </form><hr><a href="<?=base_url()?>"><h4>Back to Home</h4></a>
</body>
</html>