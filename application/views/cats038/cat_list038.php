<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CATSHOP038</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>  
<body class="p-2 mb-1 bg-secondary" class="bg-gradient">
    <i class="fa fa-paw" style="font-size: 48px;color:red;"> </i><i class="fa fa-paw" style="font-size: 48px;color:red;"> </i>
    <i class="fa fa-paw" style="font-size: 48px;color:red;float: right;"> </i><i class="fa fa-paw" style="font-size: 48px;color:red;float: right;"> </i>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container my-3 bg-light rounded">
                <div class="card-header text-center">
                    <h3 class="card-title">CATS LIST</h3>
                </div>
                <div class="text-center"><?=$this->session->flashdata('msg')?></div>
                <a href="<?=base_url()?>" class="btn btn-primary">HOME</a>
                <a href="<?=site_url('cats038/add')?>" class="btn btn-primary">Add new cat</a>
                <br>
                <table border="2" align="center" class="table table-info table-striped my-2">
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
                <p class="pagination justify-content-center"><?=$this->pagination->create_links();?></p>
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