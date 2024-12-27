<?php



$json_string = 'https://jsonplaceholder.typicode.com/posts';

// Fetch the content of the JSON file
$json_data = file_get_contents($json_string);

// Decode the JSON content into a PHP array
$arr = json_decode($json_data, true);

echo "<table border='1' cellpadding='10px' width='100%'>
 <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
";


foreach ($arr as list("id" => $id, "title" => $title, "body" => $body)) {
   echo " 
                 <tr>
                    <th>{$id}</th>
                    <th>{$title}</th>
                    <th>{$body}</th>
                   
                </tr>";
}


echo "</table>"


// echo "<pre>";
// print_r($arr);









?>