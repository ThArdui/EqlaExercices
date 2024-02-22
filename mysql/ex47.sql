drop user if exists 'web_app';
create user 'web_app'@'192.168.1.45' identified by 'webyweby';
grant select , insert, update on Blindcode2 to 'web_app'@'192.168.1.45';
flush privileges;
SELECT user, host FROM mysql.user;
SHOW GRANTS for 'web_app'@'192.168.1.45' ;