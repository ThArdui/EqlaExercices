drop user IF EXISTS 'remote_user'@'%';
create user 'remote_user'@'%' identified  by 'distance2000';
SELECT user, host FROM mysql.user;
grant all privileges on Blindcode2.* to 'remote_user'@'%';
flush privileges;
SHOW GRANTS for 'remote_user'@'%';
revoke all privileges on Blindcode2.* from 'remote_user'@'%';
SHOW GRANTS for 'remote_user'@'%';
drop user 'remote_user'@'%';
SELECT user, host FROM mysql.user;

--GRANT ALL PRIVILEGES ON Pays.* TO 'php'@'localhost' WITH GRANT OPTION;
--FLUSH PRIVILEGES;