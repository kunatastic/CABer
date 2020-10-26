<?php
	require'../../../../Back-End/DBconfig/totalconfig.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>Cab Results</title>
	</head>
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
        </nav> 
        <div style="margin-left:75px;margin-right:75px;font-size:25;">
        <?php
        	$sql = "select travel_date,travel_time,location from cab where Username = '$user';";
        	$query = mysqli_query($con,$sql);

        	$result_check1= mysqli_num_rows($query);

        	if ($result_check1>0){
                #echo "$result_check1<br>";
                while ($row1 = mysqli_fetch_assoc($query)) {
					$date = $row1["travel_date"];
					$time = $row1["travel_time"];
					$location = $row1["location"];
                        echo "<hr><h4>Your Requests</h4><hr><strong>Date:- $date, Time:- $time, Location:- $location <br/></strong>";
					$sql1 = "select Username from cab where travel_time='$time' and travel_date='$date' and location='$location' and not Username = '$user';";
					$query1 = mysqli_query($con,$sql1);

					$result_check2 = mysqli_num_rows($query1);

					if ($result_check2>0){
						while ($row2 = mysqli_fetch_assoc($query1)) {
							#echo " " . $row2["Username"]. " ";
                            $info = $row2["Username"];
                            $sql2 = "select * from signup where Username = '$info'";
                            $query2 = mysqli_query($con,$sql2);

                            $result_check3 = mysqli_num_rows($query2);

                            if ($result_check3>0){
                                while ($row3 = mysqli_fetch_assoc($query2)){
                                    echo "Name:- ".$row3["Name"]."<br>Phone:- ".$row3["phone_no"]."<br>Email ID:- ".$row3["email_id"]."<br/><br/>";
                                };
                            }else{
                                echo "No results Found... Try again after some time";
                            }
						};
					}elseif ($result_check2==0) {
						echo 'No results Found.. Try again after some time...<br>';
					}		
				};
            }else{
                echo "No request Made till now!";	
            }
        ?>
        <div>
        <hr>
        <a name="develop"></a>
            <div  style="font-size: 17px; text-align: center;margin-bottom: 0px">
                Created with &#128151; by Pranav Raj and Kunal Kumar Jha <br><br><br>
            </div>
	</body>
</html>