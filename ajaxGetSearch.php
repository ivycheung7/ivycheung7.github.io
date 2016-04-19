<?php
include("dbConnect.php");

$conn = get_connection();
$petType=test_input($_POST["petType"]);

$sql = "SELECT pet_name, dob, picturePath, pet_description FROM petInfo where petType='$petType'";
$result = $conn->query($sql);
$returnVal = "<table border = '10'> <tr><th> Pet Name </th> <th> DOB </th> <th> Picture </th> <th> Description </th></tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
	$returnVal .= "<tr>";
        $returnVal .= "<td>".$row["pet_name"]."</td>";
	$returnVal .= "<td>".$row["dob"]."</td>";
	$returnVal .= "<td><img src='".$row["picturePath"]."'></td>";
	$returnVal .= "<td>".$row["pet_description"]."</td>";
	$returnVal .= "</tr>";
    }
} 
$returnVal .= "</table>";
$conn->close();
echo $returnVal;
?>