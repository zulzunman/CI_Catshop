<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories Form</title>
</head>
<body>
    <h1>CATEGORIES038</h1>
    <h3>Categories Form</h3>
    <hr>
    <?php
    $name='';
    $des='';
    if(isset($cat)){
        $name=$cat->category_name_038;
        $des=$cat->category_description_038;
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="category_name_038" id="" value="<?=$name?>" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="category_description_038" id="" value="" cols="25" rows="5" required><?=$des?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('categories038')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>