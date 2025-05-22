# WordPress Tema Projekt

Ovaj projekt predstavlja prilagođenu WordPress temu razvijenu na temelju **Underscores** starter teme (_s) u kombinaciji s **Bootstrap** frameworkom. Tema je kreirana kao dio programa "Izrada i dizajn web sučelja u WordPressu".

## Tehnologije

- **Underscores (_s)** - starter tema za WordPress
- **Bootstrap** - CSS framework za responzivni dizajn
- **WordPress** - sustav za upravljanje sadržajem

## Struktura Projekta

Naša tema koristi modularnu arhitekturu Underscores teme koja dijeli kod u manje, neovisne dijelove radi lakšeg održavanja i ponovne upotrebe.

## Opis Glavnih Predložaka

### style.css
Glavna CSS datoteka koja sadrži:
- **Metadata teme** - naziv, autor, verzija i opis teme
- **Bootstrap integracija** - prilagodbe Bootstrap komponenti
- **Prilagođeni stilovi** - naši CSS stilovi koji proširuju osnovnu Underscores funkcionalnost
- **Responzivni dizajn** - stilovi za različite veličine ekrana

/*
Theme Name: Naša WordPress Tema
Author: Ime Studenta
Version: 1.0
Description: Prilagođena tema bazirana na Underscores s Bootstrap frameworkom
*/


### page.php
Predložak za prikaz statičkih stranica:
- **Container wrapper** - dodali smo Bootstrap container klase za bolje poravnavanje sadržaja
- **Poziva template-parts/content-page.php** za prikaz sadržaja stranice
- **Integracija komentara** - ako su omogućeni na stranici

### single.php
Predložak za prikaz pojedinačnih objava:
- **Container wrapper** - Bootstrap container za konzistentno poravnavanje
- **Poziva template-parts/content.php** za prikaz sadržaja objave
- **Navigacija između objava** - linkovi na prethodnu/sljedeću objavu
- **Komentari** - sekcija za komentare ako su aktivni

### template-parts/content.php
Template dio za prikaz sadržaja objava:
- **Naslov objave** s linkovima
- **Meta informacije** - datum, autor, kategorije
- **Sadržaj objave** - excerpt ili puni sadržaj ovisno o kontekstu
- **Tagovi** - prikaz povezanih tagova
- **Modularnost** - može se koristiti u različitim predlošcima

### template-parts/content-page.php
Template dio specifičan za stranice:
- **Naslov stranice** - bez linka (za razliku od objava)
- **Sadržaj stranice** - puni sadržaj stranice
- **Jednostavniji layout** - bez meta informacija kao što su datum ili kategorije
- **Fokus na sadržaj** - minimalistički pristup za bolje korisničko iskustvo

### archive.php
Predložak za prikaz arhivskih stranica (kategorije, tagovi, datumi):
- **Naslov arhive** - dinamički naslov ovisno o vrsti arhive
- **Lista objava** - koristi template-parts/content.php za svaku objavu
- **Paginacija** - navigacija kroz stranice arhive
- **Breadcrumbs** - navigacijski putokaz za bolje korisničko iskustvo

## Ključne Značajke

### Responzivni Dizajn
Kombinacija Underscores mobilne navigacije i Bootstrap grid sustava osigurava optimalan prikaz na svim uređajima.

### Modularnost
Template parts omogućavaju lakše održavanje koda jer se promjene rade na jednom mjestu.

### Bootstrap Integracija
Framework omogućava brže razvijanje s gotovim komponentama i grid sustavom.

### SEO Optimizacija
Underscores dolazi s dobrom osnovom za SEO s pravilno strukturiranim HTML5 elementima.

## Instalacija i Korištenje

1. Preuzmite temu s [underscores.me](https://underscores.me/)
2. Dodajte Bootstrap CSS i JS datoteke
3. Prilagodite `style.css` s vašim dizajnom
4. Modificirajte template datoteke prema potrebama
5. Testirajte responzivnost na različitim uređajima

## Napomene za Razvoj

- **Ne koristite kao Parent Theme** - Underscores je namijenjen za direktno modificiranje
- **Koristite template parts** - za bolju organizaciju koda
- **Testirajte na različitim uređajima** - osigurajte responzivnost
- **Dokumentirajte promjene** - za lakše održavanje

## Struktura Datoteka

tema-folder/
├── style.css
├── page.php
├── single.php
├── archive.php
├── template-parts/
│ ├── content.php
│ └── content-page.php
└── ... (ostale Underscores datoteke)

Ova tema predstavlja solidnu osnovu za daljnji razvoj WordPress stranica s modernim pristupom dizajnu i funkcionalnosti.