<!--1.4Napisz program, który pobierze dwie liczby naturalne i poda ich wynik dodawania, odejmowania, mnożenia, dzielenia modulo.-->
<?php

$a = rand(1, 10);
$b = rand(1, 10);

echo("Liczby wylosowane a:" . $a . " i b:" . $b);
echo("<br>Suma: " . ($a + $b));
echo("<br>Różnica: " . ($a - $b));
echo("<br>Mnożenie: " . ($a * $b));
echo("<br>Dzielenie: " . ($a / $b));
echo("<br>Modulo: " . ($a % $b));
?>