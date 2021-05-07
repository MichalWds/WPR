<!--3. Pierwszy CMS:
    a) Przerób zadanie z poprzednich zajęć - formularz rezerwacji, aby dane były wpisywane do pliku csv.
    b) pierwsza kolumna - nazwy pól oddzielone separatorem np. ";" (nazwa1;nazwa2;nazwa3...)
    c) kazdorazowe wysłanie formularza wysyła nowe dane do pliku jako nowy rekord (wartosc1;wartosc2;wartosc3...)
    d) przycisk "wczytaj" pozwoli wczytać i wyswietlic dane w przeglądarce-->


<html lang="en">
<body>
<form action="3_3.php" method="post">
    <label>
        <tr>
            <td>Make reservation in out hotel<br><br></td>
            <td>Select Number of people:</td>
            <td><select name="people" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <br>
        </tr>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="name" required></td>
            <br>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastName" required></td>
            <br>
        </tr>
        <tr>
            <td>Email address:</td>
            <td><input type="email" name="emailAddress" required></td>
            <br>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" size="60"></td>
            <br>
        </tr>
        <tr>
            <td>Check In:</td>
            <td><input type="date" name="checkIn" required></td>
            <br>
        </tr>
        <tr>
            <td>Check out:</td>
            <td><input type="date" name="checkOut" required></td>
            <br>
        </tr>
        <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["people"]) && isset($_POST["name"]) && isset($_POST["lastName"]) &&
    isset($_POST["checkIn"]) && isset($_POST["checkOut"])) {
    $people = $_POST["people"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $address = $_POST["address"];
    $checkIn = $_POST["checkIn"];
    $checkOut = $_POST["checkOut"];

    $data = array($people, $name, $lastName, $address, $emailAddress, $checkIn, $checkOut);

    if (!$fp = fopen('result.csv', 'a')) {
        echo "Can not open file with data.";
    } else {
        fputcsv($fp, $data);
        fclose($fp);
    }
}
?>

<form action="3_3.php" method="post">
    <label>
        <tr>
            <br><br>
            <td>Show results</td>
            <td><input type="checkbox" name="results"></td>
            <br>
            <td><input type="submit" value="Send"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["results"])) {
    if (($handle = fopen("result.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<br />";
            for ($i = 0; $i < $num; $i++) {
                echo $data[$i] . "<br />\n";
            }
        }
        fclose($handle);
    }
}
?>

</body>
</html>