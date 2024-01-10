use Pays;
DESC PAYS;
SELECT continent, COUNT(*) as nbpays
FROM PAYS
group by continent
HAVING NBPAYS<10;
use Pays;
DESC PAYS;
SELECT continent, COUNT(*) as nbpays
FROM PAYS
group by continent