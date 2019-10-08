# Päeva teemad
## Tingimuslased
### Loogiline avaldis
Avaldis, mille tulemus on ```true``` või ```false```. 
### Loogiliste avaldiste operaatorid
```
== - võrdub
!= - ei võrdu
>  - suurem kui
<  - väiksem kui
>= - suurem võrdne kui
<= - väiksem võrdne kui
```
### Unaarne if-lause
```
<?php
if(tingimus) {
    // kui tingimus annab true
    // siis toimuvad siin olevad
    // tegevused
}
?>
```
### if-else
```
<?php
if(tingimus) {
    // kui tingimus annab true
    // siis toimuvad siin olevad
    // tegevused
} else {
    // kui tingimus annab false
    // siis toimuvad siin olevad
    // tegevused
}
?>
```
### if - if else - else
```
<?php
if(tingimus1) {
    // kui tingimus1 annab true
    // siis toimuvad siin olevad
    // tegevused
} else if(tingimus2) {
           // kui tingimus1 annab false
           // kui tingimus2 annab true
           // siis toimuvad siin olevad
           // tegevused 
} else {
    // kui tingimus1 ja tingimus2 annab false
    // siis toimuvad siin olevad
    // tegevused
}
?>
```
### Sisseehitatud if-else
Kui ühe tingimuse sisse on vaja lisada teine tingimus
```
<?php
if(tingimus1){
// kui tingimus1 on true
    if(tingimus2){
        // toimub kui tingimu2 on true
    } else {
        // toimub kui tingimus2 on false
    }
} else {
    // toimub kui tingimus1 on false
}
?>
```