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
		echo "Sorry, that username is already taken";	
	}

	else if($bool) {
		$rquery="INSERT INTO users (user_name, password, firstname, lastname, address)
		          VALUES
		          ('$user','$pass','$first','$last','$add')";

		if($conn->query($rquery)) {
			echo "You are now a member!";
		}

		else {
			echo "Unsuccessful registration<br>";
		    echo $conn->error;
		}
	}

	else {
		echo "Something went wrong!<br> Please try again and make sure all the fields are filled in.<br>";
	}

	echo "<meta http-equiv='refresh' content='2; url=index.php'>";
?>
			