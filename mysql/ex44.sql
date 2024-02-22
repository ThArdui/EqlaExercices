grant select on Employees.*  to 'totoweb'@'localhost';
Flush privileges;
grant select on employees.inactive_employees to 'totowebremote'@'%';
Flush privileges;
SHOW GRANTS FOR 'totoweb'@'localhost';
SHOW GRANTS FOR 'totowebremote'@'%';
SELECT user, host FROM mysql.user;