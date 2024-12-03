<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje plany</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
require_once('polaczenie.php');

$sql = "SELECT * FROM planer.zadania";
$result = mysqli_query($polacz, $sql);

echo "<h1>Wszystkie zaplanowane wydarzenia</h1>";
echo "<div class='kontener-plany'>";

while ($row = mysqli_fetch_assoc($result)) {
    $kategoria = '';
    switch ($row['kategoria']) {
        case 1: $kategoria = 'Ogólne'; break;
        case 2: $kategoria = 'Ważne'; break;
        case 3: $kategoria = 'Pilne'; break;
    }
    
    $colorClass = '';
    switch ($row['kategoria']) {
        case 1: $colorClass = 'background-color: #f0f0f0'; break;
        case 2: $colorClass = 'background-color: #ffeb3b'; break;
        case 3: $colorClass = 'background-color: #f44336'; break;
    }

    echo "
        <div class='blok-plan' style='{$colorClass}'>
            <h3>{$row['godzina_s']} - {$row['godzina_k']}</h3>
            <p>Plan: {$row['plan']}</p>
            <p>Kategoria: {$kategoria}</p>
        </div>
        <br><br>
    ";
}

echo "</div>";
echo "<br><br>";
echo "<h4>Chcesz dodać nowy plan? <a href='planer_dzienny.html'>Kliknij tutaj</a></h4>";
echo "<a href='index.html'>Powrót do strony głównej</a>";

mysqli_close($polacz);
?>

</body>
</html>
