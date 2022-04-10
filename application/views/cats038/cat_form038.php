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
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container my-3 bg-light rounded">
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
                <div class="card-header text-center">
                    <h3 class="card-title text-center">CAT FORM</h3>
                </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="text" class="form-control" name="name_038" value="<?=$name?>" placeholder="Cat Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                                <select name="type_038" class="form-control selectpicker" required>
                                    <option value="">Choose type</option>
                                    <?php foreach($category as $cate) { ?>
                                    <option value="<?=$cate->category_name_038?>" <?=set_select('type_038',$cate->category_name_038,$type==$cate->category_name_038?TRUE:FALSE)?>><?=$cate->category_name_038?></option>
                                    <?php } ?>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <p>Gender</p>
                            <input type="radio" name="gender_038" value="Male" class="form-check-input" <?=$gender=='Male'?'checked':''?> required>Male
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="radio" name="gender_038" value="Female" class="form-check-input" <?=$gender=='Female'?'checked':''?> required>Female
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="number" name="age_038" class="form-control" placeholder="Age (month)" value="<?=$age?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <input type="number" name="price_038" class="form-control" placeholder="Price ($)" value="<?=$price?>" required>
                        </div>
                    </div>
                    <div class="text-center">
                            <input type="submit" value="SAVE" name="submit" class="btn btn-primary">
                            <a href="<?=site_url('cats038')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
                    </div><br>
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