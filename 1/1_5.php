<!-- 1.5. Napisz program, który pobierze od użytkownika dwa napisy
(rozdzielone znakiem spacji) napis1 i napis2, a następnie wyświetli następujący tekst:“%napis2 napis1%$#”-->
<?php
$word = "adam malysz";
$arrWords = explode(" ", $word);
echo("Before change: " . $word . "<br>");

echo("%" . $arrWords[1] . " " . $arrWords[0] . "%$#");
?>