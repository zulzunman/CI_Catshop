<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
</head>
<body>
    <h1>CATSHOP038</h1>
    <h3>CATS FORM</h3>
    <hr>
    <?php
    $name='';
    $type='';
    $gender='';
    $age='';
    $price='';
    if(isset($cat)){
        $name=$cat->name_038;
        $type=$cat->type_038;
        $gender=$cat->gender_038;
        $age=$cat->age_038;
        $price=$cat->price_038;
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name_038" value="<?=$name?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="type_038" required>
                        <option value="">Choose type</option>
                        <?php foreach($category as $cate) { ?>
                        <option value="<?=$cate->category_name_038?>" <?=set_select('type_038',$cate->category_name_038,$type==$cate->category_name_038?TRUE:FALSE)?>><?=$cate->category_name_038?></option>
				        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender_038" value="Male" <?=$gender=='Male'?'checked':''?> required>Male 
                    <input type="radio" name="gender_038" value="Female" <?=$gender=='Female'?'checked':''?> required>Female
                </td>
            </tr>
            <tr>
                <td>Age (month)</td>
                <td><input type="number" name="age_038" value="<?=$age?>" required></td>
            </tr>
            <tr>
                <td>Price ($)</td>
                <td><input type="number" name="price_038" value="<?=$price?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('cats038')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
    <hr>
</body>
</html>