<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
		
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		 <link href="css/fontawesome/css/all.css" rel="stylesheet" />
		<link href="css/custom.style.css" rel="stylesheet" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body id="page-top" class="bg-primary " id="login" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/home/GAMESSTADIUM LOGO WHITE FIX.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><i class="fas fa-arrow-left"></i> Kembali ke Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class="page-section bg-pattern"  id="register"  >
		<div class="container y" style="margin-top:100px">
      <div class="card  bg-tertiary">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/login/Group 560.png" alt="login" class="login-card-img" >
          </div>
          <div class="col-md-6">
            <div class="card-body text-center m-3 ml-5 mt-5 mr-5">
              <h1 style="font-weight:500">SIGN UP</h1>
			  <br>
              <form action="action/user/register.php" method="POST">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="username" name="username" id="username" class="form-control" placeholder="Username" required>
                  </div>
				  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                  </div>
				  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" name="confirm_password" id="password" class="form-control" placeholder="Confirm Password" required>
                  </div>
				  <div class="form-group mt-4 mb-4 " style="text-align:left">
					<input type="checkbox" required> <span style="font-weight:300">I agree to Terms of Service and Privacy Policy.</span>
                   </div>
				  <div class="form-group mb-4">
                    <button class="btn btn-primary pt-2 pb-2" type="submit" style="border-radius:5px;width:100%">SIGN UP</button>
                  </div>
				  
                </form>
				<div class="form-group mb-4 mt-4 " style="font-weight:400">
                    Sudah punya akun? <a href="login.php">Login</a>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		</section>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
