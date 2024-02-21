USE Exercice26;
INSERT INTO joueur (Nom, Prenom, DateNaissance, IdEquipe)
VALUES ('Ardui', 'Thomas', '1991-01-28', 2);
    INSERT INTO joueur (Nom, Prenom, DateNaissance, IdEquipe)
    VALUES ('Colin', 'Pierre', '1984-07-22',1);
    INSERT INTO joueur (Nom, Prenom, DateNaissance, IdEquipe)
    VALUES('Jacques', 'Gabriel', '2014-08-22',2);
    INSERT INTO joueur (Nom, Prenom, DateNaissance, IdEquipe)
    VALUES ('Dupont', 'Philip', '1991-12-13', 2);
SELECT * FROM joueur;
SELECT  Nom, prenom, DateNaissance, NomClub
FROM joueur
INNER JOIN equipe on joueur.IdEquipe=equipe.IdEquipe;