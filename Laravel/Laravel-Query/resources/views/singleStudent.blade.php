<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <h2>This single user details</h2>
        <h4>Name: {{$student->name}}</h4>
        <h4>Email: {{$student->email}}</h4>
        <h4>Age: {{$student->age}}</h4>
        <h4>City: {{$student->city}}</h4>

        <a href="{{ route("allStudents") }}"><button class="btn btn-info text-white">Home Page</button></a>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
