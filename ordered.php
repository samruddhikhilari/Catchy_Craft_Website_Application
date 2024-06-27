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
    <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	    $('#dtable').dataTable();
	})
    </script>
</head>
<body>
<center>
	<a href=""><button id="b2" class="btn btn-primary " style="background:blue; color:white;">&nbsp Products Orders</button></a>
	<br><br>
</div></div></center>
<div id="container4">
	<div class="form_head" align="center">List Of Ordered Products</div><br>
	<div class="control-group">
		<table name="booklist" id="dtable" width="900">
			<thead>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>No. of Product</th>
				<th>Price</th>
				<th>Description</th>
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
	$q="select * from add_to_cart order by id asc";
	$result = $conn->query($q);	
	while($rs=$result->fetch_assoc()){
		$pname=$rs['name'];
		$pid=$rs['id'];
		$price=$rs['price'];
		$quantity=$rs['quantity'];
		$description=$rs['description'];

		echo "<tr class='tb1'>";
		echo "<td>"."  ".$pid."</td>";
		echo "<td>".$pname."</td>";
		echo "<td>".$quantity."</td>";
		echo "<td>".$price."</td>";
		echo "<td>".$description."</td>";
		echo "</tr>";
}
?>
</tbody>
		</table>
	</div>
</div>
</body>
</html>