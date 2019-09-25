# Programmeerimise alused
Antud kursus annab ülevaade programmeerimise aluste baasteadmistest PHP keele baasil
## Ajakava
### 20.09.2019
* Tarkvara installeerimine
    * [PhpStorm](https://www.jetbrains.com/phpstorm/)
    * [git](https://git-scm.com/downloads)
* Tarkvara seadistamine
    * Valmista litsens
    * PhpStom põhiseadistus (line numbers, soft wrap, zoom)
    * git.exe ühendus PhpStormiga
    * github.com repo loomine ning ühendamine PhpStormiga
### 25.09.2019
* git kasutamine käsurealt

Kui repo ei ole initsialiseeritud, siis tuleb see ära teha
```
git init
```
Nüüd lisa muudatud fail jälgimissüsteemi (git)
```
git add failinimi
```
Koosta kirjeldus antud muudatusele
```
git commit -m "Kirjelduse sõne"
```
Lükka lokaalsest repost kirjeldus kausreposse (näiteks github.com)
```
git push -uf origin master
```
Siin origin on ühenduse nimi ja master on peaharu

* git kasutamine läbi PhpStormi
```
VCS -> Commit (Ctrl + K)
```
Antud kanas vali vajalikud failid, mis on vaja antud commitiga seostada, lisa commiti sõne ja vajuta Commit või Commit and Push

 