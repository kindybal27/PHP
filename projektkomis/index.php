<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Komis Samochodowy</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Komis Samochodowy</h1>

    <h2>Sortuj według:</h2>
    <form action="" method="GET">
        <label for="sortowanie">Sortuj według:</label>
        <select name="sortowanie" id="sortowanie">
            <option value="marka">Marka</option>
            <option value="model">Model</option>
            <option value="rocznik">Rocznik</option>
            <option value="przebieg">Przebieg</option>
        </select>
        <input type="submit" value="Sortuj">
    </form>

    <table border="1">
        <tr>
            <th>Marka</th>
            <th>Model</th>
            <th>Rocznik</th>
            <th>Przebieg</th>
            <th>Akcje</th>
        </tr>
        <?php
        $serwer = "localhost";
        $uzytkownik = "root"; // Nazwa użytkownika bazy danych
        $haslo = ""; // Hasło do bazy danych
        $baza = "komis";

        $polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

        if ($polaczenie->connect_error) {
            die("Błąd połączenia: " . $polaczenie->connect_error);
        }

        $sortowanie = isset($_GET['sortowanie']) ? $_GET['sortowanie'] : 'marka';

        $sql = "SELECT * FROM samochody ORDER BY $sortowanie";
        $wynik = $polaczenie->query($sql);

        $samochody = array();
        if ($wynik->num_rows > 0) {
            while($wiersz = $wynik->fetch_assoc()) {
                $samochody[] = $wiersz;
            }
        }

        foreach ($samochody as $samochod) {
            echo "<tr>";
            echo "<td>".$samochod['marka']."</td>";
            echo "<td>".$samochod['model']."</td>";
            echo "<td>".$samochod['rocznik']."</td>";
            echo "<td>".$samochod['przebieg']."</td>";
            echo "<td><a href='?akcja=usun&id=".$samochod['id']."'>Usuń</a></td>";
            echo "</tr>";
        }

        if (isset($_GET['akcja']) && $_GET['akcja'] == 'usun' && isset($_GET['id'])) {
            $idDoUsuniecia = $_GET['id'];
            $sql = "DELETE FROM samochody WHERE id=$idDoUsuniecia";
            if ($polaczenie->query($sql) === TRUE) {
                header("Location: {$_SERVER['PHP_SELF']}");
                exit();
            } else {
                echo "Błąd podczas usuwania samochodu: " . $polaczenie->error;
            }
        }

        $polaczenie->close();
        ?>
    </table>

    <h2>Dodaj Samochód</h2>
    <form action="" method="POST">
        <label for="marka">Marka:</label>
        <input type="text" id="marka" name="marka" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="rocznik">Rocznik:</label>
        <input type="number" id="rocznik" name="rocznik" required><br>

        <label for="przebieg">Przebieg:</label>
        <input type="number" id="przebieg" name="przebieg" required><br>

        <input type="submit" value="Dodaj Samochód">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $rocznik = $_POST['rocznik'];
        $przebieg = $_POST['przebieg'];

        $polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

        if ($polaczenie->connect_error) {
            die("Błąd połączenia: " . $polaczenie->connect_error);
        }

        $sql = "INSERT INTO samochody (marka, model, rocznik, przebieg) VALUES ('$marka', '$model', '$rocznik', '$przebieg')";
        if ($polaczenie->query($sql) === TRUE) {
            header("Location: {$_SERVER['PHP_SELF']}");
            exit();
        } else {
            echo "Błąd podczas dodawania samochodu: " . $polaczenie->error;
        }

        $polaczenie->close();
    }
    ?>
</body>
</html>
