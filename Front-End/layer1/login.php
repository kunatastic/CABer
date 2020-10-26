<?php
	session_start();
	require'../../Back-End/DBconfig/totalconfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
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
            </div>
        </nav> 
        <hr>
	<center><h1 style="font-size: 50px;font-family: cursive;margin-top: 10px;margin-bottom: 12px;">CABer</h1></center>
	<div id="mainwrapper">
		<center>
			<h1>Login</h1>
		</center>

		<form method="post" class="myform">
			<!-- Username-->
			<input type="text" placeholder="Username" name="username" id="username" class="inputvalues" required/><br/>
			<br/>

			<!-- Pass-->
			<input type="password" placeholder="Password" name="pass" id="pass" class="inputvalues" required/><br/>
			<br/>

			<center><input type="submit" name="enter" id="enter" class="enter" value="Click to Login"/></center>
		</form>
		<hr>
		<p style="margin-left: 40px;font-size: 25px">Don't have a account</p>
		<a href="Signup.php" title="Click Here to go to Signup page"><input type="button" name="login_btn" value="Signup" id="login_btn" class="login_btn"/><a>

		<?php
			if (isset($_POST['enter'])){

				$username=$_POST['username'];
				$password=$_POST['pass'];
				$query="select * from signup where Username='$username' and password='$password'";
				$run_query=mysqli_query($con,$query);

				if (mysqli_num_rows($run_query)==1){
					//valid
					$_SESSION['username']=$username;
					echo '<script type="text/javascript">alert("Login succesfully")</script>';
					header('location:layer2/homepage_login.php');
				}else{
					//invalid
					echo '<script type="text/javascript">alert("Invalid credential. Try Again...")</script>';
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