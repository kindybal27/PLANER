<?php
$polacz = mysqli_connect('127.0.0.1', 'root', '', 'planer');

if (!$polacz) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

mysqli_set_charset($polacz, "utf8");
?>
