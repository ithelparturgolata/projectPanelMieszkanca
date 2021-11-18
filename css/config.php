<?php
$mysqli = new mysqli("localhost", "budowlani_baza", "Savakiran03", "budowlani_panelmieszkanca");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("localhost", "budowlani_baza", "Savakiran03", "budowlani_panelmieszkanca", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
