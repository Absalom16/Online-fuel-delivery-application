<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    THIS IS THE VENDORS PAGE!!!
    
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
?> 
<html>
	<head>
		<title>Invoice Generator</title>
	</head>
	<body>
        <h2>PETROL ORDERS</h2>
		Select invoice:
		<form method='get' action='petrol-vendors-order-db.php'>
			<select name='order_id'>
				<?php
					$query=mysqli_query($dbcon,'select * from petrol_orders');
					while($petrol_orders=mysqli_fetch_array($query)){
						echo "<option value='".$petrol_orders['order_id']."'>".'Name:'.$petrol_orders['first_name']. "  Order date:" .$petrol_orders['order_date']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form><br><br>
        <h2>DIESEL ORDERS</h2><br>
        Select invoice:
		<form method='get' action='diesel-vendors-order-db.php'>
			<select name='order_id'>
				<?php
					$query=mysqli_query($dbcon,'select * from diesel_orders');
					while($diesel_orders=mysqli_fetch_array($query)){
						echo "<option value='".$diesel_orders['order_id']."'>". 'Name:'.$diesel_orders['first_name']. "Order date:".$diesel_orders['order_date']. "</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
	</body>
</html>
</body>
</html>
</body>
</html>