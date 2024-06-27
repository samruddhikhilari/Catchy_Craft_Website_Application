<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom style and script -->
    <link rel="stylesheet" href="login.css">
    <title> Sign In page of Catchy Craft  </title>
</head>
<body>
	<?php
		$uname="";
		$pass="";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$uname = $_POST['uname'];
			$pass = $_POST['password'];
		}
		$duname="";
		$dpass="";
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "CachyCraft";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}


		$sql = "SELECT username, password FROM customerdata WHERE username='$uname'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		  // output data of each row
		  while($row = $result->fetch_assoc()) 
		  {
			$duname = $row['username'];
			$dpass =$row['password'];
		  }
		  setcookie('Username',$duname,time()+468000);

		} 
		else 
		{
		  echo "0 results";
		}

	?>

    <header class="header">
      <img src="./logo/logo.jpg" alt="">
    </header>

            <!-- Sign In form -->
        <div class="login-form-container">
            
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="login_form" method="post">

                <h3 style="right: 0%;">Login</h3>
                <span>Username : </span>
                <input type="email" name="uname" placeholder="enter your email" id="" class="box" value="<?php echo "$uname"?>" required>
                <span>Password :</span>
                <input type="password" name="password" placeholder="enter your password" id="" class="box" value="<?php echo "$pass"?>" required>
				
				<?php 
				if($uname === "" && $pass === "")
				{?> 
					<div class="checkbox">
						<label style="color:blue;">Please fill data....</label>
					</div>
				<?php }
				else 
					{ 
						if(($uname === $duname) && ($pass === $dpass)) 
							{
																	?> 
								<div class="checkbox">
									<label style="color:green;">Data Validate Login Successful!</label>
								</div>
								<?php 
								$rest = $conn->query("DELETE FROM current");
								if($rest)
								{
									$re=$conn->query("INSERT INTO current (name) VALUES ('$uname')");
									if($re)
									{

									}
									else
									{
										die("Current table error is here :".$conn->error);
									}
								}
							}
						else 
							{
									?>  
								<div class="checkbox">
									<label style="color:red;">Please Check, Given Data is Invalid</label>
								</div>
								<?php 
							}
					}

						?>
                <input type="submit" value="Login " class="btn">
				<p><a href="../index_customer.php" class="btn" style="text-decoration:none; color:white;">Next</a></p>
				<p>forget password ? <a href="forget.php"> click here </a></p>
                <p>don't have an account ? <a href="sign_up.php" > create </a></p>
            </form>
        </div>	
</body>
</html>