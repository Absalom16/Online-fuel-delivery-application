<?php
//create a connection to the admintable database.
//set the encoding and the access details as constants:
Define('DB_USER', 'root');
Define('DB_PASSWORD', 'Rawlings16$');
Define('DB_HOST', 'localhost');
Define('DB_NAME', 'signupdb');
//make the connection:
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbcon, 'utf8'); //set the encoding...

// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
  }
  
  $sql = "UPDATE diesel_orders JOIN users ON diesel_orders.phone_number=users.phone_number SET diesel_orders.first_name=users.first_name";
  $sql2 = "UPDATE diesel_orders JOIN users ON diesel_orders.phone_number=users.phone_number SET diesel_orders.last_name=users.last_name";
  $sql3 = "UPDATE diesel_orders JOIN users ON diesel_orders.phone_number=users.phone_number SET diesel_orders.email=users.email";
  
  if ($dbcon->query($sql)&&$dbcon->query($sql2)&&$dbcon->query($sql3) === TRUE) {header("Location: diesel-receipt-generation.php");
    
  } else {
    echo "Error updating record: " . $dbcon->error;
  }
  
  $dbcon->close();
?> 