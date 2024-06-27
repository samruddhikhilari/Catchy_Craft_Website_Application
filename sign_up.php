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
		$password="";
		$datapass="";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$uname=$_POST['uname'];
			$password=$_POST['pass'];
		}
		$cont = new mysqli("localhost", "root", "", "CachyCraft"); 	
		?> 

		  <!-- header -->
		  <header class="header">
			<img src="./logo/logo.jpg" alt="">
		  </header>
            <!-- Sign up form -->
        <div class="login-form-container">
            
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="sign_up" method="post">

                <h3 style="right: 0%;">Sign-UP</h3>
                <span>Create Username : </span>
                <input type="email" name="uname" placeholder="enter your email" id="" class="box" value="<?php echo "$uname"?>" required>
                <span>Create Password :</span>
				<input type="password" name="pass" placeholder="enter your password" id="" class="box" value="<?php echo "$password"?>" required>
		
		<?php
		if($uname === "" && $password === "")
			{
				echo"<h1 style='align:center;'>Please fill data</h1>"; 
			}
		else
			{
				if ($cont === false)
					{ 
							die("ERROR: Could not connect. ".$cont->connect_error); 
					} 
				else
				{
						$que = "SELECT  password FROM customerdata WHERE username='$uname'";
						$result = $cont->query($que);

						if ($result->num_rows > 0) 
						{
							echo"<h1 style='align:center;'>You Have already account </h1>"; 
						} 
						else
						{
							$sql = "INSERT INTO CustomerData (username,password) VALUES('$uname','$password') "; 
							if ($cont->query($sql) === true) 
								{ 
									$conn = new mysqli("localhost","root"," ","CachyCraft");
									if($conn->connect_error)
									{
										die("Error : ".$conn->connect_error);
									}

									$result = $conn->query("DELETE FROM current");
									if($result)
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
									echo"<h1 style='align:center;'>Login successfully.</h1>"; 
								} 
							else
								{ 
									echo "ERROR: Could not able to execute $sql. "
										.$cont->error; 
								} 
								setcookie('Username',$duname,time()+468000);
						}
				}
			}		
		// Close connection 
		$cont->close(); 
		?> 

<input type="submit" value="Sign-up" class="btn">
<p><a href="../index_customer.php" class="btn" style="text-decoration:none; color:white;">Next</a></p>
                <p>I Have an account ? <a href="login.php" > click here</a></p>

            </form>
        </div>
</body>
</html>