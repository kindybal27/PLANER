<?php
require_once('polaczenie.php');

$godzina_s = $_POST['godzina_s'];
$godzina_k = $_POST['godzina_k'];
$plan = $_POST['plan'];
$kategoria = $_POST['kategoria'];

$sql = "INSERT INTO zadania (godzina_s, godzina_k, plan, kategoria) VALUES ('$godzina_s', '$godzina_k', '$plan', '$kategoria')";

if (mysqli_query($polacz, $sql)){
    echo "Twój plan został pomyślnie dodany :)<br><br>
    <a href='index.html'>Wróć do strony głównej</a><br><br>";
}else{
    echo "Błąd";
}

mysqli_close($polacz);
?>
