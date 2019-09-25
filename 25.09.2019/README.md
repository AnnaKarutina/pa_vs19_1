# Päeva teemad
## Väljund
```
<?php
print "Tekst mida soovid väljastada";
?>
```
või
```
<?php
echo "Tekst mida soovid väljastada";
?>
```
## Muutujad
* Muutuja defineerimine
```
<?php
$muutujaNimi = väärtus;
?>
```
* Muutuja nimed on:
    * nimi on loogiline
    * kasuta täisnimi
    * kasuta camelStyle
* Muutuja kasutamine
```
<?php
echo "Mingi tekst ".$muutujaNimi." ja veel mingi tekst";
?>
```
## Andmetüübid
* Sõned (string) - jutumärkide või ülakomade vahel olev väärtus
```
<?php
$eesNimi = "SinuEesnimi";
?>
```
* Täisarvud
```
<?php
$numberYks = 6;
$numberKaks = -8;
?>
```
* Komaga arvud, ehk reaalarvud - koma asemel on punkt!
```
<?php
$pikkus = 1.78;
?>
```
## Operaatorid
* = - omistamisoperaator - omistab muutujale väärtus
* . - ühendamisoperaator - ühendab tekst ja muutuja väärtus omavahel kokku
## Kasutaja sisend
Ühes failis pane kokku HTML vorm ja teises on vormi töötlev action fail:
```
<?php
// input.php
<form action="input_do.php method="get">
    <input type="text" name="inputNimi">
</form>
?>
```

```
<?php
// input_do.php
$vormiAndmed = $_GET['inputNimi'];
echo $vormiAndmed;
?>
```