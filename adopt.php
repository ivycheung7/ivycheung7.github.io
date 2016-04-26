<?php 
    include ("header.php");
    session_start();
    $user=$_SESSION['user'];
    
  if(isset($_SESSION) && ($_SESSION['user']!='')) 
  {
    $petId = $_SESSION['petId'];
        
    $sql = "SELECT pet_name FROM petInfo where petId='$petId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
    $row = $result->fetch_assoc();  
    echo "<div id='div1' style='width:100%;position:absolute;top:20%;left:5%'>
          <h1> Placeholder for adopting " .$row["pet_name"]. "!</h1> 
          <br><br>
          <h4><a href=search.php>Go Back to Search</a> </h4> ";
    }
  }
    
    else
    {
    echo "<br><br><h4 style='text-align:center;'>Please log in or register</h4>";
    }
?>