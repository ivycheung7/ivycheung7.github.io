<?php
	include("dbConnect2.php");
	session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cquery = "SELECT password FROM users WHERE user_name = '$user'";
    $result = $conn->query($cquery);

    if (!$result) {
        echo 'Error<br>';
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }

    $row = $result->fetch_assoc();

    if($row['password']=='') {
        echo 'Username not found<br>';
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";

    }

    else if (md5($pass)==$row['password']) {
        echo 'Logged in<br>';
        $_SESSION['user']=$user;
        echo "<meta http-equiv='refresh' content='2; url=index.php'>";
    }

    else {
        echo 'Incorrect password';
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }
?>