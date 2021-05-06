<!--
1. Przerób zadanie z poprzednich zajęć, kalkulator, tak aby:
    a) każde działanie (dodawanie, odejmowanie itp) było umieszczone w oddzielnej funkcji
    b) wszystkie funkcje były umieszczone w innym pliku niż główny skrypt
    c) główny skrypt zawierał tylko switcha, a w nim wywołanie odpowiedniej funkcji
    d) (trzeba użyć include()/require() by korzystać z funkcji z innego pliku)-->


<html lang="en">
<body>
<form action="1.php" method="post">
    <label>
        <tr>
            <td>First number:</td>
            <td><input name="a"/></td>
            <br>
        </tr
        <tr>
            <td>Second number:</td>
            <td><input name="b"/></td>
            <br>
        </tr>
        <tr>
            <td>Choose action:</td>
            <td><select name="action">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                </select>
            </td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["action"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $action = $_POST["action"];

    switch ($action) {
        case "+":
        {
            require '3_1_2.php';
            addition($a, $b);
            break;
        }
        case "-":
        {
            require '3_1_2.php';
            subtraction($a, $b);
            break;
        }
        case "*":
        {
            require '3_1_2.php';
            multiplication($a, $b);
            break;
        }
        case "/":
        {
            require '3_1_2.php';
            if ($b != 0) {
                division($a, $b);
            } else {
                echo "Can not division by 0 !";
            }
            break;
        }
    }
}

?>
</body>
</html>