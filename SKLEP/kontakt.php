<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container text-center my-4">
            <h1>Skontaktuj się z nami</h1>
            <nav>
                <a href="index.php">Strona główna</a>
                <a href="koszyk.php">Koszyk</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <form action="wysylanie.php" method="post">
            <div class="mb-3">
                <label for="imie" class="form-label">Imię</label>
                <input type="text" class="form-control" id="imie" name="imie" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="temat" class="form-label">Temat</label>
                <input type="text" class="form-control" id="temat" name="temat" required>
            </div>
            <div class="mb-3">
                <label for="wiadomosc" class="form-label">Wiadomość</label>
                <textarea class="form-control" id="wiadomosc" name="wiadomosc" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
