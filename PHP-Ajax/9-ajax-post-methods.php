<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Ajax Pagination</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="main">
        <div id="header">
            <h1>PHP & Ajax Serialize Form</h1>
        </div>

        <div id="table-data">
            <form id="submit_form">
                <table width="100%" cellpadding="10px">
                    <tr>
                        <td width="150px"><label>first-name</label></td>
                        <td><input type="text" name="first-name" id="first-name" /></td>
                    </tr>
                    <tr>
                        <td><label>last-name</label></td>
                        <td><input type="text" name="last-name" id="last-name" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" name="submit" id="submit" value="Submit" /></td>
                    </tr>
                </table>
            </form>
            <div id="response"></div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {

            $("#submit").click(function() {
 
                var fname = $("#first-name").val();
                var lname = $("#last-name").val();

                if (fname == "" || lname == "") {

                    $("#response").fadeIn();
                    $("#response").removeClass("success-msg").addClass("error-msg").html("sorry");


                } else {

                    $.post(
                        "ajax-post-methods.php",
                        $("#submit_form").serialize(),
                        function(data) {


                            $("#submit_form").trigger("reset");

                            $("#response").fadeIn();
                            $("#response").removeClass("error-msg").addClass("success-msg").html(data);

                            setTimeout(function(){
                                $("#response").fadeOut();  
                            },3000)


                        }
                    )
                }


            });

        })
    </script>
</body>

</html>