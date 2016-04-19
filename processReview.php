<?php
	include ("dbConnect2.php");
    session_start();
    $user=$_SESSION['user'];

	$shelter=$_POST['shelter'];
	$rating=$_POST['rating'];
	$review=$_POST['review'];

	$cquery="SELECT shelterId, user_name 
            FROM shelterReview 
            WHERE shelterId='$shelter' AND user_name='$user'";
	$result=$conn->query($cquery);
   
	if($result->num_rows>0) {
		$rquery="UPDATE shelterReview 
                SET rating='$rating',  review = '$review'
                WHERE shelterId='$shelter' AND user_name='$user'";

		if($rresult = $conn->query($rquery))
			echo "Successfully reviewed shelter.";
		else
			echo "Could not review shelter.";
			
	}

	else {
		$squery="INSERT INTO shelterReview (shelterId, user_name, rating, review) 
                VALUES 
                ('$shelter', '$user', '$rating', '$review')";

		if($sresult = $conn->query($squery))
			echo "Successfully rated event.";
		else
			echo"Could not rate event.";
	}
	
    echo "<meta http-equiv='refresh' content='2; url=shelters.php'>";
?>	