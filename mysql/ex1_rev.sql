USE Pays ;
select pays.name as Nom
from pays
where name like 'u%';

USE Pays ;
select pays.name as Nom
from pays
where name like 'u%'
order by name desc;

USE Pays ;
select pays.name as Nom
from pays
where name like '%ca' as Pays_ca


USE Pays ;
select COUNT(*) as nb_pays
from pays
where name like '%ca';
--group by name ;

Use Pays;
select name as nom_pays
from pays
where name like 'e%';

Use Pays;
select name as nom_pays
from pays
where name like '%a';

Use Pays;
select name as nom_pays
from pays
where name like '%t%';

Use Pays;
select name as nom_pays
from pays
where name like 'e%' or name like '%a' or name like '%t%';
Use Pays ;
select count(name) as nbre_pays
from pays;

Use Pays
select name as nom_pays, Id_pays
from pays
where Id_pays between 20 and 43;

Use Pays
select name as nom_pays, Id_pays
from pays
where Id_pays >=20 and Id_pays<=43;

Use Pays
select name as nom_pays, Id_pays
from pays
where Id_pays <48 or Id_pays >125;

Use Pays
select name as nom_pays, code
from pays
where code like '%be%' or code like '%FR%' or code like '%LU%' or code like '%NL%';