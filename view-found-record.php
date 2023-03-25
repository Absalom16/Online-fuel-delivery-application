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
  <title> Petrol receipt </title>

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
                <div class="col-sm-8">
<h2 class="text-center">These are found users</h2>
<p>
<?php
try
{
 // This script retrieves records from the users table.
 require ('mysqli_connect.php'); // Connect to the db.
 echo '<p class="text-center">If no record is shown, ';
 echo 'this is because you had an incorrect ';
 echo ' or missing entry in the search form.';
 echo '<br>Click the back button on the browser and try again</p>';
 // #1
 
 $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
 // Since it's a prepared statement below this sanitizing is not needed
 // However, to consistently retrieve than sanitize is a good habit
 // #2
 $query = "SELECT  email, ";
 $query .= "DATE_FORMAT(registration_date, '%M %d, %Y')";
 $query .=" AS regdat, user_id FROM users WHERE ";
 $query .= "email=? ";
 $query .="ORDER BY registration_date ASC ";
 $q = mysqli_stmt_init($dbcon);
 mysqli_stmt_prepare($q, $query);
 // bind values to SQL Statement
 mysqli_stmt_bind_param($q, 's', $email);
 // execute query
 mysqli_stmt_execute($q);
 $result = mysqli_stmt_get_result($q);
 if ($result) { // If it ran, display the records.
 // Table header.
 echo '<table class="table table-striped">
 <tr>
 <th scope="col">Edit</th>
 <th scope="col">Delete</th>
  <th scope="col">Email</th>
 <th scope="col">Date Registered</th>
 </tr>';
 // Fetch and display the records:
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 // Remove special characters that might already be in table to
 // reduce the chance of XSS exploits
$user_id = htmlspecialchars($row['user_id'], ENT_QUOTES);
 $email =
 htmlspecialchars($row['email'], ENT_QUOTES);
 $registration_date =
 htmlspecialchars($row['regdat'], ENT_QUOTES);
 echo '<tr>
 <td><a href="edit-users.php?id=' . $user_id .
'">Edit</a></td>
<td><a href="delete-users.php?id=' . $user_id .
 '">Delete</a></td>
 <td>' . $email . '</td>
<td>' . $registration_date . '</td>
</tr>';
 }
 echo '</table>'; // Close the table.
 //
 mysqli_free_result ($result); // Free up the resources.
 } else { // If it did not run OK.
 // Public message:
echo '<p class="text-center">The current users could not be retrieved.';
 echo 'We apologize for any inconvenience.</p>';
 // Debugging message:
 //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
 //Show $q is debug mode only
 }
// End of if ($result). Now display the total number of records/members.
 mysqli_close($dbcon); // Close the database connection.
 }
 catch(Exception $e)
 {
 print "The system is currently busy. Please try later.";
 //print "An Exception occurred. Message: " . $e->getMessage();
 }
 catch(Error $e)
 {
 print "The system us busy. Please try later.";
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










