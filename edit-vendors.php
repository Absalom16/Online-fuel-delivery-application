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
  <title> edit vendors </title>

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
 try
 {
 // After clicking the Edit link in the found_record.php page. 
// This code is executed #1
 // The code looks for a valid user ID, either through GET or POST:
 if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
 // From view_users.php
 $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
 } elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {
 // Form submission.
 $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
 } else { // No valid ID, kill the script.
 echo '<p class="text-center">This page has been accessed in error.</p>';
 
 exit();
 }
 require ('./mysqli_connect.php');
 // Has the form been submitted?
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $errors = array();
 // Look for the first name: #2
 $first_name =
 filter_var( $_POST['first_name'], FILTER_SANITIZE_STRING);
 if (empty($first_name)) {
 $errors[] = 'You forgot to enter your first name.';
 }
 // Look for the last name:
 $last_name = filter_var( $_POST['last_name'], FILTER_SANITIZE_STRING);
 if (empty($last_name)) {
 $errors[] = 'You forgot to enter your last name.';
 }
 // Look for the email address:
 $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
 if ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
 $errors[] = 'You forgot to enter your email address';
$errors[] = ' or the e-mail format is incorrect.';
 }
 // Look for phone number:
    $phone_number = filter_var( $_POST['phone_number'], FILTER_SANITIZE_STRING);
    if (empty($last_name)) {
    $errors[] = 'You forgot to enter your phone number.';
    }
    // Look for account number:
 $account_no = filter_var( $_POST['account_no'], FILTER_SANITIZE_STRING);
 if (empty($last_name)) {
 $errors[] = 'You forgot to enter your account number.';
 }
 if (empty($errors)) { // If everything's OK. #3
 $q = mysqli_stmt_init($dbcon);
 $query = 'SELECT vendor_id FROM vendors WHERE email=? AND vendor_id !=?';
 mysqli_stmt_prepare($q, $query);
 // bind $id to SQL Statement
 mysqli_stmt_bind_param($q, 'si', $email, $id);
 // execute query
 mysqli_stmt_execute($q);
 $result = mysqli_stmt_get_result($q);
 if (mysqli_num_rows($result) == 0) {
 // e-mail does not exist in another record #4
 $query = 'UPDATE vendors SET first_name=?, last_name=?, email=?, phone_number=?, account_no=?';
 $query .= ' WHERE vendor_id=? LIMIT 1';
$q = mysqli_stmt_init($dbcon);
mysqli_stmt_prepare($q, $query);
// bind values to SQL Statement
mysqli_stmt_bind_param($q, 'sssssi', $first_name, $last_name, $email, $phone_number, $account_no, $id);
 // execute query
mysqli_stmt_execute($q);
if (mysqli_stmt_affected_rows($q) == 1) { // Update OK
 // Echo a message if the edit was satisfactory:
 echo '<h3 class="text-center">The user has been edited.</h3>';
 } else { // Echo a message if the query failed.
 echo '<p class="text-center">The user could not be edited due ';
 echo 'to a system error.';
 echo ' We apologize for any inconvenience.</p>'; // Public message.
 //echo '<p>' . mysqli_error($dbcon) . '<br />Query: ' . $q . '</p>';
 // Debugging message.
 // Message above is only for debug and should not display SQL in live //mode
 }
 } else { // Already registered.
 echo '<p class="text-center">The email address has ';
 echo 'already been registered.</p>';
 }
 } else { // Display the errors.
 echo '<p class="text-center">The following error(s) occurred:<br />';
 foreach ($errors as $msg) { // Echo each error.
 echo " - $msg<br />\n";
 }
 echo '</p><p>Please try again.</p>';
 } // End of if (empty($errors))section.
 } // End of the conditionals
 // Select the user's information to display in textboxes: #5
 $q = mysqli_stmt_init($dbcon);
 $query = "SELECT first_name, last_name, email, phone_number, account_no FROM vendors WHERE vendor_id=?";
 mysqli_stmt_prepare($q, $query);
 // bind $id to SQL Statement
 mysqli_stmt_bind_param($q, 'i', $id);
 // execute query
 mysqli_stmt_execute($q);
 $result = mysqli_stmt_get_result($q);
 $row = mysqli_fetch_array($result, MYSQLI_NUM);
 if (mysqli_num_rows($result) == 1) { // Valid user ID, display the form.
 // Get the user's information:
 // Create the form:
?>
<h2 class="h2 text-center">Edit Record</h2>
<form action="edit-vendors.php" method="post"
 name="editform" id="editform">
<div class="form-group row">
 <label for="first_name" class="col-sm-4 col-form-label">
 First Name:</label>
<div class="col-sm-8">
 <input type="text" class="form-control" id="first_name" name="first_name"
 placeholder="First Name" maxlength="30" required
 value="<?php echo htmlspecialchars($row[0], ENT_QUOTES); ?>" >
</div>
</div>
<div class="form-group row">
 <label for="last_name" class="col-sm-4 col-form-label">
 Last Name:</label>
<div class="col-sm-8">
 <input type="text" class="form-control" id="last_name" name="last_name"
 placeholder="Last Name" maxlength="40" required
 value="<?php echo htmlspecialchars($row[1], ENT_QUOTES); ?>">
</div>
</div>
<div class="form-group row">
 <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
<div class="col-sm-8">
 <input type="email" class="form-control" id="email" name="email"
 placeholder="E-mail" maxlength="60" required
 value="<?php echo htmlspecialchars($row[2], ENT_QUOTES); ?>">
</div>
</div>
<div class="form-group row">
 <label for="phone_number" class="col-sm-4 col-form-label">
 Phone number:</label>
<div class="col-sm-8">
 <input type="text" class="form-control" id="phone_number" name="phone_number"
 placeholder="Phone number" maxlength="40" required
 value="<?php echo htmlspecialchars($row[3], ENT_QUOTES); ?>">
</div>
</div>
<div class="form-group row">
 <label for="account_no" class="col-sm-4 col-form-label">
 Account number:</label>
<div class="col-sm-8">
 <input type="text" class="form-control" id="account_no" name="account_no"
 placeholder="Account number" maxlength="40" required
 value="<?php echo htmlspecialchars($row[4], ENT_QUOTES); ?>">
</div>
</div>
 <input type="hidden" name="id" value=" <?php echo $id ?>" /> <!-- #6 -->
<div class="form-group row">
 <label for="" class="col-sm-4 col-form-label"></label>
<div class="col-sm-8">
 <input id="submit" class="btn btn-primary" type="submit" name="submit" 
value="Edit">
</div>
</div>
</form>
<?php
 } else { // The user could not be validated
echo '<p class="text-center">This page has been accessed in error.</p>';
 }
 mysqli_stmt_free_result($q);
 mysqli_close($dbcon);
 }
 catch(Exception $e)
 {
 print "The system is busy. Please try later";
 //print "An Exception occurred. Message: " . $e->getMessage();
 }
 catch(Error $e)
 {
 print "The system is currently buys. Please try later";
 //print "An Error occurred. Message: " . $e->getMessage();
 }
?>
</div>
          

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




















