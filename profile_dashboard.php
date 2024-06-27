<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile_pop_up_style.css">
    <link rel="stylesheet" href="update_user/profile_style.css">
    <link rel="stylesheet" href="update_user/profile_script.js">
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link href=
"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
		rel="stylesheet">
</head>
<script language="javascript">

    function handleFileSelect(event)
     {
        const file = event.target.files[0]; // Get the selected file
        const filePath = URL.createObjectURL(file); // Get the file path using Object URL

        document.getElementById("profile").src=filePath;
    }
    function set_profile()
    {
        document.getElementById("profile").src= logo.jpg;
    }

</script>
<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <button class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">View Profile</button>

                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Update Profile</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Delete Profile</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Orders</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="../logo/logo.jpg" alt class="d-block ui-w-80" id="profile" width="35%">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput" onclick="handleFileSelect(event)">
                                    </label> &nbsp;
                                  <!-- <button type="button" class="btn btn-default md-btn-flat" onclick="set_profile()">Reset</button>--> 
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <!-- view profile page -->
                                <!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                body {font-family: Arial, Helvetica, sans-serif;}
                                
                                /* Full-width input fields */
                                input[type=text], input[type=password] {
                                  width: 100%;
                                  padding: 12px 20px;
                                  margin: 8px 0;
                                  display: inline-block;
                                  border: 1px solid #ccc;
                                  box-sizing: border-box;
                                }
                                
                                /* Set a style for all buttons */
                                button {
                                  background-color: #04AA6D;
                                  color: white;
                                  padding: 14px 20px;
                                  margin: 8px 0;
                                  border: none;
                                  cursor: pointer;
                                  width: 100%;
                                }
                                
                                button:hover {
                                  opacity: 0.8;
                                }
                                
                                /* Extra styles for the cancel button */
                                .cancelbtn {
                                  width: auto;
                                  padding: 10px 18px;
                                  background-color: #f44336;
                                }
                                
                                /* Center the image and position the close button */
                                .imgcontainer {
                                  text-align: center;
                                  margin: 24px 0 12px 0;
                                  position: center;
                                }
                                
                                img.avatar {
                                  width: 40%;
                                  border-radius: 50%;
                                }
                                
                                .container {
                                  padding: 60px;
                                }
                                
                                span.psw {
                                  float: right;
                                  padding-top: 16px;
                                }
                                
                                /* The Modal (background) */
                                .modal {
                                  display: none; /* Hidden by default */
                                  position: fixed; /* Stay in place */
                                  z-index: 1; /* Sit on top */
                                  left: 0;
                                  top: 0;
                                  width: 100%; /* Full width */
                                  height: 100%; /* Full height */
                                  overflow: auto; /* Enable scroll if needed */
                                  background-color: rgb(0,0,0); /* Fallback color */
                                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                  padding-top: 60px;
                                }
                                
                                /* Modal Content/Box */
                                .modal-content {
                                  background-color: #fefefe;
                                  margin: 0% auto 5% 36%; /* 5% from the top, 15% from the bottom and centered */
                                  border: 1px solid #888;
                                  width: 23%; /* Could be more or less, depending on screen size */
                                }
                                
                                /* The Close Button (x) */
                                .close {
                                  position: absolute;
                                  right: 25px;
                                  top: 0;
                                  color: #000;
                                  font-size: 35px;
                                  font-weight: bold;
                                }
                                
                                .close:hover,
                                .close:focus {
                                  color: red;
                                  cursor: pointer;
                                }
                                
                                /* Add Zoom Animation */
                                .animate {
                                  -webkit-animation: animatezoom 0.6s;
                                  animation: animatezoom 0.6s
                                }
                                
                                @-webkit-keyframes animatezoom {
                                  from {-webkit-transform: scale(0)} 
                                  to {-webkit-transform: scale(1)}
                                }
                                  
                                @keyframes animatezoom {
                                  from {transform: scale(0)} 
                                  to {transform: scale(1)}
                                }
                                
                                /* Change styles for span and cancel button on extra small screens */
                                @media screen and (max-width: 300px) {
                                  span.psw {
                                     display: block;
                                     float: none;
                                  }
                                  .cancelbtn {
                                     width: 100%;
                                  }
                                }
                                </style>
                                </head>
                                <body>
                                                                
                                <div id="id01" class="modal">
                                  
                                  <form class="modal-content animate" action="/action_page.php" method="post">
                                    <div class="imgcontainer">
                                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    </div>
                                
                                    <div class="container">
                                        <?php
                                        
                                        $name=" Username";
                                        $email="uersemail@gmail.com ";
                                        $address= " user address";
                                        $number= "user contact no";
                                        $pincode="user pincode";

                                                $conn = new mysqli("localhost","root"," ","CachyCraft");
                                                if($conn->connect_error)
                                                {
                                                    die("Error : ".$conn->connect_error);
                                                }

                                                $uname="";
                                               $data = $conn->query("SELECT * FROM current");
                                               if( $data->num_rows > 0)
                                               {
                                                  while($row =$data->fetch_assoc())
                                                     {
                                                        $uname= $row['name'];
                                                     }
                                                }

                                              $query = "SELECT * FROM buyers where name='{$uname}'";
                                               $result= $conn->query($query);
                                               if( $result->num_rows > 0)
                                               {
                                                  while($row =$result->fetch_assoc())
                                                     {
                                                        $name= $row['name'];
                                                        $email= $row['email'];
                                                        $address= $row['address'];
                                                        $number= $row['number'];
                                                        $pincode= $row['pinCode'];
                                                     }
                                               } 
                                               else
                                               {
                                                        echo" error".$conn->error;
                                               }
                                               
                                        ?>
                                        <div class="profile-card animate__animated animate__fadeIn" id="profileCard">
                                            <div class="profile-header">
                                                <div class="profile-picture">
                                                    <img src= "../logo/favicon.jpg"
                                                            alt="User Image">
                                                </div>
                                                <h2 class="profile-name" style="color: rgb(23, 78, 189);">
                                                    Cachy Craft
                                                </h2>
                                                <p class="profile-designation">E-commerce</p>
                                                <p class="profile-location">Aswari, India</p>
                                            </div>
                                            <div class="profile-details">
                                                <div class="interactive-counter">
                                                    <p><strong>UserName:</strong> 
                                                        <span id="followersCount">
                                                           <?php echo "".$name;?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="interactive-counter">
                                                    <p><strong>Email:</strong> 
                                                        <span id="followingCount">
                                                        <?php echo "".$email;?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="interactive-counter">
                                                    <p><strong>Address:</strong> 
                                                        <span id="articlesCount">
                                                        <?php echo "".$address;?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="interactive-counter">
                                                    <p><strong>Contact No:</strong> 
                                                        <span id="articlesCount">
                                                        <?php echo "".$number;?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="interactive-counter">
                                                    <p><strong>PinCode:</strong> 
                                                        <span id="articlesCount">
                                                        <?php echo "".$pincode;?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="interactive-counter">
                                                    <p><strong>DOB:</strong> 
                                                        <span id="articlesCount">
                                                            DD/MM/YYYY
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="social-links">
                                                <a href= "#" target="_blank"
                                                class="social-icon">
                                                    <i class="fab fa-facebook" style="color: #1877f2;"></i></a>
                                                <a href= "#"
                                                target="_blank" class="social-icon">
                                                    <i class="fab fa-twitter" style="color: #1da1f2;"></i></a>
                                                <a href= "#" target= 
                                                    "_blank" class="social-icon"><i class="fab fa-instagram"
                                                                                    style="color: #e1306c;"></i>
                                                </a>
                                                <a href="#" target="_blank" class="social-icon">
                                                    <i class="fab fa-linkedin" style="color: #0077b5;"></i>
                                                </a>
                                                <a href="#" target="_blank" class="social-icon">
                                                    <i class="fab fa-youtube" style="color: #c4302b;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                                
                                <script>
                                // Get the modal
                                var modal = document.getElementById('id01');
                                
                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                                </script>
                                </body>
                                </html>
                               
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                    <div class="profile-details">
                                        <h2>Personal Details</h2>
                                        <form id="profile-form" action="update_profile.php" method="post">
                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br><br>
                                
                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br><br>
                                
                                            <label for="contact">Contact Number:</label>
                                            <input type="tel" id="contact" name="contact" required><br><br>
                                
                                            <label for="address">Address:</label>
                                            <textarea id="address" name="address" required></textarea><br><br>

                                            <label for="dob">DOB:</label>
                                            <input type="date" id="dob" name="dob" required><br><br>
                                            
                                            <label for="city">City:</label>
                                            <input type="text" id="city" name="city" required><br><br>
                                            <input type="submit" value="Update Profile">
                                        </form>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control"
                                        rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="May 3, 1995">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="custom-select">
                                        <option>USA</option>
                                        <option selected>Canada</option>
                                        <option>UK</option>
                                        <option>Germany</option>
                                        <option>France</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                               <label for="">delete function</label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <label for="">functions of orders</label>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum
                                            thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly blog digest</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary" onclick="show()">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default" onclick="change()">Cancel</button>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function show()
        {
            alert("Changes Saved Successfully....");
        }
        function change()
        {
            window.document.location.href="index.html";
        }
    </script>
</body>

</html>