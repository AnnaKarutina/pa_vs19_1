<?php
// muutuja defineerimine ja väärtuse võtmine vormist
$nimi = $_GET['nimi'];
$pikkus = $_GET['pikkus'];
$kaal = $_GET['kaal'];
// väljastamine
echo 'Nimi: '.$nimi.'<br>';
echo 'Pikkus: '.$pikkus.' m.<br>';
echo 'Kaal: '.$kaal.' kg.<br>';
echo '<br>';
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Sinu KMI on '.$kmi;
echo '<hr>';
echo '<a href="input.php">Sisesta andmed uuesti</a>';
