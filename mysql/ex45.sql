DROP USER IF EXISTS 'misterardui'@'localhost';
CREATE USER 'misterardui'@'localhost' IDENTIFIED BY 'toto1991';
grant select on employees.employees_info to 'misterardui'@'localhost';
flush privileges;
SELECT user, host FROM mysql.user;
SHOW GRANTS FOR 'misterardui'@'localhost';

