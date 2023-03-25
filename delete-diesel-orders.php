<!DOCTYPE html>
<html lang="en">
<head>
    
	<!-- Basic -->
	<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Delete diesel </title>

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
  
<style>

  .px-5{
    color: black;
  }
</style>
</head>
<body>
    
    <div class="hero_area">
   <!-- header section strats -->
    <header class="header_section" style="background-color:  #222831; border-radius:20px ; ">
      <div class="container" >
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand">
            <span>
              fuel vendors ltd
            </span>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="administrator.php">Home <span class="sr-only">(current)</span></a>
              </li>          
        </nav>
      </div>
</header>
<section class="food_section layout_padding-bottom">
    <div class="container">
      

      <div class="filters-content">
        <div class="row grid">

        <!--shell-->
          <div class="col-sm-4 col-lg-12 all shell">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/petrol.jpg" alt="">
                </div>
                <div class="detail-box">
                <?php
try {
// Check for a valid user ID, through GET or POST: #1
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
// From view_users.php
 $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {
 // Form submission.
 $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
 } else { // No valid ID, kill the script.
 // return to login page
 header("Location: login.php");
 exit();
 }
 require ('./mysqli_connect.php');
 // Check if the form has been submitted: #2
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $sure = htmlspecialchars($_POST['sure'], ENT_QUOTES);
 if ($sure == 'Yes') { // Delete the record.
 // Make the query:
 // Use prepare statement to remove security problems
 $q = mysqli_stmt_init($dbcon);
 mysqli_stmt_prepare($q, 'DELETE FROM diesel_orders WHERE order_id=? LIMIT 1');
 // bind $id to SQL Statement
 mysqli_stmt_bind_param($q, "s", $id);
 // execute query
 mysqli_stmt_execute($q);
 if (mysqli_stmt_affected_rows($q) == 1) { // It ran OK
 // Print a message:
 echo '<h3 class="text-center">The record has been deleted.</h3>';
 } else { // If the query did not run OK display public message
 echo '<p class="text-center">The record could not be deleted.';
 echo '<br>Either it does not exist or due to a system error.</p>';
 // echo '<p>' . mysqli_error($dbcon ) . '<br />Query: ' . $q . '</p>';
 // Debugging message. When live comment out because this displays SQL
 }
 } else { // User did not confirm deletion.
 echo '<h3 class="text-center">The user has NOT been deleted as ';
 echo 'you requested</h3>';
 }
 } else { // Show the form. #3
 $q = mysqli_stmt_init($dbcon);
 $query = "SELECT CONCAT(first_name, ' ', last_name) FROM ";
 $query .= "diesel_orders WHERE order_id=?";
 mysqli_stmt_prepare($q, $query);
 // bind $id to SQL Statement
 mysqli_stmt_bind_param($q, "s", $id);
 // execute query
 mysqli_stmt_execute($q);
 $result = mysqli_stmt_get_result($q);
 $row = mysqli_fetch_array($result, MYSQLI_NUM); // get user info
 if (mysqli_num_rows($result) == 1) {
 // Valid user ID, display the form.
 // Display the record being deleted: #4
 $user = htmlspecialchars($row[0], ENT_QUOTES);
?>
<h2 class="h2 text-center">
Are you sure you want to permanently delete <?php echo $user; ?>?</h2>
<form action="delete-diesel-orders.php" method="post"
 name="deleteform" id="deleteform">
<div class="form-group row">
 <label for="" class="col-sm-4 col-form-label"></label>
<div class="col-sm-8" style="padding-left: 70px;">
 <input type="hidden" name="id" value="<?php echo $id; ?>">
 <input id="submit-yes" class="btn btn-primary" type="submit" name="sure" 
value="Yes"> -
 <input id="submit-no" class="btn btn-primary" type="submit" name="sure" value="No">
</div>
</div>
</form>
<?php
 } else { // Not a valid user ID.
 echo '<p class="text-center">This page has been accessed in error.</p>';
 }
 } // End of the main submission conditional.
 
 }
 catch(Exception $e)
 {
 print "The system is busy. Please try again.";
 //print "An Exception occurred. Message: " . $e->getMessage();
 }
 catch(Error $e)
 {
 print "The system is currently busy. Please try again soon.";
 //print "An Error occurred. Message: " . $e->getMessage();
 }
?>

          

                   </div>
        </div>
      </div>
    </div>
  </section>
    
        
		<!-- footer section -->
		<footer class="footer_section" style="border-radius:20px ;" >
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
                  Call +254714022687
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
              Fuel vendors.ltd
            </a>
            <p>
             simply affordable for everyone.
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
            24/7
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
  <!-- footer section -->

  
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
	</body>
</html>


















     