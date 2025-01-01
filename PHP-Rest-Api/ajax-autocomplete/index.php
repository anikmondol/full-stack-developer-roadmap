<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>Autocomplete Textbox with PHP & Ajax</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="search-form">

          <div id="autocomplete">
            <input type="text" id="city-box" placeholder="Enter City" autocomplete="off">
            <div id="cityList"></div>
          </div>
          <input type="submit" id="search-btn">
        </form>

      </td>
    </tr>
    <tr>
      <td id="table-data"></td>
    </tr>
  </table>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#city-box").keyup(function() {
        var city = $(this).val();

        if (city != "") {
          $.ajax({
            url: "load-city.php",
            type: "post",
            data: {
              city: city // Corrected from 'dataType' to 'data'
            },
            success: function(data) {
              $("#cityList").fadeIn("fast").html(data);
            },
            error: function(xhr, status, error) {
              console.error("Error: " + error); // Optional: Add error handling
            }
          });
        } else {

          $("#cityList").fadeOut("fast");
          $("#table-data").html("");
        }
      });


      $(document).on('click', "#cityList li", function() {

        $("#city-box").val($(this).text());
        $("#cityList").fadeOut("fast");
      });
      $("#search-btn").on("click", function(e) {
  e.preventDefault();

  var city = $("#city-box").val().trim(); // Proper use of trim
  if (city !== "") {
    $.ajax({
      url: "load-table.php",
      type: "post",
      data: { city: city },
      success: function(data) {
        $("#table-data").html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });
  } else {
    
    alert("Please enter a city name.");
    $("#table-data").html("");
  }
});



    });
  </script>
</body>

</html>