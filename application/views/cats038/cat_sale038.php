<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 038</title>
</head>
<body>
    <h1>CATSHOP 038</h1>
    <h3>SALE FORM</h3>
    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>Cat ID</td>
                <td><?=$cat->id_038?></td>
            </tr>
            <tr>
                <td>Cat Name</td>
                <td><?=$cat->name_038?></td>
            </tr>
            <tr>
                <td>Cat Type</td>
                <td><?=$cat->type_038?></td>
            </tr>
            <tr>
                <td>Cat Price</td>
                <td>$<?=$cat->price_038?></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name_038" id=""></td>
            </tr>
            <tr>
                <td>Customer Address</td>
                <td><textarea name="customer_address_038" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Customer Phone</td>
                <td><input type="text" name="customer_phone_038" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="SALE">
                    <a href="<?=site_url('cats038')?>"><input type="button" value="CANCEL"></a>
                <td>
            </tr>
        </table>
    </form>
</body>
</html>
