<?php

$data = getdate();

$rok = $data['year'];
$miesiac = $data['mon'];
$dzien = $data['mday'];
$godzina = $data['hours'];
$minuta = $data['minutes'];
$sekunda = $data['seconds'];

if ($dzien < 10) $dzien = "0".$dzien;
if ($miesiac < 10) $miesiac = "0".$miesiac;
if ($godzina < 10) $godzina = "0".$godzina;
if ($minuta < 10) $minuta = "0".$minuta;
if ($sekunda <10) $sekunda = "0".$sekunda;

echo  "Bieżąca data to: $dzien-$miesiac-$rok r. <br>";
echo  "Bieżąca godzina to: $godzina:$minuta:$sekunda";

//METODA Z FUNKCJA DATE

echo date("Y-m-d"), "<br>";
echo date("d-m-y"), "<br>";
echo date("H:i:s a"), "<br>";
echo date("Y-m-d G:i:s"), "<br>";
echo date("G:i:s"), "<br>";

// ZADANIE


// Pobranie bieżącej daty i czasu
$data = getdate();

// Pobranie informacji o dacie
$rok = $data['year'];
$miesiac = $data['mon'];
$dzien = $data['mday'];
$dzienTygodnia = $data['wday']; // Używamy 'wday' zamiast 'weekday'
$numerDniaWroku = $data['yday'] + 1; // dodajemy 1, ponieważ yday zwraca dzień od 0

// Tablica z nazwami dni w języku polskim
$dniTygodnia = array("Niedziela", "Poniedziałek",  "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota");

// Tablica z nazwami miesięcy w języku polskim
$miesiace = [
    1 => "Styczeń", 2 => "Luty", 3 => "Marzec", 4 => "Kwiecień", 5 => "Maj", 6 => "Czerwiec",
    7 => "Lipiec", 8 => "Sierpień", 9 => "Wrzesień", 10 => "Październik", 11 => "Listopad", 12 => "Grudzień"
];

// Wyświetlenie wyników
echo "Dziś jest " . $dniTygodnia[$dzienTygodnia] . "<br>";
echo "$dzien " . $miesiace[$miesiac] . " $rok r.<br>";
echo "Jest to $numerDniaWroku dzień roku";


?>