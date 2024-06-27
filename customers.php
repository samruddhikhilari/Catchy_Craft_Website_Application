<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update, Delete & Reserve Products</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="logger/structure.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link href="css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="media/css/demo_table.css" />
    <link rel="stylesheet" type="text/css" href="media/themes/smoothness/jquery-ui-1.8.4.custom.css" />
	<link rel="icon" type="image/png" href="media/images/library.png">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/myjquery.js"></script>
    <script src="media/js/jquery.js" type="text/javascript"></script>
    <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	    $('#dtable').dataTable();
	}) </script>
	  <script src="mini-cart.js" defer></script>
</head>
<body>
<center><div id="header"><h1 class="header-text">Customers Data</h1></div></center>
<div id="container2">
	<div class="form_head" align="center">List Of Customers</div><br>
		<div class="control-group">
		    <table name="booklist" id="dtable" width="900">
			<thead>
				<th>Customer Name</th>
				<th>Customer Email</th>
				<th>Customer Address</th>
				<th>Customer Contact</th>
				<th>Customer City</th>
				<th>Customer DOB</th>
			</thead>
<tbody>
<?php
		$servername = "localhost";
		$uname = "root";
		$password = "";
		$dbname = "CachyCraft";
	
		// Create connection
		$conn = new mysqli($servername, $uname, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

	$q="select * from buyers ";
	$result = $conn->query($q);
	while($rs=$result->fetch_assoc())
	{
		$cname=$rs['name'];
		$cemail=$rs['email'];
		$cadd=$rs['address'];
		$number=$rs['number'];
		$pincode=$rs['pinCode'];
		$dob=$rs['dob'];

		echo "<tr class='tb1'>";
		echo "<td>".$cname."</td>";
		echo "<td>".$cemail."</td>";
		echo "<td>".$cadd."</td>";
		echo "<td>".$number."</td>";
		echo "<td>".$pincode."</td>";
		echo "<td>".$dob."</td>";
		echo "</tr>";
}
?>
<tbody>
			</table>
		</div>
</div>
</body>
</html>