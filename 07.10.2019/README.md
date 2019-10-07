# Päeva teemad
## Aritmeetilised operaatorid
```
<?php
$summa = $x + $y;
?>
```
```
<?php
$vahe = $x + $y;
?>
```
```
<?php
$korrutis = $x + $y;
?>
```
```
<?php
$jagatis = $x + $y;
?>
```
```
<?php
$jääk = $x + $y;
?>
```
## Lühendoperaatorid
```
<?php
$x = $x + 5;
?>
```
on sama mis
```
<?php
$x += 5;
?>
```
* Analoogselt saab lühendada ka teised operaatorid
## post ja pre operaatorid
* suurendab x väärtus 1 võrra pärast seda, kui teeb eelnevalt kirjutatud avaldis ära
```
<?php
$x++;
?>
```
* suurendab x väärtus 1 võrra ennem seda, kui teeb eelnevalt kirjutatud avaldis ära
```
<?php
++$x;
?>
```
* Sama kehtib ka  ```--``` operaatoriga
## Väärtuse vormindamine
```
<?php
printf('Täna klassis on %d õpilast', $opilasteArv);
?>
```
Väärtuse vormindamiseks kasutatakse järgmised formaadi sõned
```
%s - sõne
%d - täisarv
%f - komaga arv
%.2f - komaga arv, pärast koma on 2 kohta
%3.2f - komaga arv, ennem koma on 3 kohta ja pärast koma on 2 kohta
%c - sümbol
%b - binaarkood
%o - oktaalkood
%x või %X - heksakood
```