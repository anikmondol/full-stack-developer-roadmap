<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete Multiple Data</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="main">
    <div id="header">
      <h1>Delete Multiple Data with <br>PHP & Ajax CRUD</h1>
    </div>
    <div id="sub-header">
      <button id="delete-btn">Delete</button>
    </div>
    <div id="table-data"></div>
  </div>

  <div id="error-message"></div>
  <div id="success-message"></div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      function loadData() {

        $.ajax({
          url: "load-data.php",
          type: "post",
          success: function(data) {
            $("#table-data").html(data);
          }
        });

      }

      loadData();

      $("#delete-btn").on("click", function() {

        var id = [];

        $(":checkbox:checked").each(function(key) {
          id[key] = $(this).val();
        });


        if (id.length === 0) {

          alert("Please Select Atleast one checkbox.");

        } else {
          if (confirm("Do you really want to delete these records")) {
            $.ajax({
              url: "delete-data.php",
              type: "post",
              data: {
                id: id
              },
              success: function(data) {

                if (data == 1) {
                  $("#success-message").html("Data deleted successful").slideDown();
                  $("#error-message").slideUp();
                  loadData();

                  setTimeout(() => {
                    $("#success-message").slideUp();
                  }, 4000);

                } else {
                  $("#error-message").html("Data Not deleted successful").slideDown();
                  $("#success-message").slideUp();
                  setTimeout(() => {
                    $("#error-message").slideUp();
                  }, 4000);
                }

              }
            });
          }


        }



      });



    });
  </script>
</body>

</html>