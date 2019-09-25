<?php
// muutuja defineerimine
// $muutujaNimi = väärtus;

// Väärtused - andmed - andmetüübid
// Tekst - string - "info jutumärkides"
// Täisarvud - integer - 2, 7, 9, -15 jne
// Komaga arvud e. reaalarvud - float - 3.5 , 7.9 , -58.56 jne

$eesNimi = 'Anna'; // tekst
$pereNimi = "Karutina";
$email = 'anna.karutina@khk.ee';
$vanus = 38; // aastad, täisarv
$pikkus = 1.62; // meetrid, reaalarv
$kaal = 54; // kilogrammid, täisarv

echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Email: <a href="mailto:'.$email.'">'.$email.'</a><br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';

// dünaamiline muutujate defineerimine
$kehamassiIndeks = $kaal / ($pikkus * $pikkus);
echo 'Kehamassiindeks on '.$kehamassiIndeks.'<br>';
