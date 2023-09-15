# Zadatak3

Ova forma je uradjena koriscenjem PHP i MySQL tehnologija.

## Baza Podataka

Da bi aplikacija pravilno funkcionisala, potrebno je kreirati bazu podataka u MySQL engine-u:

~~~~sql
CREATE TABLE form_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT
);
~~~~

