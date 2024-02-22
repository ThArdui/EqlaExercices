
DROP database if exists exercice42;
create database Exercice42 CHARACTER SET utf8mb4;
USE exercice42;
CREATE TABLE employe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenon VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    datenaissance DATE NOT NULL,
    date_embauche DATE NULL
);

INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Alexandre', 'Dupont', '1985-04-12', '2010-06-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Marie', 'Durand', '1990-07-23', '2015-09-15');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Lucas', 'Martin', '1978-02-17', '2005-01-20');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Émilie', 'Petit', '1982-11-30', '2008-03-05');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Thomas', 'Leroy', '1974-06-04', '2000-12-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Julie', 'Roux', '1989-09-19', '2014-05-12');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Nicolas', 'David', '1983-01-24', '2011-07-23');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Sophie', 'Moreau', '1979-03-15', '2007-08-30');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Clément', 'Simon', '1986-08-05', '2012-11-09');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Laura', 'Michel', '1992-12-21', '2018-02-19');
alter table employe
add tel varchar(20)  not null;
alter table employe
add email varchar(50) not null;
alter table employe
change column prenon prenom varchar  (30)not null;
alter table employe
change column datenaissance date_naissance date not null ;
alter table employe
modify column nom varchar(100) not null;
alter table employe
drop column date_embauche;
