
drop database if exists biblio;
CREATE DATABASE biblio CHARACTER SET utf8mb4;
use biblio;
Drop table if exists auteurs;
CREATE TABLE auteurs
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(50) not null,
prenom varchar(50) not null,
nationalite varchar(50) not null,
date_naissance date not null

);

Drop table if exists theme;
create table theme
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
libelle varchar(50) not null
);
Drop table if exists livre;

CREATE TABLE livre
(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
titre varchar(50) not null ,
isbn int unsigned not null,
Langue varchar(30) not null,
annee_publication int unsigned not null,
nombre_pages  int unsigned not null,
nombre_exemplaires  int unsigned not null,
id_auteur int unsigned not null,
id_theme int unsigned not null,
foreign key(id_auteur) references auteurs(id),
foreign key(id_theme) references theme (id)
);
Drop table  if exists lecteurs ;
CREATE TABLE lecteurs
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(50) not null,
prenom varchar(50) not null,
date_naissance date not null
);
Drop table if exists emprunts;
Create table emprunts
(
id int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
date_debut date not null,
date_fin date not null,
rendu boolean NOT NULL,
id_lecteur int unsigned not null,
foreign key (id_lecteur) references  lecteurs(id)
);

Insert into auteurs (nom, prenom, nationalite, date_naissance)
values
('Musso','Guillaume', 'Français', '1974-06-06'),
('Jolien','Alexandre', 'suisse','1975-11-26' ),
('De Saint Exupéry','Antoine','français','1900-06-29' ),
('Coelho','Paulo','Brésilien','1947-08-24' ),
('Salomé', 'Jacques','Français','1935-05-20')
;
insert into theme(libelle)
values
('Programmation'),
('Roman'),
('Science-Fiction'),
('Thriller'),
('Policier')
;
INSERT INTO livre (titre, isbn, langue, annee_publication, nombre_pages, nombre_exemplaires, id_auteur, id_theme)
VALUES
('Que serais-je sans toi', 97459, 'fr', 2009, 361, 5000000, 1, 2),
('Le Philosophe nu', 58545, 'fr', 2005, 896, 596691555, 2, 2),
('Le Philosopheu', 58252, 'fr', 2005, 896, 596691555, 2, 2)
;
insert into lecteurs(nom,prenom, date_naissance)
values
('Ardui','Thomas', '1991-01-28'),
('Dupont','Charles', '1975-05-27'),
('Oliveira', 'Fabricio', '1992-07-07'),
('Costa Lira', 'Maria Tereza','1953-07-30'),
('Biebuyck', 'Nicolas', '1994-02-18')
;
insert into emprunts(date_debut, date_fin, rendu, id_lecteur)
values
('2024-03-31', '2024-04-14', false,1),
('2024-03-05','2024-03-18', true,4),
('2024-02-25', '2024-03-10', true,3)
;