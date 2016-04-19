<?php

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
    <div id="div1" style="width:75%;position:absolute;top:10%;left:5%">
    <b> Enter new pet information </b> or <b><a href="index.php">Go Back</a></b>
    <br> <br>
      <table>
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
            <input type="button" style="width:90px" value="Insert" onclick="insertPet()"></input>
          </td>
        </tr>
      </table>
    </div>
    <div id="div2" style="width:20%;position:absolute;top:20%;left:80%">
      
    </div>
  </body>
</html>