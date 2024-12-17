<?php

$numbers = array(11, 20, 74, 55, 65);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers) . "<br>";

next($numbers);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers);

next($numbers);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers);

prev($numbers);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers);

end($numbers);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers);

reset($numbers);

echo "<b>current</b> : " . current($numbers) ."<br>";
echo "<b>key</b> : " . key($numbers) ."<br>";
echo "<b>pos</b> : " . pos($numbers);




?>