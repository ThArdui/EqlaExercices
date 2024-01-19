use BlindCode2;
SELECT YEAR(date_inscription) As 'Annee Inscription', COUNT(date_inscription)
FROM eleve_formation
group by YEAR(date_inscription);