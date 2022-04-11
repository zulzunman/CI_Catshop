<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 038</title>
</head>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="<?php echo base_url();?>/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
<body class="p-3 mb-2" style="background-image: url(<?php echo base_url("asset/images/bg.jpg");?>);">
<section class="p-1 my-1 bg-dark fixed-top">
	<div class="p-1 my-1 bg-secondary">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="<?=base_url()?>">
                        <h1 class="font-monospace">
                            <i class="fa fa-cat" style='font-size:48px;color:primary'></i>
                            CATSHOP 038
                            <i class="fa fa-paw" style='font-size:48px;color:primary'></i>
                        </h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                        <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a href="<?=site_url('auth038/changephoto')?>">
                                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>"    class="rounded-circle" alt="Cinque Terre" width="50">
                                </a>
							</li>
                            <li class="nav-item">
								<a class="nav-link login-button" href="<?=site_url('auth038/logout')?>"><button type="button" class="btn btn-outline-primary"><i class="fa fa-sign-in-alt"></i> Logout</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->
<div class="container p-3 my-3 bg-dark text-white">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url("asset/images/bgkucing.jpg");?>" alt="" width="1100" height="500">
                <div class="carousel-caption text-dark bg-secondary rounded-circle">
                    <h4>Welcome <strong><?=$this->session->userdata('fullname')?></strong>, you are login as <strong><?=$this->session->userdata('usertype')?></strong></h4>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url("asset/images/catp.jpg");?>" alt="" width="1100" height="500">
                <div class="carousel-caption text-dark bg-secondary rounded-circle">
                    <h3>CATSHOP038</h3>
                    <p>Welcome to CATSHOP038</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url("asset/images/caat.jpg");?>" alt="" class="d-block" width="1100" height="500">
                <div class="carousel-caption text-dark bg-secondary rounded-circle">
                    <h3>CATSHOP038</h3>
                    <p>Thanks to Buy in this website</p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <ul class="nav nav-pills nav-pills-icons justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('cats038')?>">
                                <i class="fa fa-list"></i> Manage Cats
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('categories038')?>">
                                <i class="fa fa-list"></i> Manage Categories
                            </a>
                        </li>
                        <?php if ($this->session->userdata('usertype')=='Manager') { ?>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('cats038/sales')?>">
                                <i class="fa fa-file"></i> Sales Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('users038')?>">
                                <i class="fa fa-user"></i> Manage Users
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('auth038/changephoto')?>">
                                <i class="fa fa-user"></i> Change Photo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="<?=site_url('auth038/changepass')?>">
                                <i class="fa fa-wrench"></i> Change Password
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><br><br>
        <footer class="footer footer-default">
            <div class="container p-2 my-2 bg-blue-900">
            <div class="copyright float-right">
                made with <i class="fa fa-dragon" style="color:red;"> ZUNN</i>
            </div>
            </div>
        </footer>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url();?>/asset/plugins/jQuery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="<?php echo base_url();?>/asset/plugins/tether/js/tether.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/raty/jquery.raty-fa.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>/asset/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="<?php echo base_url();?>/asset/plugins/google-map/gmap.js"></script>
<script src="<?php echo base_url();?>/asset/js/script.js"></script>
</body>
</html>