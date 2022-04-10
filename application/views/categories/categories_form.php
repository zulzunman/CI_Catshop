<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories Form</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body class="p-2 mb-1 bg-secondary" class="bg-gradient">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-2 my-3 bg-light rounded">
                <?php
                $name='';
                $des='';
                if(isset($cat)){
                    $name=$cat->category_name_038;
                    $des=$cat->category_description_038;
                }
                ?>
                <form action="" method="post">
                    <div class="card-header text-center my-2">
                        <h3 class="card-title text-center">Categories Form</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="text" name="category_name_038" id="" value="<?=$name?>" class="form-control" placeholder="Categories Name" required></td>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <textarea name="category_description_038" id="" value="" cols="25" rows="5" class="form-control" placeholder="Description" required><?=$des?></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="SAVE" name="submit" class="btn btn-primary">
                        <a href="<?=site_url('categories038')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
                    </div>
                </form>
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