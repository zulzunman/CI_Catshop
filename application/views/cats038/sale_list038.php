<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
<body style="background-image: url(<?php echo base_url("asset/images/bg.jpg");?>);">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container p-2 my-3 bg-light rounded">
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <i class="fa fa-shopping-bag" style="font-size: 48px;color:orange;"> </i><i class="fa fa-shopping-bag" style="font-size: 48px;color:orange;"> </i>
                        SALE LIST
                        <i class="fa fa-shopping-bag" style="font-size: 48px;color:orange;"> </i><i class="fa fa-shopping-bag" style="font-size: 48px;color:orange;"> </i>
                    </h3>
                </div>
                <div>
                <a href="<?=base_url()?>" class="btn btn-primary">HOME</a>
                </div><br>
                <table border="2px solid black" align="center" class="table table-info table-striped p-3 my-1">
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
