<?php 
    include ("dbConnect2.php");
    session_start();
    $user=$_SESSION['user'];

    $cquery="SELECT shelter_name, rating, review 
                  FROM shelterInfo JOIN shelterReview USING (shelterId)
                  ORDER BY shelter_name DESC";
    $result = $conn->query($cquery);
   
    if($result->num_rows > 0) {
         echo "<br><br><h1>Shelters</h1>";
    }

    while($row = $result->fetch_assoc()) {
	    echo "<h4>" . $row['shelter_name'] . "</h4> Rating: " . $row['rating'] . "<br> Review: " . $row['review'] . "<br><br>";
      }

    if(isset($_SESSION) && ($_SESSION['user']!='')) {
        echo "<h1>Review a Shelter!</h1>";
        
        $squery="SELECT DISTINCT shelter_name, shelterId
                      FROM shelterInfo JOIN shelterReview USING (shelterId)
                      ORDER BY shelter_name DESC";
       $sresult = $conn->query($squery);

        echo '<form action="processReview.php" method="post">
                    Shelter: 
                    <select name = "shelter">'; 
                        while($row = $sresult->fetch_assoc()) {
                            echo "<option value=" . $row['shelterId'] . ">" . $row['shelter_name'] . "</option>";
                        }
                    echo '</select><br>';

        echo 'Rating: 
            <select name = "rating">
                <option value="1">1 star</option>
                <option value="2">2 stars</option>
                <option value="3">3 stars</option>
                <option value="4">4 stars</option>
                <option value="5">5 stars</option>
            </select><br>

        Comments:
        <input type="text" name="review"><br>

        <input type="submit" value="Review Shelter"></form><br><br>';
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