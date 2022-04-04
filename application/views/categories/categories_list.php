<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories038</title>
</head>
<body>
    <h1>CATEGORIES038</h1>
    <h3>Categories list</h3>
    <h4><a href="<?=base_url()?>">HOME</a></h4>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <a href="<?=site_url('categories038/add')?>">Add new categories</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i=1; foreach($categ as $catego) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$catego->category_name_038?></td>
            <td><?=$catego->category_description_038?></td>
            <td><a href="<?=site_url('categories038/edit/'.$catego->category_id_038)?>">Edit</a></td>
            <td><a href="<?=site_url('categories038/delete/'.$catego->category_id_038)?>" onclick="return confirm('are you sure ?')">Delete</a></td>
        </tr><?php } ?>
    </table>
</body>
</html>