Drop table if exists livre;

CREATE TABLE livre
(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
titre varchar(50) not null ,
isbn int unsigned not null,
Langue varchar(30) not null,
annee_publication int unsigned not null,
nombre_pages  int unsigned not null,
nombre_exemplaires  int unsigned not null
);
Drop table if exists auteurs;
CREATE TABLE auteurs
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(50) not null,
prenom varchar(50) not null,
nationalite varchar(50) not null,
date_naissance date not null
);

Drop table if exists theme
create table theme
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
libelle varchar(50) not null
);


Drop table lecteurs if exists ;
CREATE TABLE lecteurs
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(50) not null,
prenom varchar(50) not null,
date_naissance date not null
);
Drop table emprunts if exists;
CREATE TABLE emprunts
(

);