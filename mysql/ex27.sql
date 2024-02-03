DROP DATABASE IF EXISTS Exercice26;
CREATE DATABASE Exercice26 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Exercice26;
CREATE TABLE  Equipe
(
    IdEquipe int unsigned not null  auto_increment primary key,
    NomClub varchar(30) not null,
    Localite varchar(30) not null ,
    Division tinyint unsigned not null

);

CREATE TABLE Joueur
(
    IdJoueur  int unsigned not null   auto_increment primary key,
    Nom varchar(30) not null,
    Prenon varchar(30) not null,
    DateNaissance date not null,
    IdEquipe int unsigned not null,
    FOREIGN KEY (IdEquipe) REFERENCES Equipe (IdEquipe)
);