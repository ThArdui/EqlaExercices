use blindcode;
    SELECT * FROM ELEVE
WHERE NAISSANCE  BETWEEN '1980/01/01' AND '1990/12/31';
SELECT * FROM ELEVE
WHERE NAISSANCE not BETWEEN '1980/01/01' AND '1990/12/31';