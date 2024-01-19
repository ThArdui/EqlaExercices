USE Blindcode;
SELECT eleve.nom as Nom_Eleve, eleve.prenom as Prenom_Eleve, eleve.sexe as Sexe_Eleve, formation.nom as Nom_Formation
FROM eleve
         INNER JOIN FORMATION ON ELEVE.FORMATION_ID =FORMATION.ID;
