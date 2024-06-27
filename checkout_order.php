<?php
$cname=$_POST['fullName'];
$cpho=$_POST['phone'];
$cemail=$_POST['email'];
$cadd=$_POST['address'];
$ccity=$_POST['city'];

$cont = new mysqli("localhost", "root", "", "CachyCraft"); 

if ($cont === false) { 
	die("ERROR: Could not connect. ".$cont->connect_error); 
} 

$sql = "INSERT INTO orders (customer_name,contact,email,address,city) 
			VALUES('$cname','$cpho','$cemail','$cadd','$ccity') "; 
	if ($cont->query($sql) === true) 
{ 
} 
else
{ 
	echo "ERROR: Could not able to execute $sql. "
		.$cont->error; 
} 
?>