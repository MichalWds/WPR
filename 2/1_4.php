<!--    4. Czy dana liczba jest liczbą pierwszą?
    a. stwórz formularz z miejscem na wpisanie liczby
    b. stwórz skrypt PHP, który przyjmie liczbę z formularza
    (sprawdzi czy to na pewno liczba całkowita dodatnia), a następnie wywoła funkcję,
     sprawdzającą czy liczba jest liczbą pierwszą
    c. w swoim programie umieść zmienną, która policzy wszystkie iteracje pętli,
     potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program,
      by było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego działania).-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 4 zjazd 2</title>
    <style>
        html {
            background: darkgray;
            color: #FFF;
        }
    </style>
</head>
<body>
<h2> Is your number a prime number? Check it</h2>
<form action="1_4.php" method="POST">
    <label>Input number to check: <input type="number" min='0' name="number"></label>
    <br>
    <input type="submit" name="checkNumber" value="Check">
    <br>
</form>

<?php
$numberToCheck = ($_POST['number']);

if (isset($_POST['checkNumber'])) {
    if (is_numeric($_POST['number']) && ($_POST['number']) > 0) {

    } else {
        echo("<br>Please enter NATURAL numbers only!");
    }
}

function isPrimeNumber($numberToCheck)
{
    // 1 not a prime
    if ($numberToCheck == 1) {
        return false;
    }
    // 2 is prime
    if ($numberToCheck == 2) {
        return true;
    }
    // alg to check numbers if they are prime
    $x = sqrt($numberToCheck);
    $x = floor($x);
    for ($i = 2; $i <= $x; ++$i) {
        if ($numberToCheck % $i == 0) {
            break;
        }
    }

    if ($x == $i - 1) {
        return true;
    } else {
        return false;
    }
}

if (isPrimeNumber($numberToCheck)) {
    echo("<p> The number " . $numberToCheck . " is a prime number!</p>");
} else {
    echo("<p> The number " . $numberToCheck . " is NOT a prime number!</p>");
}
?>

</body>
</html>