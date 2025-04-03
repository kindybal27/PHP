<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produkt = [
        'id' => $_POST['id'],
        'nazwa' => $_POST['nazwa'],
        'cena' => floatval($_POST['cena'])
    ];

    if (!isset($_SESSION['koszyk'])) {
        $_SESSION['koszyk'] = [];
    }

    $_SESSION['koszyk'][] = $produkt;
}

header('Location: koszyk.php');
exit;
?>