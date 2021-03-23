<!--1.7. Napisz program, który dla podanej liczby z odpowiedniego zakresu wyświetli jaki to miesiąc i ile ma on dni.
Zakładamy, że rok tutaj nie jest przestępny.W przypadku niepoprawnych danych program ma wypisać komunikat: BŁĄD
Skorzystaj tutaj z instrukcji warunkowej switch!!!-->

<?php
$month = rand(1, 13);

switch ($month) {
    case 1:
        echo("Jan, 31days");
        break;
    case 2:
        echo("Feb, 28days");
        break;
    case 3:
        echo("Mar, 31days");
        break;
    case 4:
        echo("Apr, 30ays");
        break;
    case 5:
        echo("May, 31days");
        break;
    case 6:
        echo("Jun, 30days");
        break;
    case 7:
        echo("Jul, 31days");
        break;
    case 8:
        echo("Aug, 31days");
        break;
    case 9:
        echo("Sep, 30days");
        break;
    case 10:
        echo("Oct, 31days");
        break;
    case 11:
        echo("Nov, 30days");
        break;
    case 12:
        echo("Dec, 31days");
        break;
    default:
        echo("Błąd");
}
?>