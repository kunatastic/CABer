<?php
	require'../../../../Back-End/DBconfig/totalconfig.php';
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cab Register</title>
	</head>
	<link rel="stylesheet" type="text/css" href="cab_reg.css"> 
	<!--connection with the css file-->
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>Cab Results</title>
	<body>
		<hr>
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

                    <li class="nav-item">
                        <a style="margin-top: 24px"class="nav-link" onclick="myFunction()" href="../../index.php"><strong>Log Out</strong></a>
                        <script>
                            function myFunction() {
                                alert ("Logout Successfully");
                            }
                        </script>            
                    </li>
                </ul>
                <p style="text-align: right;margin-top: 13px;margin-left: 700px">
                    <?php 
                        $user = $_SESSION['username'];
                        echo 'Welcome: '."<strong>".$user."<br></strong>";
                    ?>
                </p>
            </div>
        </nav> <hr/>
		<center><h1 style="font-size: 50px;font-family: cursive;margin-top: 10px;margin-bottom: 12px;">CABer</h1></center>
		<br>
		<div id="mainwrapper">
			<center>
				<h1>Cab Register</h1>
			</center>
			<form method="post" id="myform">
				
				<!-- Location-->			
				<select id="location" name=locations class="inputvalues">
					<option id="NONE" selected>Select one of the location</option>
					<option id="CA">Chennai Airport</option>
					<option id="T">Tambaram</option>
					<option id="CP">Chennai Park</option>
					<option id="K">Kalambakam</option>
				</select>
				<br/> 	<br/>

				<!-- Time-->				
				<select id="time" name="time" class="inputvalues">
					<option id="NONE" selected>Select the time </option>
					<option id="1">00:00 to 03:00</option>
					<option id="2">03:00 to 06:00</option>
					<option id="3">06:00 to 09:00</option>
					<option id="4">09:00 to 12:00</option>
					<option id="5">12:00 to 15:00</option>
					<option id="6">15:00 to 18:00</option>
					<option id="7">18:00 to 21:00</option>
					<option id="8">21:00 to 00:00</option>
				</select>
				<br/><br/>

				<!-- Date-->
				<input type="Date" placeholder="Date Of Journey" title="Enter the Date of Journey" name="DOJ" id="DOJ " class="inputvalues" required/ ><br/>
				<br/>
				<center><input type="submit" title="Click to Register for cab" value="Start Finding Friends" class="reg_btn" name="reg_btn" id="reg_btn"/></center>
			</form>		
			<?php
				if(isset($_POST['reg_btn'])){
					

					$uname=$_SESSION['username'];
					$location=$_POST['locations'];
					$time=$_POST['time'];
					$date1=$_POST['DOJ'];

					$query="insert into cab values('$uname','$date1','$time','$location');";
					$query_run = mysqli_query($con,$query);

					if ($query_run){
						echo '<script type="text/javascript">alert("Request Registered.. Go to login page")</script>';
					}else{
						echo '<script type="text/javascript">alert("Error!")</script>';
					}
				}
			?>
		</div>
		<br/><br/>
		<hr/>
		<a name="develop"></a>
	        <div  style="text-align: center;font-size: 18px;margin-top: 45px">
	            Created with &#128151; by Pranav Raj and Kunal Kumar Jha <br><br><br>
	        </div>
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>