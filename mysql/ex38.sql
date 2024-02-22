USE exercice26;
DROP FUNCTION IF EXISTS hello;
Delimiter $$
CREATE FUNCTION hello(first_name varchar(20),last_name varchar(20)) RETURNS varchar(255)
begin
declare resultat varchar(50);
set resultat=concat('Hello ', first_name, ' ', last_name,' ! ');
return resultat;
End;
$$
Delimiter ;










USE exercice26;
DROP FUNCTION IF EXISTS hello;
Delimiter $$
CREATE FUNCTION hello(first_name varchar(20),last_name varchar(20)) RETURNS varchar(255)
begin
return concat('Hello ', first_name, ' ', last_name,' ! ');
End;
$$
Delimiter ;