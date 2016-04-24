<?php
    include("dbConnect2.php");
    session_start();

    $first=$_POST['first'];
	$last=$_POST['last'];
	$add=$_POST['add'];
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);

    //All fields not blank
    $bool=false;
	if (($first!='')&&($last!='')&&($add!='')&&($user!='')&&($pass!='')) {
		$bool=true;
	}

	$cquery="SELECT COUNT(user_name) FROM users WHERE user_name='$user'";
	$result=$conn->query($cquery);
	$row=$result->fetch_assoc();

	if($row['COUNT(user_name)']>0) {
		echo "<br><br><br><h4 style='text-align:center;'>Sorry, that username is already taken</h4>";	
	}

	else if($bool) {
		$rquery="INSERT INTO users (user_name, password, firstname, lastname, address)
		VALUES
		('$user','$pass','$first','$last','$add')";

		if($conn->query($rquery)) {
			echo "<br><br><br><h4 style='text-align:center;'>You are now a member!</h4>";
		}

		else {
			echo "<br><br><br><h4 style='text-align:center;'>Unsuccessful registration</h4>";
		    echo $conn->error;
		}
	}

	else {
		echo "<br><br><br><h4 style='text-align:center;'>Something went wrong!<br> Please try again and make sure all the fields are filled in.</h4>";
	}

        echo "<br><br><br><h4 style='text-align:center;'>Redirecting...</h4>";
	header("refresh:2,index.php");
?>
					