<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Rawlings16$";
$dbname = "signupdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
