<?php
    include ("header.php");
    session_start();
   $user=$_SESSION['user'];

   if(isset($_SESSION) && ($_SESSION['user']!='')) {
		echo "<br><br><br><h4 style='text-align:center;'>Hello, " . $_SESSION['user'] . "</h4>";
}

else {
echo "<br><br><br><h4 style='text-align:center;'>Please log in or register</h4>";
}
?>


<html>
  
<head>
    <title>DogsRUs - Add your pets!</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
      function insertPet()
      {
	var shelterName = document.getElementById("shelterName").value;
        var petType = document.getElementById("petType").value;
	var petName = document.getElementById("petName").value;
	var dob = document.getElementById("dob").value;
        var breed = document.getElementById("breed").value;
        var furColor = document.getElementById("furColor").value;
	var picturePath = document.getElementById("picturePath").value;
	var petDescription = document.getElementById("petDescription").value;
        
        var insertString = "petType=" +petType+ "&petName=" +petName+ "&dob=" +dob+ "&breed=" +breed+ "&furColor=" +furColor+ "&picturePath=" +picturePath+ "&petDescription=" +petDescription+ "&shelterName=" +shelterName;
		
        $.ajax
        ({
          type: "POST",
          url: "ajaxInsertPet.php",
          data: insertString,
          cache: false,
          success: function(data)
          {
            if(data)
            {
                document.getElementById("div2").innerHTML = data;
            }        
          }
        });
        
      }
    </script>
      
  </head>
  <body>
    <div id="div1" style="width:100%;position:absolute;top:15%;left:40%">
    <h1><b> Enter new pet information </b></h1>

      <table style="border-collapse:separate;border-spacing:1em">
        <tr>
          <td>Shelter Name</td>
          <td>
            <input type="text" id="shelterName"></input>
          </td>
        </tr>
        <tr>
          <td>Pet Type</td>
          <td>
            <input type="text" id="petType"></input>
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>
            <input type="text" id="petName"></input>
          </td>
        </tr>
        <tr>
          <td>DOB</td>
          <td>
            <input type="text" id="dob"></input>
          </td>
        </tr>
        <tr>
          <td>Breed</td>
          <td>
            <input type="text" id="breed"></input>
          </td>
        </tr>
        <tr>
          <td>Fur Color</td>
          <td>
            <input type="text" id="furColor"></input>
          </td>
        </tr>
        <tr>
          <td>Image Path</td>
          <td>
            <input type="text" id="picturePath"></input>
          </td>
        </tr>
        <tr>
          <td>Description</td>
          <td>
            <input type="text" id="petDescription"></input>
          </td>
        </tr>
        <tr>
          <td rowspan="2">
            <input type="button" style="width:200px" value="Insert" onclick="insertPet()"></input>
          </td>
        </tr>
      </table>

	<h3><b><a href="index.php">Go Back</a></b></h3>

    </div>
    <div id="div2" style="width:100%;position:absolute;top:90%;left:80%">
      
    </div>
  </body>
</html>