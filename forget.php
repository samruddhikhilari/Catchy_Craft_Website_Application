<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom style and script -->
    <link rel="stylesheet" href="login.css">
    <script src="sign_in.js"></script>
    <title> Forget Password of Catchy Craft  </title>
</head>
<body>
   
    <header class="header">
      <img src="./logo/logo.jpg" alt="">
    </header>
		<?php
					$uname = $_POST['uname'];
					$npass = $_POST['npass'];
				
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
					

					$sql = "UPDATE customerdata SET password='$npass' WHERE username='$uname'"; 
					
		?>
		
            <!-- Sign In form -->
        <div class="login-form-container">
            
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="forget_page" method="post">

                <h3 style="right: 0%;">Reset password</h3>
				<span>Enter UserName : </span>
                <input type="email" name="uname" placeholder="enter username" id="" class="box" value='<?php echo"$uname"?>' required>
                <span>Enter New Password : </span>
                <input type="password" name="npass" placeholder="enter your password" id="" class="box" value='<?php echo"$npass"?>' required>
                <span>Confirm Password :</span>
                <input type="password" name="npass" placeholder="confirm password" id="" class="box" value='<?php echo"$npass"?>' required>
                <input type="submit" value="Reset Password" class="btn">
				<p><a href="../index_customer.php" class="btn" style="text-decoration:none; color:white;">Next</a></p>
                <p>Login<a href="login.php">  click here </a></p>
				
				<?php
				if($conn->query($sql) === TRUE)
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

						?>
						<p><strong>Password set successfully  </strong></p>
				<?php
					 }
				else
				{
					?>
					<p><strong>Password must cotain alphabets , numbers and special symbols </strong></p>
					 <?php
				}
					 ?>
            </form>
        </div>

</body>
</html>