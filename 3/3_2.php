<!--2. Formularz zapisujący dane do pliku:
    a) ma posiadać pola tekstowe i przycisk zapisu
    b) stwórz plik tekstowy, do którego będą zapisywane dane (przez skrypt)
    c) skrypt, przyjmujący dane z formularza, ma zapisać tekst do pliku, dopisując go na
    końcu ( jako nowa linia)-->

<html lang="en">
<body>

<form action="3_2.php" method="post">

    <label>
        <tr>
            <td>Fill in your name</td>
            <td><input type="text" name="name" required></td>
            <br>
        </tr>
        <tr>
            <td>Fill in your last name</td>
            <td><input type="text" name="lastName" required></td>
            <br>
        </tr>
        <tr>
            <td><textarea name="comment" cols="50" rows="10" placeholder="Fill in your comments"></textarea></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="Send"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["name"]) && isset($_POST["lastName"])) {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $comment = $_POST["comment"];

    if (file_put_contents('savedData.txt', $name . "\n" . $lastName . "\n" . $comment . "\n", FILE_APPEND) === false) {
        echo "Data not saved.";
    } else {
        echo "Data saved.";
    }
}
?>