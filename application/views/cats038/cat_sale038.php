<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 038</title>
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
            <div class="container my-3 bg-info rounded">
                <form action="" method="post">
                    <div class="card-header text-center">
                        <h3 class="card-title">SALE FORM</h3>
                    </div>
                    <table align="center">
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
                    </table><br>
                    <div class="text-center">
                        <input type="submit" name="submit" value="SALE" class="btn btn-primary">
                        <a href="<?=site_url('cats038')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
                    </div>
                </form>
                    <footer class="footer footer-default">
                        <div class="container p-2 my-2 bg-blue-900">
                        <div class="copyright float-right">
                            made with <i class="fa fa-dragon" style="color:blue;"> ZUNN</i>
                        </div>
                        </div>
                    </footer>
            </div>
        </div>
    </div>
</body>
</html>
