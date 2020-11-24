<?php
	session_start();
	include"../config/connection.php";
	if(!isset($_SESSION['username'])){
		header("location:../login.php");
	}
	?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
			<?php 
				if(!isset($_GET['page'])){
					echo"Selamat datang di Website Resmi Games Stadium";
				}else{
					echo$_GET['page'];
				}
			?>
			</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/GAMESSTADIUM LOGO WHITE FIX.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
		
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet"/>
		 <link href="../css/fontawesome/css/all.css" rel="stylesheet"/>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
		
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<link href="../css/custom.style.css" rel="stylesheet" />
	<link href="../css/custom-user.style.css" rel="stylesheet" />
	<link href="../css/custom-responsive-page.css" rel="stylesheet" />
		  
    </head>
    <body id="page-top" class="bg-primary">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-nomar desktop" id="navbar">
            <div class="mainnav-user">
				<div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../assets/img/home/GAMESSTADIUM LOGO WHITE FIX.png" alt=""  width="75%"/></a>
                <a class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="border-style:none">
                 
                    <i class="fas fa-bars ml-1"></i>
                </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   <?php 
				   if(!isset($_GET['page'])){
						echo"Dashboard";
					}else{ 
						echo ucwords($_GET['page']);
				   }
				   ?>
                </div>
				<div class="pull-right">
					<div class="search-bar">
						<input type="text" class="pl-4 pr-4" placeholder="Pencarian"/><i class="fa fa-search mr-2" style="color:#0A84E1"></i>
					</div>
				</div>
				</div>
				<div class="bg-primary pt-3 pb-3 text-center navbar-bottom ">
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav text-uppercase ml-auto mr-auto" >
							<li class="nav-item"><a class="<?php if($_GET['page']==""){echo"active ";}else{echo"";};?> nav-link " href="?page=">Beranda</a></li>
							<li class="nav-item"><a class="<?php if($_GET['page']=="turnamen"){echo"active ";}else{echo"";};?>nav-link " href="?page=turnamen">Turnamen</a></li>
							<li class="nav-item"><a class="<?php if($_GET['page']=="tim"){echo"active ";}else{echo"";};?>nav-link js-scroll-trigger" href="?page=tim">Tim</a></li>
							<li class="nav-item"><a class="<?php if($_GET['page']=="komunitas"){echo"active ";}else{echo"";};?>nav-link js-scroll-trigger" href="#cta">Komunitas</a></li>
							<li class="nav-item"><a class="<?php if($_GET['page']=="thread"){echo"active ";}else{echo"";};?>nav-link js-scroll-trigger" href="#cta">Thread</a></li>	
							<li class="nav-item"><a class="<?php if($_GET['page']=="streaming"){echo"active ";}else{echo"";};?>nav-link js-scroll-trigger" href="#cta">Streaming</a></li>
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cta"><img src="../assets/img/Group 51.png" style="margin-top:-7px"></a></li>
							<li class="nav-item"><a class="btn btn-primary pt-2 pb-2 pl-4 pr-4" href="../action/user/logout.php" style="font-weight:400;text-transform:none"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
        </nav>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-nomar mobile"  >
            <div class="mainnav-user">
				<div class="container">
				<button data-trigger="#navbar_main"  type="button" class="hamburger"><i class="fa fa-bars"></i></button>

                <a class="d-flex justify-content-center"  href="#page-top"><img src="../assets/img/home/GAMESSTADIUM LOGO WHITE FIX.png" alt=""  width="50%"/></a>
                <a class="" href="#cta" data-trigger="#navbar_main_right"  type="button"><img src="../assets/img/Group 51.png" width="75%"></a>
                
				
					<b class="screen-overlay"></b>
					<nav id="navbar_main" class="mobile-offcanvas bg-primary gs-menu">
					  
					  <ul class="navbar-nav mt-3">
						<li class="nav-item"> <a class="btn-close" href="#"><img src="../assets/img/icon/GAMESSTADIUM LOGO WHITE FIX.png" alt=""  width="75%"/></a>
							</li>
						<li class="nav-item mt-3"> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon awesome-home.png"><span class="mt-1" style="display:block">Home</span></a> </li>
						<li class="nav-item active"> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon metro-trophy.png"><span class="mt-1" style="display:block">Turnamen</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon material-group-work.png"><span class="mt-1" style="display:block">Tim</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="#"><img src="../assets/img/icon/Icon awesome-headset.png"><span class="mt-1" style="display:block">Komunitas</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="#"><img src="../assets/img/icon/Icon awesome-newspaper.png"><span  class="mt-1" style="display:block">Thread</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="#"><img src="../assets/img/icon/Icon awesome-search.png"><span  class="mt-1" style="display:block">Pencarian</span></a> </li>
					  </ul>
					</nav>
					<!--NAVBAR KANAN-->
					<nav id="navbar_main_right" class="mobile-offcanvas mobile-offcanvas-line-left bg-primary gs-menu mobile-offcanvas-right">
					  
					  <ul class="navbar-nav mt-3">
						<li class="nav-item"> <a class="nav-link btn-close " href="#"><img src="../assets/img/Group 51.png" alt=""  width="50%" class="mb-2"/><span class="mt-1" style="display:block">Profile</span></a>
						</li>
						<li class="nav-item active"> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon ionic-ios-pricetags.png"><span class="mt-1"style="display:block">Invoice</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon open-document.png"><span class="mt-1" style="display:block">Thread Saya</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="?page=turnamen"><img src="../assets/img/icon/Icon ionic-ios-notifications.png"><span class="mt-1" style="display:block">Notification</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="#"><img src="../assets/img/icon/Icon awesome-edit.png"><span class="mt-1" style="display:block;" ><center>Ganti<br> Password</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="#"><img src="../assets/img/icon/Icon open-account-logout.png"><span class="mt-1" style="display:block">Log Out</span></a> </li>
					  </ul>
					</nav>
						
					<!--END NAVBAR KANAN-->


				</div>
				
			</div>
        </nav>
		
        <?php
			include "page.php";
			?>
        
        <!-- Footer-->
        <footer class="footer py-4 pt-5 " style="background:#000C17;">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 my-3 my-lg-0">
						<center><img src="../assets/img/home/GAMESSTADIUM LOGO WHITE FIX@2x.png" width="80%"></center>
					</div>
                    <div class="col-lg-3 my-3 my-lg-0">
						<div class="col-12">
							<label class="footer-label" >Menu</label>
							<ul>
								<li><a href="">About Games Stadium</a></li>
								<li><a href="">Services</a></li>
								<li><a href="">The Team</a></li>
								<li><a href="">Advertisements</a></li>
							</ul>
						</div>
                    </div>
					<div class="col-lg-4 my-3 my-lg-0">
						<div class="col-12">
							<label class="footer-label " >Alamat</label>
							
							<ul style="margin-left:30px">
								<li><span class="fa-li" style="margin-left:30px"><i class="fas fa-map-marker-alt text-blue"></i></span>Jl. Hos. Notosuwiryo No.2, Karang Bawang, <br>Teluk, Kec. Purwokerto Sel. <br>Kabupaten Banyumas<br>
								Jawa Tengah 53145
								<br>
								<br>
								<li><span class="fa-li" style="margin-left:30px"><i class="fas fa-phone-alt text-blue"></i></span>+62 898 8292 1736</li>
								<br>
								<li><span class="fa-li" style="margin-left:30px"><i class="fas fa-globe text-blue"></i></span>gamestadium@gmail.com</li>
							</ul>
						</div>
                    </div>
					<div class="col-lg-2">
					<div class="col-12">
                        <label class="footer-label">Media Sosial</label>
						<div class="row">
							<div class="col-12 " >
							<ul class="inline">
								<li><a href=""><i class="fab fa-facebook fa-2x"></i></a>
								<li><a href=""><i class="fab fa-instagram fa-2x"></i></a>
								<li><a href=""><i class="fab fa-youtube fa-2x"></i></a>
								</li>
							</ul>
							</div>
						</div>
                    </div>
                </div>
				<div class="col-12 text-center mt-5 text-blue">
				
					 &copy; Gamesstadium
				</div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="../assets/mail/jqBootstrapValidation.js"></script>
        <script src="../assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/mobile.js";?>
		<script>
			// When the user scrolls down 20px from the top of the document, slide down the navbar
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 20) {
				document.getElementById("navbar").style.top = "-90px";
			  } else {
				document.getElementById("navbar").style.top = "0px";
			  }
			}
		</script>
    </body>
</html>
