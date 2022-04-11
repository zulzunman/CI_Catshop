<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories038</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body class="p-2 mb-1" style="background-image: url(<?php echo base_url("asset/images/bg.jpg");?>);">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-2 my-3 bg-light rounded">
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <i class="fa fa-cat" style="font-size: 48px;color:orange;"> </i><i class="fa fa-cat" style="font-size: 48px;color:orange;"> </i>
                        Categories list
                        <i class="fa fa-cat" style="font-size: 48px;color:orange;"> </i><i class="fa fa-cat" style="font-size: 48px;color:orange;"> </i>
                    </h3>
                </div>
                <div class="text-center"><?=$this->session->flashdata('msg')?></div>
                <a href="<?=base_url()?>" class="btn btn-primary">HOME</a>
                <a href="<?=site_url('categories038/add')?>" class="btn btn-primary">Add new categories</a>
                <br>
                <table border="2" align="center" class="table table-info table-striped my-2">
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
            </div>
        </div>
    </div><br><br>
        <footer class="footer footer-default">
            <div class="container p-2 my-2 bg-blue-900">
            <div class="copyright float-right">
                made with <i class="fa fa-dragon" style="color:blue;"> ZUNN</i>
            </div>
            </div>
        </footer>
</body>
</html>