USE LOCALITES;

select Commune, Latitude
from localite
ORDER BY Latitude asc
LIMIT 1;

select Commune, Longitude
from localite
where CP=9220
ORDER BY Longitude DESC
LIMIT 1;

select avg(Latitude) as latitude_moyenne
from localite;

select Longitude, count(longitude) as nb
from localite
group by longitude ;

select Longitude , count(longitude) as nb
from localite
group by longitude
having nb>2;

SELECT l.* FROM Localite l
INNER JOIN (
select Longitude , count(longitude) as nb
from localite
group by longitude
having nb>2) gb on l.Longitude = gb.longitude
ORDER BY Longitude ASC
LIMIT 20;