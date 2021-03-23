<!--Pangramem nazywamy tekst, w którym każda litera alfabetu łacińskiego występuje przy najmniej raz.
Najpopularniejszym pangramem w języku angielskim jest zdanie: The quick brown fox jumps over the lazy dog.
Napisz program, który sprawdzi czy dany tekst jest pangramem.
W przypadku pozytywnej odpowiedzi program powinien wyświetlić wartość true, w przeciwnym przypadku program powinien wyrzucić wartość false.
Rozważ różne przypadki i wielkość liter (która nie powinna mieć znaczenia)!!!-->
<?php

function isPanagram(string $textToCheck)
{

    $testCase = str_split("abcdefghijklmnopqrstuvwxyz");
    $checkFormat = strtolower(trim($textToCheck, " \n\r\t\v\0"));
    $isPanagram = "true";

    foreach ($testCase as $character) {
        if (!strstr($checkFormat, $character)) {
            $isPanagram = "false";
            break;
        }
    }
    echo("<br>'$textToCheck' Panagram: is $isPanagram <br>");
}

isPanagram("Waltz, nymph, for quick jigs vex Bud. - Dmitri Borgmann");
isPanagram("Let's play the game");
isPanagram("Pan Taduesz kupil ksiazke");
isPanagram("How vexingly quick daft zebras jump!");
isPanagram("Don't talk to me like this.");
isPanagram("Sympathizing would fix Quaker objectives.");
?>