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
  <title> Available petrol orders </title>

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
   
        <!--shell-->
          
           
                
<div  class ="text-center"class="detail-box" style="color: white;background-color: white;">
				

 
 <style>
    td,th{
        border:1px solid gray ;
    }
 </style>
 
<div class="col-sm-8">
<h2 class="text-center" style="color:black">These are the petrol orders made</h2>
<p>
<?php
try {
 // This script retrieves all the records from the users table.
 require('mysqli_connect.php'); // Connect to the database.
 //set the number of rows per display page
 $pagerows = 10; // #1
 // Has the total number of pages already been calculated?
 if ((isset($_GET['p']) && is_numeric($_GET['p']))) {
 //already been calculated
 $pages = htmlspecialchars($_GET['p'], ENT_QUOTES);
 // make sure it is not executable XSS
 }else{//use the next block of code to calculate the number of pages #2
 //First, check for the total number of records
 $q = "SELECT COUNT(order_id) FROM petrol_orders";
 $result = mysqli_query ($dbcon, $q);
 $row = mysqli_fetch_array ($result, MYSQLI_NUM);
 $records = htmlspecialchars($row[0], ENT_QUOTES);
 // make sure it is not executable XSS
 //Now calculate the number of pages
 if ($records > $pagerows){ // #3
 //if the number of records will fill more than one page
 //Calculate the number of pages and round the result up to the
 // nearest integer
 $pages = ceil ($records/$pagerows); //
 }else{
 $pages = 1;
 }
 }//page check finished
 //Declare which record to start with #4
 if ((isset($_GET['s'])) &&( is_numeric($_GET['s'])))
 {
 $start = htmlspecialchars($_GET['s'], ENT_QUOTES);
 // make sure it is not executable XSS
 }else{
 $start = 0;
 }
 $query = "SELECT first_name, last_name, email, price, tax, delivery_fee, quantity, total, company, gas_station, location, phone_number, amount_paid, "; // #5
 $query .= "DATE_FORMAT(order_date, '%M %d, %Y')";
 $query .=
 " AS regdat, order_id FROM petrol_orders ORDER BY order_date ASC";
 $query .=" LIMIT ?, ?";
 $q = mysqli_stmt_init($dbcon);
 mysqli_stmt_prepare($q, $query);
 // bind start and pagerows to SQL Statement
 mysqli_stmt_bind_param($q, "ii", $start, $pagerows);
 // execute query
 mysqli_stmt_execute($q);
 $result = mysqli_stmt_get_result($q);
 if ($result) {
 // If it ran OK (records were returned), display the records.
 // Table header.
 echo '<table class="table table-striped" style="width:100%;height:100%">
 <tr>
 <th scope="col">Delete</th>
 <th scope="col">First Name</th>
 <th scope="col">Last Name</th>
 <th scope="col">Email</th>
 <th scope="col">Price</th>
 <th scope="col">Tax</th>
 <th scope="col">Delivery fee</th>
 <th scope="col">Quantity(L)</th>
 <th scope="col">Total</th>
 <th scope="col">Company</th>
 <th scope="col">Gas station</th>
 <th scope="col">Location</th>
 <th scope="col">Phone number</th>
 <th scope="col">Amount paid</th>
 <th scope="col">Date Registered</th>
 </tr>';
 // Fetch and print all the records:
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 // Remove special characters that might already be in table to
 // reduce the chance of XSS exploits
$order_id = htmlspecialchars($row['order_id'], ENT_QUOTES);
$first_name = htmlspecialchars($row['first_name'], ENT_QUOTES);
 $last_name = htmlspecialchars($row['last_name'], ENT_QUOTES);
 $email = htmlspecialchars($row['email'], ENT_QUOTES);
 $price = htmlspecialchars($row['price'], ENT_QUOTES);
 $tax = htmlspecialchars($row['tax'], ENT_QUOTES);
 $delivery_fee = htmlspecialchars($row['delivery_fee'], ENT_QUOTES);
 $quantity = htmlspecialchars($row['quantity'], ENT_QUOTES);
 $amount_paid = htmlspecialchars($row['amount_paid'], ENT_QUOTES);
 $company = htmlspecialchars($row['company'], ENT_QUOTES);
 $gas_station = htmlspecialchars($row['gas_station'], ENT_QUOTES);
 $location = htmlspecialchars($row['location'], ENT_QUOTES);
 $phone_number = htmlspecialchars($row['phone_number'], ENT_QUOTES);
 $total = htmlspecialchars($row['total'], ENT_QUOTES);
$order_date = htmlspecialchars($row['regdat'], ENT_QUOTES);
 echo '<tr>
 <td><a href="delete-petrol-orders.php?id=' . $order_id .
 '">Delete</a></td>
 <td>' . $first_name . '</td>
<td>' . $last_name . '</td>
<td>' . $email . '</td>
<td>' . $price . '</td>
<td>' . $tax . '</td>
<td>' . $delivery_fee . '</td>
<td>' . $quantity . '</td>
<td>' . $total . '</td>
<td>' . $company . '</td>
<td>' . $gas_station . '</td>
<td>' . $location . '</td>
<td>' . $phone_number . '</td>
<td>' . $amount_paid . '</td>
<td>' . $order_date . '</td>
</tr>';
 }
 echo '</table>'; // Close the table.
 mysqli_free_result ($result); // Free up the resources.
 }
 else { // If it did not run OK.
 // Error message:
 echo '<p class="text-center">The current users could not be ';
 echo 'retrieved. We apologize for any inconvenience.</p>';
 // Debug message:
 // echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
 exit;
 } // End of else ($result)
 // Now display the total number of records/members. #6
 $q = "SELECT COUNT(order_id) FROM petrol_orders";
 $result = mysqli_query ($dbcon, $q);
 $row = mysqli_fetch_array ($result, MYSQLI_NUM);
 $members = htmlspecialchars($row[0], ENT_QUOTES);
 mysqli_close($dbcon); // Close the database connection.
 $echostring = "<p class='text-center' style='color:black;'>Total orders: $members </p>";
 $echostring .= "<p class='text-center'>";
 if ($pages > 1) { // #7
 //What number is the current page?
 $current_page = ($start/$pagerows) + 1;
 //If the page is not the first page then create a Previous link
 if ($current_page != 1) {
 $echostring .=
 '<a href="admin-view-petrol-orders.php?s=' . ($start - $pagerows) .
 '&p=' . $pages . '">Previous</a> ';
 }
 //Create a Next link #8
 if ($current_page != $pages) {
 $echostring .=
 ' <a href="admin-view-petrol-orders.php?s=' . ($start + $pagerows) .
 '&p=' . $pages . '">Next</a> ';
 }
 $echostring .= '</p>';
 echo $echostring;
 }
} //end of try
catch(Exception $e) // We finally handle any problems here
{
 // print "An Exception occurred. Message: " . $e->getMessage();
 print "The system is busy please try later";
}
catch(Error $e)
{
 //print "An Error occurred. Message: " . $e->getMessage();
 print "The system is busy please try again later.";
}
?>
</div>
<!-- Right-side Column Content Section -->
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













































