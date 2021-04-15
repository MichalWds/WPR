<!-- 1. Prosty kalkulator:
    a. stwórz formularz z miejscem na wpisanie 2 liczb oraz wyborem działania (dodawanie, odejmowanie, mnożenie, dzielenie)
    b. stwórz skrypt PHP, który obsłuży dane z formularza (na podstawie wybranego działania policzy i wyświetli wynik w przeglądarce)-->

<!doctype html>
<html>
<body>
<form action="1_1.php" method="POST">
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
    echo "Wynik: " . ($numberOne + $numberTwo);
}
if ($_POST['actionNumber'] == "sub") {
    echo "Wynik: " . ($numberOne - $numberTwo);
}
if ($_POST['actionNumber'] == "mul") {
    echo "Wynik: " . ($numberOne * $numberTwo);
}
if ($_POST['actionNumber'] == "div") {
    if ($numberTwo == 0) {
        echo "Kolego, nigdy nie dziel przez zero!";
    }
    echo "Wynik: " . ($numberOne / $numberTwo);
}
?>
