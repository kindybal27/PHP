<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 50%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background: #ddd; }
        .przycisk { margin-top: 20px; }
    </style>
</head>
<body>

<header>
    <div class="logo"><img src="logo.png" alt="logo"></div>
    <nav>
        <a href="kontakt.php">Kontakt</a>
        <a href="koszyk.php">Koszyk</a>
    </nav>
</header>

<h2>Twój koszyk</h2>
<?php
if (!isset($_SESSION['koszyk']) || count($_SESSION['koszyk']) == 0) {
    echo "<p>Twój koszyk jest pusty.</p>";
} else {
    $laczny_koszt = 0.0;
    
    echo "<table>
            <tr>
                <th>Produkt</th>
                <th>Cena</th>
                <th>Akcja</th>
            </tr>";
    foreach ($_SESSION['koszyk'] as $index => $produkt) {
        $cena = floatval($produkt['cena']);
        echo "<tr>
                <td>{$produkt['nazwa']}</td>
                <td>" . number_format($produkt['cena'], 2) . " PLN</td>
                <td><a href='usuwanie.php?index={$index}'>Usuń</a></td>
              </tr>";
              $laczny_koszt += $cena;
    }
    echo "</table>";
    echo "<h3>Łączny koszt: " . number_format($laczny_koszt, 2) . " PLN</h3>";
}
?>

<div class="przycisk">
    <a href="index.php">Kontynuuj zakupy</a>
</div>

</body>
</html>
