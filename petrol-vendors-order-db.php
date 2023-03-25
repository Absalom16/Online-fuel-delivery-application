<?php
require('fpdf17/fpdf.php');
Define('DB_USER', 'root');
Define('DB_PASSWORD', 'Rawlings16$');
Define('DB_HOST', 'localhost');
Define('DB_NAME', 'signupdb');
//make the connection:
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbcon, 'utf8'); //set the encoding...

$query=mysqli_query($dbcon,"select * from petrol_orders where
order_id = '".$_GET['order_id']."'");
$petrol_orders=mysqli_fetch_array($query);


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'FUEL VENDORS.LTD',0,0);
$pdf->Cell(59	,5,'ORDER REQUEST',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[Tell: +254714022687]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Email: demo@gmail.com]',0,0);
$pdf->Cell(25	,5,'Order date: ',0,0);
$pdf->Cell(34	,5,sprintf($petrol_orders['order_date']),0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Order no: ',0,0);
$pdf->Cell(34	,5,($petrol_orders['order_id']),0,1);//end of line



//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Request by :',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(25	,5,'First name :',0,0);
$pdf->Cell(90	,5,$petrol_orders['first_name'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(25	,5,'Last name :',0,0);
$pdf->Cell(90	,5,$petrol_orders['last_name'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(25	,5,'email :',0,0);
$pdf->Cell(90	,5,$petrol_orders['email'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(25	,5,'Phone no :',0,0);
$pdf->Cell(90	,5,$petrol_orders['phone_number'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line


//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(100	,5,'Product: Petrol',1,1);


$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($dbcon,"select * from petrol_orders where order_id = '".$petrol_orders['order_id']."'");
$tax=0;
$total=0;
while($petrol_orders=mysqli_fetch_array($query)){
	$pdf->Cell(100	,5,'Price :'.$petrol_orders['price'],1,1);
	$pdf->Cell(100	,5,'Tax :'.number_format($petrol_orders['tax']),1,1);
	$pdf->Cell(100	,5,'Delivery fee :'.number_format($petrol_orders['delivery_fee']),1,1);
	$pdf->Cell(100	,5,'Quantity :'.number_format($petrol_orders['quantity']),1,1);
	$pdf->Cell(100	,5,'Total :'.number_format($petrol_orders['total']),1,1);
	$pdf->Cell(100	,5,'Gas station :'.sprintf($petrol_orders['gas_station']),1,1);
	$pdf->Cell(100	,5,'Location :'.sprintf($petrol_orders['location']),1,1);
	$pdf->Cell(100	,5,'Amount paid :'.sprintf($petrol_orders['amount_paid']),1,1);//end of line
	$tax+=$petrol_orders['tax'];
	$total+=$petrol_orders['total'];
}

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )



















$pdf->Output();
?>
