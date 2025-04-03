<?php
session_start();

// Produkty w sklepie
$produkty = [
    ['id' => 1, 'nazwa' => 'Kosiarka', 'cena' => 499.99, 'obraz' => 'pobrane.jpeg'],
    ['id' => 2, 'nazwa' => 'Piła', 'cena' => 299.99, 'obraz' => 'pobrane(8).jpeg'],
    ['id' => 3, 'nazwa' => 'Łopatka', 'cena' => 19.99, 'obraz' => 'pobrane(1).jpeg'],
    ['id' => 4, 'nazwa' => 'Szpadel', 'cena' => 79.99, 'obraz' => 'pobrane(2).jpeg'],
    ['id' => 5, 'nazwa' => 'Worek ziemi', 'cena' => 24.99, 'obraz' => 'pobrane(3).jpeg'],
    ['id' => 6, 'nazwa' => 'Worek nawozu', 'cena' => 34.99, 'obraz' => 'pobrane(4).jpeg'],
    ['id' => 7, 'nazwa' => 'Grabie', 'cena' => 49.99, 'obraz' => 'pobrane(5).jpeg'],
    ['id' => 8, 'nazwa' => 'Widły', 'cena' => 89.99, 'obraz' => 'pobrane(6).jpeg'],
    ['id' => 9, 'nazwa' => 'Konewka', 'cena' => 39.99, 'obraz' => 'pobrane(7).jpeg']
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Ogrodniczy</title>
    <link rel="stylesheet" href="style.css">
    <!-- Link do Bootstrapa -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo"><img src="logo.png" alt="logo"></div>
    <nav>
        <a href="kontakt.php">Kontakt</a>
        <a href="koszyk.php">Koszyk</a>
    </nav>
</header>

<main>
    <div class="produkty row">
        <?php foreach ($produkty as $produkt): ?>
            <div class="col-12 col-md-4">
                <div class="produkt">
                    <img src="<?= $produkt['obraz'] ?>" alt="<?= $produkt['nazwa'] ?>" class="img-fluid">
                    <h3><?= $produkt['nazwa'] ?></h3>
                    <p><?= number_format($produkt['cena'], 2) ?> PLN</p>
                    <form action="dodawanie.php" method="post">
                        <input type="hidden" name="id" value="<?= $produkt['id'] ?>">
                        <input type="hidden" name="nazwa" value="<?= $produkt['nazwa'] ?>">
                        <input type="hidden" name="cena" value="<?= $produkt['cena'] ?>">
                        <button type="submit" name="koszyk" class="btn btn-success">Dodaj do koszyka</button>
                    </form>
                    <button class="btn btn-primary">Kup Teraz</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <a href="kontakt.php">Skontaktuj się z nami</a>
    <a href="koszyk.php">Koszyk</a>
</footer>

<!-- Link do skryptu Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
