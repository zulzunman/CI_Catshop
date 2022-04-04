<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 038</title>
</head>
<body>
    <h1>CATSHOP 038</h1>
    <h3>SALE LIST</h3>
    <a href="<?=base_url()?>"><h4>HOME</h4></a><hr>
    <table border="1px solid black">
        <tr>
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale Data</th>
            <th>Cat ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
        </tr>
        <?php $i=1; foreach($sales as $sale) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_038?></td>
            <td><?=$sale->sale_date_038?></td>
            <td><?=$sale->cat_id_038?></td>
            <td><?=$sale->customer_name_038?></td>
            <td><?=$sale->customer_address_038?></td>
            <td><?=$sale->customer_phone_038?></td>
        </tr> <?php } ?>
    </table>
</body>
</html>
