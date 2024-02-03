DROP DATABASE IF EXISTS Exercice26;
CREATE DATABASE Exercice26 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Exercice26;
CREATE TABLE  Equipe
(
    Idequipe int unsigned not null,
    NomClub varchar(30) not null,
    Localite varchar(30) not null ,
    Division tinyint unsigned not null
);

