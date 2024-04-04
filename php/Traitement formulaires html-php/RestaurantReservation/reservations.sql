DROP DATABASE IF EXISTS resaresto;
CREATE DATABASE resaresto CHARACTER SET utf8mb4;
Use  resaresto;
DROP TABLE IF EXISTS bookings;
CREATE TABLE bookings
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar(50) not null,
    prenom varchar(50) not null,
email varchar(50) not null,
date_naissance date not null,
mode_livraison varchar(30) not null,
adresse_livraison varchar(50) not null,
entree varchar(50) not null,
plat varchar(50) not null,
dessert varchar(50) not null,
occassion varchar(30) not null,
profil_client varchar(30) not null,
heure_reservation varchar(15) not null,
methode_paiement varchar(50) not null
);

DROP TABLE IF EXISTS utilisateurs;
CREATE TABLE utilisateurs
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar(50) not null,
    prenom varchar(50) not null,
email varchar(50) not null,
mot_de_passe varchar(50) not null
);