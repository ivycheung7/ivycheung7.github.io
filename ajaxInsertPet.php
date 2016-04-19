<?php
include("dbConnect.php");

$conn = get_connection();

$shelterName = test_input($_POST["shelterName"]);
$sqlQuery = "SELECT shelterId from shelterInfo where shelter_name = '$shelterName'";
$result = $conn->query($sqlQuery);
$shelterId = "Default";
if($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$shelterId = $row["shelterId"];
	}
}

$petType = test_input($_POST["petType"]);
$petName = test_input($_POST["petName"]);
$dob = test_input($_POST["dob"]);
$breed = test_input($_POST["breed"]);
$furColor = test_input($_POST["furColor"]);
$picturePath = test_input($_POST["picturePath"]);
$petDescription = test_input($_POST["petDescription"]);

$sql = "INSERT INTO petInfo (petType, pet_name, dob, breed, furColor, picturePath, pet_description, shelterId) VALUES ('$petType', '$petName', '$dob', '$breed', '$furColor', '$picturePath', '$petDescription', '$shelterId')";

if ($conn->query($sql) === TRUE) 
{
    echo "New pet record created";
} 
else 
{
    echo "Error in insertion";
}

$conn->close();
?>