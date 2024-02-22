USE ventes;
DROP FUNCTION IF EXISTS remove_tvac;
Delimiter $$
CREATE FUNCTION remove_tvac(prix_tvac float, taux_tva float) Returns float
BEGIN

return prix_tvac / (taux_tva+1);
END
$$
Delimiter ;
select remove_tvac(80,0.21);