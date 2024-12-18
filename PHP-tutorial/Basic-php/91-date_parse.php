<?php

echo "<pre>";
// print_r(date_parse("2000-04-10"));
// print_r(date_parse_from_format('d.n.Y', "4.10.2000"));


echo date_parse_from_format('d.n.Y', "4.10.2000")["day"];

?>