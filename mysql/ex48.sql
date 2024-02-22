drop user if exists 'php_user'@'localhost';
create user 'php_user'@'localhost' identified by 'programming';
grant all privileges on *.* to 'php_user'@'localhost';
flush privileges;
SELECT user, host FROM mysql.user;
SHOW GRANTS for 'php_user'@'localhost';

drop user if exists 'php_user'@'%';
create user 'php_user'@'%' identified by 'programmingdi';
grant all privileges on *.* to 'php_user'@'%';
flush privileges;
SELECT user, host FROM mysql.user;
SHOW GRANTS for 'php_user'@'%';