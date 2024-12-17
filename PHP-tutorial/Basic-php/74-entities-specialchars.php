<?php

// $str = "A 'quote' is <b>bold</b>";
$str = '<a href="https://www.youtube.com">Youtube</a>';



// echo $str . "<br>";

// echo htmlentities($str, ENT_QUOTES);
// echo htmlentities($str, ENT_NOQUOTES);

// $htmlent = htmlentities($str, ENT_NOQUOTES);

// echo html_entity_decode($htmlent);


// echo htmlspecialchars($str, ENT_NOQUOTES);
// echo htmlspecialchars($str, ENT_QUOTES);

// $htmlent = htmlspecialchars($str, ENT_QUOTES);

// echo htmlspecialchars_decode($htmlent);


echo "<pre>";
// print_r(get_html_translation_table());
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));


?>