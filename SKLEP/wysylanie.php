<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $temat = $_POST['temat'];
    $wiadomosc = $_POST['wiadomosc'];

    echo "<h1>Dziękujemy za kontakt!</h1>";
    echo "<p><strong>Imię:</strong> $imie</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Temat:</strong> $temat</p>";
    echo "<p><strong>Wiadomość:</strong> $wiadomosc</p>";
}
?>
