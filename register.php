<?php
    include ("header.php");
    session_start();

    if(isset($_SESSION) && ($_SESSION['user']!='')) {
        echo "<br><br><br><h4 style='text-align:center;'>You are already signed in<br>Redirecting...</h4>";
        header("refresh:2,shelters.php");
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