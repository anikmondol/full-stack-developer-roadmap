<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="95-get_request-date.php" method="post"> -->
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <div>
            <label>Name:</label>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label>age:</label>
            <input type="text" name="age">
        </div>
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    
    if (isset($_REQUEST['submit'])) {
       echo $_REQUEST['name'] . "<br>";
       echo $_REQUEST['age'];
    }
    
    ?>

</body>

</html>