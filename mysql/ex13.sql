use  localites;
     SELECT * FROM LOCALITE
WHERE CP=4280;
SELECT * FROM LOCALITE
WHERE CP=4280 AND  (COMMUNE LIkE  'B%' OR  COMMUNE LIKE 'A%');
SELECT COMMUNE, CP FROM LOCALITE
WHERE CP BETWEEN 4000 AND 4999;
