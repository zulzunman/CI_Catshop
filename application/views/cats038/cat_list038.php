<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
</head>
<body>
    <h1>CATSHOP038</h1>
    <h3>CATS LIST</h3>
    <h4><a href="<?=base_url()?>">HOME</a></h4>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <a href="<?=site_url('cats038/add')?>">Add new cat</a><hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age(month)</th>
            <th>Price($)</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach($cats as $cat) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$cat->name_038?></td>
            <td><?=$cat->type_038?></td>
            <td><?=$cat->gender_038?></td>
            <td><?=$cat->age_038?></td>
            <td><?=$cat->price_038?></td>
            <td><a href="<?=site_url('cats038/edit/'.$cat->id_038)?>">Edit</a></td>
            <td><a href="<?=site_url('cats038/delete/'.$cat->id_038)?>" onclick="return confirm('are you sure ?')">Delete</a></td>
            <td><?php 
            if($cat->sold_038==1) 
                echo 'SOLD';
            else{?>
            <a href="<?=site_url('cats038/sale/'.$cat->id_038)?>">Sale</a></td>
        </tr><?php } }?>
    </table>
    <p><?=$this->pagination->create_links();?></p>
</body> 
</html>