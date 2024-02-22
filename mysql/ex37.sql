USE exercice26;
DROP FUNCTION IF EXISTS hello_world;
DELIMITER $$
CREATE FUNCTION hello_world() RETURNS varchar(255)
begin
RETURN 'Hello World from SQL!';
end ;
$$
DELIMITER ;

