<!--1.8. Napisz program, który pobierze trzy liczby rzeczywiste, a następnie wyświetli je w kolejności od najmniejszej do największej, a potem od największej do najmniejszej.
Nie używaj żadnych metod sortujących.-->
<?php
$a = mt_rand(-100, 100) / 10;
$b = mt_rand(-100, 100) / 10;
$c = mt_rand(-100, 100) / 10;
$arr = [$a, $b, $c];
echo("Before sort ");
print_r($arr);
echo("<br>");

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
echo("After asc sort ");
print_r($arr);
echo("<br>");


for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] < $arr[$j + 1]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
echo("After desc sort ");
print_r($arr);
echo("<br>");

?>