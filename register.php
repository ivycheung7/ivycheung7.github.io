<?php
    include("dbConnect2.php");
    session_start();

    if(isset($_SESSION) && ($_SESSION['user']!='')) {
        echo "<br><br><br><h4 style='text-align:center;'>You are already signed in</h4>";
        echo "<meta http-equiv='refresh' content='2; url=index.php'>";
    }

    else {
        echo "<br><br><h2>Register here:</h2>";

        echo '<form action="processRegistration.php" method="post">
                    First Name:<br>
                    <input type="text" name="first"><br>

                    Last Name:<br>
                    <input type="text" name="last"><br>

                    Address:<br>
                    <input type="text" name="add"><br>

                    Username:<br>
                    <input type="text" name="user"><br>

                    Password:<br>
                    <input type="password" name="pass"><br>

                    <input type="submit" value="Register">
            </form>';
    }
?>

<!DOCTYPE html>
	<html class="no-js" xml:lang="en" lang="en">
	<head>
	<!--  Bootstrap  -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<!--  CSS Files -->
	<link rel="stylesheet" href="dogsRUs.css" type="text/css" media="screen"/>
	<!--  Javascript Files -->
    <!--  For some reason, this does not work :: <script type="text/javascript" src="../resources/js/dogsRUs.js"></script>-->
	<script type="text/javascript" src="dogsRUs.js"></script>
	
	<title>Dogs 'R Us</title>
	</head>
	<body>
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container"> 
                <div class="navbar-header page-scroll"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.php"><img src="http://payload43.cargocollective.com/1/6/223650/3179096/Phoebe_DementiaDog_Icon.jpg" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="shelters.php">Shelters</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div> 
            </div>
        </nav>
    </body>
</html>
	