<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="admin_style.css">
	<script src="admin_script.js"></script>

	<title>AdminHub</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Customer Data</span>
				</a>
			</li>
			<li>
				<a href="update_delete/shopping_cart/admin.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Modification of Products</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<label for="" onclick="alert('Log out successfully ')">Log out</label> 
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../logo/favicon.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
				</ul>
				</div>
				
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>
							<?php
							global $tprod;
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

								$q="select * from add_to_cart";
								$tord = $conn->query($q);
                                echo mysqli_num_rows($tord);
								?>
						<p>New Order</p></h3>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
                    <h3>
							<?php
							global $tvisitors;
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

								$q="select * from email_register ";
								$tvisitors = $conn->query($q);
                                echo mysqli_num_rows($tvisitors);
								?>
						
						<p>Visitors</p></h3>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
                    <h3>
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

								$q="select * from categories ";
								$totale = $conn->query($q);
                                echo mysqli_num_rows($totale);
								?>
						<p>Categories</p></h3>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<iframe src="ordered.php" frameborder="0" width="100%" height="100%" style="padding: 3%;">
					</iframe>						
				</div>
				<div class="order">
					<div class="head">
						<h3>Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<iframe src="products.php" frameborder="0" width="100%" height="100%" style="padding: 3%;">

					</iframe>						
				</div>
			</div>
		</main>
		<!-- MAIN -->

		<!--orders MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Orders</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php echo mysqli_num_rows($tord);?></h3>
						<p>New Order</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
							<iframe src="ordered.php" frameborder="0" width="100%" height="100%" style="padding: 3%;">

							</iframe>
					</div>
			</div>
		</main>
		<!-- MAIN -->


		<!-- customers MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Customers Data</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						</ul>
				</div>
				</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<h3>
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

								$q="select * from buyers";
								$tbuy = $conn->query($q);
                                echo mysqli_num_rows($tbuy);
								?>
						<p>Customers</p></h3>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><?php echo mysqli_num_rows($tvisitors);
								?></h3>
						<p>Total Visitors</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<iframe src="customers.php" frameborder="0" width="100%" height="100%" style="padding: 3%;">

		</iframe>	
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script src="admin_script.js"></script>
</body>
</html>