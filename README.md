# Zadatak3

Ova forma je uradjena koriscenjem PHP i MySQL tehnologija.

## Baza Podataka

Da bi aplikacija pravilno funkcionisala, potrebno je kreirati bazu podataka u MySQL engine-u:

~~~~sql
CREATE TABLE podaci_sa_forme (
    ID_Korisnika INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
);
~~~~

