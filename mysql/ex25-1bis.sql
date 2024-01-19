USE Blindcode;
SELECT  formation.nom as Nom_Formation, count(*) as Nbre_eleves

FROM eleve
         INNER JOIN FORMATION ON ELEVE.FORMATION_ID =FORMATION.ID
GROUP BY Nom_Formation ;

