USE BLINDCODE ;

SELECT PRENOM AS Firstname,NOM AS Name, YEAR(CURDATE())-YEAR(naissance) AS AGE
FROM eleve;
SELECT AVG(YEAR(current_date)-YEAR(naissance))AS AgeMoyen
FROM ELEVE;
