<html>
<head>
<body>
<?php
if (!$db = mysqli_connect("localhost", "root", "root", "wpr")) {
    exit("Connected: fail");
} else {
    echo "Connected";
}
echo "</br>";
$query = 'select * from test';
if (!$result = mysqli_query($db, $query)) {
    echo "Fail";
} else {
    echo "Correct";
}
echo "</br>";
while ($rows = mysqli_fetch_row($result)) {
    foreach ($rows as $row) {
        echo $row;
        echo "</br>";
    }
}

if ($result = mysqli_query($db, $query)) {
    $row_cnt = mysqli_num_rows($result);
    printf("There are %d records\n", $row_cnt);
}

echo "</br>";

$result = mysqli_query($db, $query);
while ($r = mysqli_fetch_array($result)) {
    echo $r['id'] . "<br/>";
}


echo "</br>";
$insert = 'insert into test (id) values (4)';
if (mysqli_query($db, $insert)) {
    echo "Adding record correctly.";
} else {
    echo "ERROR";
}
echo "</br>";
$rowsno = mysqli_affected_rows($db);
echo "Number of added records: $rowsno"
?>
</body>
</head>
</html>