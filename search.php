<?php

?>

<html>
  <head>
    <title>DogsRUs Search</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
      function searchQuery()
      {
        var petType = document.getElementById("petType").value;
        var breed = document.getElementById("breed").value;
        var furColor = document.getElementById("furColor").value;
        
        var queryString = 'petType='+ petType;
        //queryString+='&breed=' + breed + '&furColor=' + furColor;
        $.ajax
        ({
          type: "POST",
          url: "ajaxGetSearch.php",
          data: queryString,
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

    <div id="div1" style="width:25%;position:absolute;top:10%;left:5%">
      <table>
        <tr>
          <td>Pet Type</td>
          <td>
            <input type="text" id="petType"></input>
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
          <td rowspon="2">
            <input type="button" style="width:70px" value="Search" onclick="searchQuery()"></input>
          </td>
        </tr>
      </table>
    </div>
    <div id="div2" style="width:75%;position:absolute;top:10%;left:28%">
      
    </div>
  </body>
</html>