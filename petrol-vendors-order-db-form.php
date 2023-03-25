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
		Select invoice:
		<form method='get' action='petrol-vendors-order-db.php'>
			<select name='order_id'>
				<?php
					$query=mysqli_query($dbcon,'select * from petrol_orders');
					while($petrol_orders=mysqli_fetch_array($query)){
						echo "<option value='".$petrol_orders['order_id']."'>".'Name:'.$petrol_orders['first_name']. "  Order date" .$petrol_orders['order_date']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
	</body>
</html>