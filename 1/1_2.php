<!--1.2Napisz program, który oblicza pole prostokąta o bokach a i b wprowadzanych przez użytkownika (każda wartość w osobnej linii).-->
<?php
$a = rand(1, 1000);
$b = rand(1, 1000);
$result = $a * $b;
echo("Side: a=" . $a);
echo("<br>Side: b=" . $b);
echo("<br>Area=" . $result);
?>