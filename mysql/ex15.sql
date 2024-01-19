USE BLINDCODE ;

SELECT PRENOM AS Firstname,NOM AS Name, YEAR(CURDATE())-YEAR(naissance) AS AGE
FROM eleve;
SELECT PRENOM AS Firstname,NOM AS Name, YEAR(CURDATE())-YEAR(naissance) AS AGE
FROM eleve
ORDER BY AGE ;
SELECT PRENOM AS Firstname,NOM AS Name, YEAR(CURDATE())-YEAR(naissance) AS AGE
FROM eleve
ORDER BY AGE DESC ;

SELECT nom, prenom, formation_id
FROM eleve
WHERE formation_id=2;