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

        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {



            // $.ajax({
            //     url: "https://jsonplaceholder.typicode.com/posts",
            //     type: "get",
            //     success: function(data) {

            //         // console.log(data);

            //         // $("#table-data").append(`${data.id} ${data.title} <br> ${data.body}`);


            //         // console.log(data);

            //         // data.forEach((item) => {
            //         //     console.log(item); // Log the entire item
            //         //     console.log(`ID: ${item.id}, Title: ${item.title}, Body: ${item.body}`); // Log specific 
                       
            //         // });


            //         $.each(data, function(key, value){
            //             console.log(`${value.id} ${value.title} <br> ${data.body}`);

                        
            //         $("#table-data").append(`${value.id} <br> ${value.title} <br> ${value.body}`);
                        
            //         });


            //     }
            // });



            
            $.getJSON(
                "https://jsonplaceholder.typicode.com/posts",
                "get",
                function(data) {

                    // console.log(data);

                    // $("#table-data").append(`${data.id} ${data.title} <br> ${data.body}`);


                    // console.log(data);

                    // data.forEach((item) => {
                    //     console.log(item); // Log the entire item
                    //     console.log(`ID: ${item.id}, Title: ${item.title}, Body: ${item.body}`); // Log specific 
                       
                    // });


                    $.each(data, function(key, value){
                        console.log(`${value.id} ${value.title} <br> ${data.body}`);

                        
                    $("#table-data").append(`${value.id}. ${value.title} <br> ${value.body} <br>`);
                        
                    });


                }
            );


        })
    </script>
</body>

</html>