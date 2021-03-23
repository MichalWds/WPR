<!--1.6. Napisz program, który dla trzech boków podanych przez użytkownika stwierdzi czy da się z tych boków zbudować trójkąt.-->
<!--Trójkąt da się zbudować z bokówwtedy i tylko wtedy gdy zachodzą następujące warunki: a+b>c, a+c>b, b+c>a.-->
<!--W przypadku wprowadzenia niepoprawnych danych program ma wyrzucić komunikat: BŁĄD-->
<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo("sides: " . $a . " " . $b . " " . $c . "<br>");

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo("Possible to build triangle");
} else {
    echo("BŁĄD");
}
?>