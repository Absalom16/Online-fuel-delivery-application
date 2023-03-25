<!--validate input-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
   require('process-register-page.php');
  }//End of the main submit conditional.
  ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Fuel vendors.ltd</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

	<title>Signup</title>
</head>
<body>

	<style type="text/css">
        body{
            position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	background-color: #222831;
    background-size: cover;
        }
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: #f1f2f3;
		margin: auto;
		width: 400px;
		padding: 20px;
	}
	.btn-box{
		margin-left: 100px;
	}
	.btn-box a {
  display: inline-block;
  padding: 10px 55px;
  background-color: #ffbe33;
  color: #ffffff;
  border-radius: 20px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: none;
}

.btn-box a:hover {
  background-color: #e69c00;
}


	</style>
	<!-- header section strats -->
    <header class="header_section" >
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>
              Fuel vendors.ltd
            </span>
          </a>

        
      
        </nav>
      </div>
    </header>
    <!-- end header section -->

	<div id="box">
		
		<form method="post">
    <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

<input id="text" type="text" name="first_name" placeholder="First-name" required
      value="<?php if (isset($_POST['first_name']))echo $_POST['first_name'];?>" ><br><br>
<input id="text" type="text" name="last_name" placeholder="Last name" required
      value="<?php if (isset($_POST['last_name']))echo $_POST['last_name'];?>" ><br><br>
<input id="text" type="text" name="email" placeholder="Email"  required
      value="<?php if (isset($_POST['email']))echo $_POST['email'];?>" ><br><br>
<input id="text" type="text" name="phone_number" placeholder="phone number" required
      value="<?php if (isset($_POST['phone_number1']))echo $_POST['phone_number1'];?>" ><br><br>
<input id="text" type="password" name="password1" placeholder="Password"required
      value="<?php if (isset($_POST['password1']))echo $_POST['password1'];?>"><br><br>
<input id="text" type="password" name="password2" placeholder="Confirm password"required
      value="<?php if (isset($_POST['password2']))echo $_POST['password2'];?>"><br><br>

<input id="button" type="submit" value="Signup"><br><br>

<div class="btn-box">
  <a href="login.php">
  LOGIN
  </a>
</div>
		</form>
	</div>
	<!-- footer section -->
	<footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>