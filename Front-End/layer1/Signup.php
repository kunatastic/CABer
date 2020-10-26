<?php
	require'../../Back-End/DBconfig/totalconfig.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
	</head>
	<link rel="stylesheet" type="text/css" href="signup.css"> 
	<!--connection with the css file-->
	<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>Cab Results</title>
	<body>
		<!----Nav Bar----->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/png/512/2898/2898526.png"  alt="" style="width: 80px; height: 80px;"> <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"><br> CABer <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#About" ><br> About Us <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#develop"><br> Developer <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                </p>
            </div>
        </nav> 
        <hr>
		<div id="mainwrapper">
			<center>
				<h1>Sign UP</h1>
			</center>
			<form method="post" class="myform">
				<!-- Name-->
				<input type="text" placeholder="Name" name="name" id="name" class="inputvalues" required/><br/>
				<br/>

				<!-- RegNo-->
				<input type="text" placeholder="Your VIT Reg.No."name="regno" id="regno" class="inputvalues" required/ ><br/>
				<br/>

				<!-- Username-->
				<input type="text" placeholder="What do you want us to call you?" name="username" id="username" class="inputvalues" required/><br/>
				<br/>

				<!-- Phone no.-->
				<input type="text" placeholder="Phone Number" name="phno" id="phno" class="inputvalues" required/><br/>
				<br/>

				<!-- Email-->
				<input type="text" placeholder="Email" name="email" id="email" class="inputvalues" required/><br/>
				<br/>

				<!-- Pass-->
				<input type="password" placeholder="Password" name="pass" id="pass" class="inputvalues" required/><br/>
				<br/>

				<!-- con pass-->
				<input type="password" placeholder="Confirm Password" name="cpass" id="cpass" class="inputvalues" required/>

				<center><input type="submit" title="Get Started" value="Register" class="signout_btn" name="submit_btn" id="signout_btn"/></center>
			</form>
				<hr>
				<p style="font-size: 25px;margin-left: 20px">Already have a account</p>
				<a href="login.php"><input type="button" value="Login" class="back_login"/></a>
			<?php
				if (isset($_POST['submit_btn'])){
					//echo '<script>alert("submit button clicked")</script>';

					$name=$_POST['name'];
					$reg=$_POST['regno'];
					$uname=$_POST['username'];
					$phoneno=$_POST['phno'];
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					$cpass=$_POST['cpass'];
					
					if ($cpass==$pass){
						
						$Queryu = "select * from signup where Username='$uname'";
						$duplicateu=mysqli_query($con,$Queryu);

						$Querye = "select * from signup where email_id='$email'";
						$duplicatee=mysqli_query($con,$Querye);

						$Queryr = "select * from signup where Reg_no='$reg'";
						$duplicater=mysqli_query($con,$Queryr);

						if (mysqli_num_rows($duplicateu)>0){//check for duplicate username
							echo '<script type="text/javascript">alert("Username already exists... Try something else...")</script>';
						}elseif (mysqli_num_rows($duplicatee)>0){//check for duplicate email
							echo '<script type="text/javascript">alert("Email ID already exists... Try using another Email")</script>';
						}elseif (mysqli_num_rows($duplicater)>0){//check for duplicate registration
							echo '<script type="text/javascript">alert("Registration number already exists...")</script>';
						}else{
							$query="insert into signup values ('$name','$reg','$uname','$phoneno','$email','$pass')";
							$query_run=mysqli_query($con,$query);

							if ($query_run){
								echo '<script type="text/javascript">alert("User Registered.. Go to login page")</script>';
							}else{
									echo '<script type="text/javascript">alert("Error!")</script>';
							}
						}
					}else{
						echo '<script type="text/javascript">alert("Password and Confirm Password doesnt matched")</script>';
					}
				}
			?>
		</div>
		<hr>
		<a name="develop"></a>
	        <div  style="font-size: 13px; text-align: center;margin-bottom: 0px">
	            Created with &#128151; by Pranav Raj and Kunal Kumar Jha <br><br><br>
	        </div>
	</body>
</html>