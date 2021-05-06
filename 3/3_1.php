<!--
1. Przerób zadanie z poprzednich zajęć, kalkulator, tak aby:
    a) każde działanie (dodawanie, odejmowanie itp) było umieszczone w oddzielnej funkcji
    b) wszystkie funkcje były umieszczone w innym pliku niż główny skrypt
    c) główny skrypt zawierał tylko switcha, a w nim wywołanie odpowiedniej funkcji
    d) (trzeba użyć include()/require() by korzystać z funkcji z innego pliku)-->

<!doctype html>
<html>
<body>
<form action="3_1.php" method="POST">
    Num1: <input type="number" name="numberOne">
    Num2: <input type="number" name="numberTwo">
    <select name="actionNumber">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <input type="submit">
</form>
</body>
<?php
$numberOne = $_POST["numberOne"];
$numberTwo = $_POST["numberTwo"];

if ($_POST['actionNumber'] == "add") {
    require '3_1_2.php';
    echo "Wynik: " . ($numberOne + $numberTwo);
}
if ($_POST['actionNumber'] == "sub") {
    require '3_1_2.php';
    echo "Wynik: " . ($numberOne - $numberTwo);
}
if ($_POST['actionNumber'] == "mul") {
    require '3_1_2.php';
    echo "Wynik: " . ($numberOne * $numberTwo);
}
if ($_POST['actionNumber'] == "div") {
    if ($numberTwo == 0) {
        require '3_1_2.php';
        echo "Kolego, nigdy nie dziel przez zero!";
    }
    echo "Wynik: " . ($numberOne / $numberTwo);
}
?>