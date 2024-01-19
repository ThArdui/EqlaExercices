Use pays;
    Desc pays;
select * from pays limit 2;
select * from continent;
SELECT pays.name AS Nom_Pays, continent.name AS Nom_Continent
FROM pays
         INNER JOIN continent ON pays.continent=continent.code
ORDER BY Nom_Pays ASC;


/*SELECT pays.name AS Nom_Pays, continent.name AS Nom_Continent
FROM pays
         INNER JOIN continent ON pays.Id_Pays = continent.code;



/*SELECT pays.name, continent.name
FROM pays
INNER JOIN continent
ON
pays.Id_pays=continent.code;



/*SELECT full_name
FROM PAYS
INNER JOIN CONTINENT
ON PAYS.FULL_NAME=CONTINENT.NAME ;*/


/*SELECT NAME.PAYS AS NOMPAYS, NAME.CONTINENT AS NOMCONTINENT
FROM PAYS
         INNER JOIN
     PAYS.NAME=CONTINENT.NAME;





/*USE Pays;
    SELECT full_name as nompays
    FROM PAYS
INNER JOIN CONTINENT ON Id_pays=continent_id;

 */