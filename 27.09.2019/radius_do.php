<?php
// radius_do.php
// defineerime muutuja $raadius
// ja omistame kasutaja poolt sisestatud väärtus
$raadius = $_GET['raadius'];
// väljastame saadud väärtus ekraani
echo 'Sisestatud raadius on '.$raadius.'<br>';
// arvutused
// ringi pindala
$ringiPindala = pi() * $raadius * $raadius;
// ringi ümbermõõt
$ringiUmbermoot = pi() * 2 * $raadius;
// muutujate andmete tüüpi ja väärtuste kontroll
//var_dump($ringiPindala);
//var_dump($ringiUmbermoot);
// väljastame tulemused
echo '<hr>';
$ringiPindalaUmmardatud = round($ringiPindala, 3);
echo 'Ringi pindala on '.$ringiPindalaUmmardatud.'<br>';
echo 'Ringi ümbermõõt on '.round($ringiUmbermoot, 3).'<br>';