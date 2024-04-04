DROP DATABASE IF EXISTS biblio2;
CREATE DATABASE biblio2 CHARACTER SET utf8mb4;
USE biblio2;

DROP TABLE IF EXISTS auteurs;
CREATE TABLE auteurs (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    nationalite VARCHAR(50) NOT NULL,
    date_naissance DATE NOT NULL
);

DROP TABLE IF EXISTS theme;
CREATE TABLE theme (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
);

DROP TABLE IF EXISTS livre;
CREATE TABLE livre (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    isbn INT UNSIGNED NOT NULL,
    Langue VARCHAR(30) NOT NULL,
    annee_publication INT UNSIGNED NOT NULL,
    nombre_pages INT UNSIGNED NOT NULL,
    nombre_exemplaires INT UNSIGNED NOT NULL,
    id_auteur INT UNSIGNED NOT NULL,
    id_theme INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_auteur) REFERENCES auteurs(id),
    FOREIGN KEY(id_theme) REFERENCES theme(id)
);

DROP TABLE IF EXISTS livres_auteurs;
CREATE TABLE livres_auteurs (
    id_auteur INT UNSIGNED NOT NULL,
    id_livre INT UNSIGNED NOT NULL,
    PRIMARY KEY (id_auteur, id_livre),
    FOREIGN KEY (id_auteur) REFERENCES auteurs(id),
    FOREIGN KEY (id_livre) REFERENCES livre(id)
);

DROP TABLE IF EXISTS lecteurs;
CREATE TABLE lecteurs (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_naissance DATE NOT NULL
);

DROP TABLE IF EXISTS emprunts;
CREATE TABLE emprunts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    rendu BOOLEAN NOT NULL,
    id_lecteur INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_lecteur) REFERENCES lecteurs(id)
);

INSERT INTO auteurs (nom, prenom, nationalite, date_naissance)
VALUES
('Musso', 'Guillaume', 'Français', '1974-06-06'),
('Jolien', 'Alexandre', 'Suisse', '1975-11-26'),
('De Saint Exupéry', 'Antoine', 'Français', '1900-06-29'),
('Coelho', 'Paulo', 'Brésilien', '1947-08-24'),
('Salomé', 'Jacques', 'Français', '1935-05-20');

INSERT INTO theme (libelle)
VALUES
('Programmation'),
('Roman'),
('Science-Fiction'),
('Thriller'),
('Policier');

INSERT INTO livre (titre, isbn, langue, annee_publication, nombre_pages, nombre_exemplaires, id_auteur, id_theme)
VALUES
('Que serais-je sans toi', 97459, 'fr', 2009, 361, 5000000, 1, 2),
('Le Philosophe nu', 58545, 'fr', 2005, 896, 596691555, 2, 2),
('Le Philosopheu', 58252, 'fr', 2005, 896, 596691555, 2, 2);

INSERT INTO lecteurs (nom, prenom, date_naissance)
VALUES
('Ardui', 'Thomas', '1991-01-28'),
('Dupont', 'Charles', '1975-05-27'),
('Oliveira', 'Fabricio', '1992-07-07'),
('Costa Lira', 'Maria Tereza', '1953-07-30'),
('Biebuyck', 'Nicolas', '1994-02-18');

INSERT INTO emprunts (date_debut, date_fin, rendu, id_lecteur)
VALUES
('2024-03-31', '2024-04-14', false, 1),
('2024-03-05', '2024-03-18', true, 4),
('2024-02-25', '2024-03-10', true, 3);
