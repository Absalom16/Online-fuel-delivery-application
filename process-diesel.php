<?php


try{
    $errors=array();//initialize an error array
    //check for price
    $price=filter_var($_POST['price'],FILTER_SANITIZE_STRING);
    if(empty($price)){
        $errors[]='you forgot to enter price.';
    }
    //check for tax
    $tax=filter_var($_POST['tax'],FILTER_SANITIZE_STRING);
    if(empty($tax)){
        $errors[]='you forgot to enter tax.';
    }
    //check for delivery_fee
    $delivery_fee=filter_var($_POST['delivery_fee'],FILTER_SANITIZE_STRING);
    if(empty($delivery_fee)){
        $errors[]='you forgot to enter delivery fee.';
    }
    //check for quantity
    $quantity=filter_var($_POST['quantity'],FILTER_SANITIZE_STRING);
    if(empty($quantity)){
        $errors[]='you forgot to enter quantity.';
    }
    //ceck for total
    $total=filter_var($_POST['total'],FILTER_SANITIZE_STRING);
    if(empty($total)){
        $errors[]='you forgot to enter total.';
    }
    //check for company
    $company=filter_var($_POST['company'],FILTER_SANITIZE_STRING);
    if(empty($company)){
        $errors[]='you forgot to enter company.';
    }
    //check for gas_station
    $gas_station=filter_var($_POST['gas_station'],FILTER_SANITIZE_STRING);
    if(empty($gas_station)){
        $errors[]='you forgot to enter gas station.';
    }
    //check for location
    $location=filter_var($_POST['location'],FILTER_SANITIZE_STRING);
    if(empty($location)){
        $errors[]='you forgot to enter location.';
    }
    //check for phone_number
    $phone_number=filter_var($_POST['phone_number'],FILTER_SANITIZE_STRING);
    if(empty($phone_number)){
        $errors[]='you forgot to enter phone number.';
    }
    //check for amount_paid
    $amount_paid=filter_var($_POST['amount_paid'],FILTER_SANITIZE_STRING);
    if(empty($amount_paid)){
        $errors[]='you forgot to enter price.';
    }
    if(empty($errors)){//if everything is ok, record to database
        require('diesel.php');
        require('mysqli_connect.php');//connect to database
        //make the query
        $query="INSERT INTO diesel_orders (order_id, price, tax, delivery_fee, quantity, total,company, gas_station, location, phone_number, amount_paid, order_date)";
        $query .="VALUES(' ',?,?,?,?,?,?,?,?,?,?, NOW() )";
        $q=mysqli_stmt_init($dbcon);
    mysqli_stmt_prepare($q, $query);
    //use prepared statement to ensure that only text is inserted
    //bind fields to SQL statement
    mysqli_stmt_bind_param($q, 'ssssssssss',  $price, $tax, $delivery_fee ,$quantity ,$total, $company, $gas_station, $location, $phone_number, $amount_paid );
    //execute query
    mysqli_stmt_execute($q);
    if(mysqli_stmt_affected_rows($q)==1) {//one reord inserted
        header ("location:diesel-db-update-form.php");
        exit();
    }else{//if it did not run ok.
        //public message:
        $errorstring=
        "<p class='text-center col-sm-8' style='color:red'>";
        $errorstring.=
        "system error<br />you could not be registered due";
        $errorstring .=
        "to a system error. we apologize for any inconvenience.</p>";
        echo "<p class= 'text-center col-sm-2'
        style='color:red'>$errorstring</p>";
        //debugging message below do not use in production
        echo '<p>' .mysqli_error($dbcon) .'<br><br>Query: ' .$query .'</p>';
        mysqli_close($dbcon); //close the database connection.
        //include footer then close program to stop execution
        echo '<footer class="jumbotron text-center col-sm-12"
        style="padding-bottom:1px; padding-top:8px">
        include ("footer.php");
        </footer>';
        exit();
    }          
    }else{//report the errors.
        $errorstring=
          "error! <br /> the following error(s) occurred:<br>";
          foreach($errors as $msg) {//print each error.
               $errorstring.=" - $msg<br>\n";
        }
        $errorstring.="please try again.<br>";
        echo "<p class=' text-center col-sm-2'
        style='color:red'>$errorstring</p>";
    }// end of if (empty($errors)) IF.
    }
    catch(Exception $e) // we finally handle any problems here
    {
        // print "an exception occurred. message: " .$e->getMessage();
        print "the system is busy please try later";
    }
    catch(Error $e)
    {
        //print "an error occurred. Message: " .$e->getMessage();
        print "the system is busy please try again later.";
    }
?>