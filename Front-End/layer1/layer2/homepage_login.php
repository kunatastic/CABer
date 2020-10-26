<?php
    require '../../../Back-End/DBconfig/totalconfig.php';
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>CABer</title>
        <link rel="stylesheet" type="text/css" href="home_login.css">
    </head>
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
        

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1560380748-9eaa0e5ded82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"  class="d-block w-100" style="height: 900px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CABer</h5>
                        <p>Design in a way to help the Students of VIT,Chennai</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1443916568596-df5a58c445e9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" class="d-block w-100" style="height: 900px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CABer</h5>
                        <p>Find your company for the journey back to your home</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1582970816926-c8b60f417661?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" style="height: 900px;" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="color: black;">
                        <h5>Caber</h5>
                        <p>We keep all the private details private as we respects individual privacy</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br><br><br><br>

        <div class="progress container">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <br><br><br><br>
        <div class="dropdown">
            <center><button id="myBtn" class="dropbtn">Get Your Journey Partner</button></center>
            <div id="myDropdown" class="dropdown-content">
                <a href="layer3/cab_register.php">Request for Cab here...</a>
                <a href="layer3/flight_register.php">Request for Flights here...</a>
                <a href="layer3/cab_result.php">Check for Cab here...</a>
                <a href="layer3/flight_result.php">Check for Flights here...</a>
            </div>
        </div>
        <script>
            document.getElementById("myBtn").onclick = function() {myFunction()};
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
        </script>
        <br><br><br><br><br><br><br><br>

        <a name="About"></a>
        <div class="container marketing blog-design">
            <br><br><br>
            <div class="row text-center">
                <div class="col-lg-4">
                <img class="bd-placeholder-img " src="https://image.flaticon.com/icons/png/512/2898/2898526.png" alt="" style="width: 150px;">
                <br><br><br>
                <h4>It's great.</h4>
                <br><br>
                <p class="blog">CABer is derived from an idea that during the vacation all the hosteller find it very difficult to find the partner for cab and at time when the book their flight to their respective cities. This database will help will them to find the companion for their long homecoming journey and will help to share the huge cash demanded by the cab driver.</p>
                <br><br>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img " src="https://image.flaticon.com/icons/png/512/2898/2898514.png" alt="" style="width: 150px;">
                <br><br><br>
                <h4>Oh yeah, it’s that good.</h4>
                <br><br>
                <p class="blog">The objective is to show every names and contact numbers of those student whose time and destination( eg. chennai railway station,domestic airport,etc.) clashes with the other students .This will help them to share their cab fares and take the flight with their friends going to same place.</p>
                <br><br>
            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img " src="https://image.flaticon.com/icons/svg/2898/2898534.svg" alt="" style="width: 150px;">
                <br><br><br>
                <h4>And lastly, this one.</h4>
                <br><br>
                <p class="blog">This will minimize the consumption of huge amount of fuel and also minimizes the pollution. This will also save the money of students and give a good company for the journey.</p>
                <br><br>
            </div>
        </div>


        <!----footer---->
        <hr>
        <a name="develop"></a>
        <div class="col-sm-5" >
            Created with &#128151; by Pranav Raj and Kunal Kumar Jha <br><br><br>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>