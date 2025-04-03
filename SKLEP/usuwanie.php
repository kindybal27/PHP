<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    unset($_SESSION['koszyk'][$index]);
    $_SESSION['koszyk'] = array_values($_SESSION['koszyk']);
}

header('Location: koszyk.php');
exit;
?>
